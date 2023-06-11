;const pluginSwiperJS = function () {
    const self = this;
    const instances = [];
    const players = {};

    let YT_players_initialized = false;
    let YTIframeAPI_initialized = false;
    let YTIframeAPI_initializing = false;
    let YTIframeAPI_players = [];

    window.onYouTubeIframeAPIReady = function () {
        YTIframeAPI_initialized = true;
        YTIframeAPI_initializing = false;

        initYTPLayers();
    }

    function videoPaused(holder) {
        holder.querySelector('.swiper-overlay-element').classList.add('swiper-overlay');
    }

    function videoStarted(holder) {
        holder.querySelector('.swiper-overlay-element').classList.remove('swiper-overlay');
    }

    function initYTPLayers() {
        for (let i = 0; i < YTIframeAPI_players.length; i++) {
            let player = YTIframeAPI_players[i];
            let player_parent = player.parentElement;
            let YT_player = self.getYoutubePlayer(player);

            YT_player.addEventListener('onStateChange', function(state) {
                if (state.data === YT.PlayerState.PAUSED || state.data === YT.PlayerState.ENDED) {
                    videoPaused(player_parent);
                } else if (state.data === YT.PlayerState.PLAYING) {
                    videoStarted(player_parent);
                }
            });

            player_parent.querySelector('.swiper-overlay-element').addEventListener('click', function () {
                if (YT_player.getPlayerState() !== YT.PlayerState.PLAYING) {
                    YT_player.play();
                } else {
                    YT_player.pause();
                }
            });

            players['r_' + player_parent.getAttribute('data-rand')] = YT_player;
        }

        YT_players_initialized = true;
    }

    self.initPlayers = function (wrapper) {
        const slides = wrapper.querySelectorAll('.swiper-slide');
        let yt_players = [];

        for (let i = 1; i <= slides.length; i++) {
            let video_container = slides[i - 1].querySelector('.swiper-video-container');

            if (!video_container) {
                continue;
            }

            const type = video_container.getAttribute('data-video-type');

            if (type === 'local') {
                let player = video_container.querySelector('video');

                if (player) {
                    let player_parent = player.parentElement.parentElement;

                    player.addEventListener('pause', function() {
                        videoPaused(player_parent)
                    });

                    player.addEventListener('play', function() {
                        videoStarted(player_parent)
                    });

                    player_parent.querySelector('.swiper-overlay-element').addEventListener('click', function () {
                        let player_playing = !!(player.currentTime > 0 && !player.paused && !player.ended && player.readyState > 2);

                        if (!player_playing) {
                            player.play();
                        } else {
                            player.pause();
                        }
                    });

                    players['r_' + video_container.getAttribute('data-rand')] = player;
                }
            } else if (type === 'youtube') {
                yt_players.push(video_container.querySelector('.youtube-player'));
            }
        }

        if (yt_players.length) {
            self.initYTIframeAPI(yt_players);

            return true;
        }

        return false;
    }

    self.initYTIframeAPI = function (yt_players) {
        YTIframeAPI_players = yt_players;

        if (YTIframeAPI_initialized) {
            initYTPLayers();
        }

        if (!YTIframeAPI_initializing) {
            YTIframeAPI_initializing = true;

            const tag = document.createElement('script');

            tag.src = 'https://www.youtube.com/iframe_api';
            const firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
    };

    self.getYoutubePlayer = function (element) {
        const id = element.getAttribute('data-id');
        const player = new window.YT.Player(element, {
            videoId: id,
            playerVars: {
                autoplay: false,
                modestbranding: true,
                rel: 0
            }
        });

        player.pause = function () {
            this.pauseVideo();
        };

        player.play = function () {
            this.playVideo();
        };

        return player;
    };

    const initSwiper = function (id, options) {
        if (!id) {
            return;
        }

        options = options || {};

        const holder_selector = '#swiper-js-' + id;
        const holder = document.querySelector(holder_selector);
        const wait_for_external = self.initPlayers(holder.querySelector('.swiper-wrapper'));
        const instance = new Swiper(holder_selector, options);

        function setEvents()
        {
            if (Object.keys(players).length) {
                instance.on('slideChange', function () {
                    let previous_slide = instance.slides[instance.previousIndex];
                    const container = previous_slide.querySelector('.swiper-video-container');

                    if (!container) {
                        return;
                    }

                    if (typeof players['r_' + container.getAttribute('data-rand')] !== 'undefined') {
                        players['r_' + container.getAttribute('data-rand')].pause();
                    }
                });
            }

            instances[id] = instance;
        }

        if (wait_for_external && !YT_players_initialized) {
            function waitForExternal() {
                setTimeout(function () {
                    if (YT_players_initialized) {
                        setEvents();

                        return;
                    }

                    waitForExternal();
                }, 250);
            }

            waitForExternal();
        } else {
            setEvents();
        }
    };

    return {
        initSwiper: initSwiper,
        getSwiper: function (id) {
            return instances[id] || null;
        }
    };
};
