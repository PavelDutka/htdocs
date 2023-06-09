<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/plugins/swiper-js/languages.yaml',
    'modified' => 1651524212,
    'size' => 8092,
    'data' => [
        'en' => [
            'PLUGIN_SWIPER_JS' => [
                'DEFAULTS' => 'Default options',
                'PAGE_OPTIONS' => 'Page swiper options',
                'USE_BUILT_IN_SWIPER_ASSETS' => [
                    'LABEL' => 'Use Swiper CSS and JS',
                    'HELP' => 'May want to disable if your theme includes custom Swiper styles and Javascript or you plan to include your own'
                ],
                'USE_BUILT_IN_CSS' => 'Use built in CSS',
                'USE_BUILT_IN_JS' => 'Use built in JS',
                'PAGE_ITEMS' => [
                    'LABEL' => 'Slider items',
                    'DESCRIPTION' => 'If slider items are empty, page media is taken into the slider',
                    'ITEM_TITLE' => 'Title',
                    'ITEM_TEXT' => 'Text',
                    'ITEM_PAGE_MEDIA' => 'Page media',
                    'ITEM_TEXT_OVERLAY' => [
                        'LABEL' => 'Text overlay',
                        'HELP' => 'If enabled, overlay with item title and text will be added on top of image'
                    ],
                    'ITEM_EXTERNAL' => [
                        'LABEL' => 'External link',
                        'HELP' => 'Currently only Youtube is supported. If external link is filled in, it takes precedence over selected media or text and only youtube video is displayed'
                    ]
                ],
                'OPTIONS' => [
                    'AUTOPLAY' => 'Autoplay',
                    'LOOP' => 'Loop',
                    'ZOOM' => 'Zoom',
                    'NAVIGATION' => [
                        'NEXT_EL' => 'Next button element selector',
                        'NEXT_EL_HELP' => 'Leave empty to disable button navigation to next',
                        'PREV_EL' => 'Previous button element selector',
                        'PREV_EL_HELP' => 'Leave empty to disable button navigation to previous'
                    ],
                    'PAGINATION' => [
                        'EL' => 'Pagination element selector',
                        'EL_HELP' => 'Leave empty to disable pagination'
                    ],
                    'SCROLLBAR' => [
                        'EL' => 'Scrollbar element selector',
                        'EL_HELP' => 'Leave empty to disable scrollbar'
                    ],
                    'DIRECTION' => [
                        'LABEL' => 'Direction',
                        'HORIZONTAL' => 'Horizontal',
                        'VERTICAL' => 'Vertical'
                    ],
                    'EFFECT' => [
                        'LABEL' => 'Effect',
                        'SLIDE' => 'Slide',
                        'FADE' => 'Fade',
                        'CUBE' => 'Cube',
                        'COVER_FLOW' => 'Cover flow',
                        'FLIP' => 'Flip'
                    ],
                    'SPACE_BETWEEN' => [
                        'LABEL' => 'Space between slides',
                        'HELP' => 'Distance between slides in pixels'
                    ],
                    'CENTERED_SLIDES' => 'Centered slides',
                    'FREE_MODE' => 'Free mode',
                    'FREE_MODE_STICKY' => [
                        'LABEL' => 'Free mode sticky',
                        'HELP' => 'Set to Enabled to enable snap to slides positions in free mode'
                    ],
                    'GRAB_CURSOR' => [
                        'LABEL' => 'Grab cursor',
                        'HELP' => 'This option may a little improve desktop usability. If enabled, user will see the "grab" cursor when hover on Swiper'
                    ],
                    'AUTO_HEIGHT' => [
                        'LABEL' => 'Auto height',
                        'HELP' => 'If enabled, slider wrapper will adapt its height to the height of the currently active slide'
                    ],
                    'INITIAL_SLIDE' => 'Initial slide',
                    'PRELOAD_IMAGES' => [
                        'LABEL' => 'Preload images',
                        'HELP' => 'When enabled Swiper will force to load all images'
                    ],
                    'SPEED' => [
                        'LABEL' => 'Speed',
                        'HELP' => 'Duration of transition between slides (in milliseconds)'
                    ],
                    'SHORT_SWIPES' => 'Short swipes',
                    'KEYBOARD' => [
                        'LABEL' => 'Keyboard',
                        'HELP' => 'Enables navigation through slides using keyboard'
                    ],
                    'MOUSEWHEEL' => [
                        'LABEL' => 'Mousewheel',
                        'HELP' => 'Enables navigation through slides using mouse wheel'
                    ],
                    'HISTORY' => [
                        'LABEL' => 'History',
                        'HELP' => 'Enables history push state where every slide will have its own url'
                    ],
                    'WATCH_OVERFLOW' => [
                        'LABEL' => 'Watch overflow',
                        'HELP' => 'When enabled Swiper will be disabled and hide navigation buttons on case there are not enough slides for sliding'
                    ],
                    'WATCH_SLIDES_PROGRESS' => [
                        'LABEL' => 'Watch slides progress',
                        'HELP' => 'Enable this feature to calculate each slides progress'
                    ],
                    'WATCH_SLIDES_VISIBILITY' => [
                        'LABEL' => 'Watch slides visibility',
                        'HELP' => '"Watch slides progress" should be enabled. Enable this option and slides that are in viewport will have additional visible class'
                    ]
                ],
                'A11Y' => [
                    'FIRST_SLIDE' => 'This is the first slide',
                    'LAST_SLIDE' => 'This is the last  slide',
                    'NEXT_SLIDE' => 'Next slide',
                    'PAGINATION_BULLET' => 'Go to slide {{index}}',
                    'PREV_SLIDE' => 'Previous slide'
                ]
            ]
        ],
        'lt' => [
            'PLUGIN_SWIPER_JS' => [
                'DEFAULTS' => 'Nustatymai pagal nutylėjimą',
                'PAGE_OPTIONS' => 'Puslapio slankiklio nustatymai',
                'USE_BUILT_IN_SWIPER_ASSETS' => [
                    'LABEL' => 'Naudoti Swiper CSS ir JS',
                    'HELP' => 'Jei jūsų tema naudoja nestandartinius Swiper stilius ar JavaScript arba planuojate naudoti savo, galite išjungti standartinių failų įterpimą'
                ],
                'USE_BUILT_IN_CSS' => 'Naudoti įskiepio CSS',
                'USE_BUILT_IN_JS' => 'Naudoti įskiepio JS',
                'PAGE_ITEMS' => [
                    'LABEL' => 'Slankiklio elementai',
                    'DESCRIPTION' => 'Jei slankiklio elementų nėra, jis užpildomas iš puslapio media elementų',
                    'ITEM_TITLE' => 'Antraštė',
                    'ITEM_TEXT' => 'Tekstas',
                    'ITEM_PAGE_MEDIA' => 'Puslapio media',
                    'ITEM_TEXT_OVERLAY' => [
                        'LABEL' => 'Teksto perdanga',
                        'HELP' => 'Jei įjungta, ant paveikslėlio bus rodomi elemento antraštė bei tekstas'
                    ],
                    'ITEM_EXTERNAL' => [
                        'LABEL' => 'Išorinė nuoroda',
                        'HELP' => 'Šiuo metu palaikoma tik Youtube. Jei užpildyta išorinė nuoroda, tekstai ir media nebus rodomi, o tik išorinės nuorodos elementas'
                    ]
                ],
                'OPTIONS' => [
                    'AUTOPLAY' => 'Pradėti automatiškai',
                    'LOOP' => 'Kartoti ratu',
                    'ZOOM' => 'Padidinimas',
                    'NAVIGATION' => [
                        'NEXT_EL' => 'Mygtuko "Kitas" elemento selektorius',
                        'NEXT_EL_HELP' => 'Palikite tuščią, jei norite išjungti navigaciją į kitą skaidrę',
                        'PREV_EL' => 'Mygtuko "Buvęs" elemento selektorius',
                        'PREV_EL_HELP' => 'Palikite tuščią, jei norite išjungti navigaciją į buvusią skaidrę'
                    ],
                    'PAGINATION' => [
                        'EL' => 'Puslapiavimo elemento selektorius',
                        'EL_HELP' => 'Palikite tuščią, jei norite išjungti puslapiavimą'
                    ],
                    'SCROLLBAR' => [
                        'EL' => 'Slinkties juostos elemento selektorius',
                        'EL_HELP' => 'Palikite tuščią, jei norite išjungti slinkties juostą'
                    ],
                    'DIRECTION' => [
                        'LABEL' => 'Kryptis',
                        'HORIZONTAL' => 'Horizontali',
                        'VERTICAL' => 'Vertikali'
                    ],
                    'EFFECT' => [
                        'LABEL' => 'Efektas',
                        'SLIDE' => 'Slinkimas',
                        'FADE' => 'Išnykimas',
                        'CUBE' => 'Kubas',
                        'COVER_FLOW' => 'Viršelis',
                        'FLIP' => 'Apvertimas'
                    ],
                    'SPACE_BETWEEN' => [
                        'LABEL' => 'Tarpas tarp skaidrių',
                        'HELP' => 'Atstumas pikseliais tarp skaidrių'
                    ],
                    'CENTERED_SLIDES' => 'Centruotos skaidrės',
                    'FREE_MODE' => 'Laisvas režimas',
                    'FREE_MODE_STICKY' => [
                        'LABEL' => 'Prikimbantis laisvas režimas',
                        'HELP' => 'Įjungus, laisvame režime skaidrės prikibs prie savo pozicijų'
                    ],
                    'GRAB_CURSOR' => [
                        'LABEL' => 'Griebimo kursorius',
                        'HELP' => 'Ši nuosatata gali šiek tiek padėti kompiuterių vartotojams. Įjungus vartotojai matys "griebimo" kursorių užvedus pelę ant slankiklio'
                    ],
                    'AUTO_HEIGHT' => [
                        'LABEL' => 'Automatinis aukštis',
                        'HELP' => 'Įjungus slankiklio aukštis bus pritaikomas prie aktyvios skaidrės aukščio'
                    ],
                    'INITIAL_SLIDE' => 'Pradinė skaidrė',
                    'PRELOAD_IMAGES' => [
                        'LABEL' => 'Užkrauti paveikslėlius iš anksto',
                        'HELP' => 'Įjungus Swiper priverstinai užkraus visus paveikslėlius'
                    ],
                    'SPEED' => [
                        'LABEL' => 'Greitis',
                        'HELP' => 'Perėjimo tarp skaidrių laikas (milisekundėmis)'
                    ],
                    'SHORT_SWIPES' => 'Trumpi perbraukimai',
                    'KEYBOARD' => [
                        'LABEL' => 'Klaviatūra',
                        'HELP' => 'Įjungia skaidrių navigaciją naudojant klaviatūrą'
                    ],
                    'MOUSEWHEEL' => [
                        'LABEL' => 'Pelės ratukas',
                        'HELP' => 'Įjungia skaidrių navigaciją naudojant pelės ratuką'
                    ],
                    'HISTORY' => [
                        'LABEL' => 'Istorija',
                        'HELP' => 'Įjungia istorijos būseną, kur kiekviena skaidrė turi savo nuorodą'
                    ],
                    'WATCH_OVERFLOW' => [
                        'LABEL' => 'Stebėti perteklių',
                        'HELP' => 'Įjungus Swiper išjungs ir paslėps navigacijos mygtukus, jei nebus pakankamai skaidrių paslinkimui'
                    ],
                    'WATCH_SLIDES_PROGRESS' => [
                        'LABEL' => 'Stebėti skaidrių progresą',
                        'HELP' => 'Įjungus bus skaičiuojamas kiekvienos skaidrės progresas'
                    ],
                    'WATCH_SLIDES_VISIBILITY' => [
                        'LABEL' => 'Stebėti skaidrių matomumą',
                        'HELP' => '"Stebėti skaidrių progresą" turi būti įjungta. Įjungus šią nuostatą, aktyvi skaidrė įgaus matomos skaidrės papildomą klasę'
                    ]
                ],
                'A11Y' => [
                    'FIRST_SLIDE' => 'Tai yra pirma skaidrė',
                    'LAST_SLIDE' => 'Tai yra paskutinė skaidrė',
                    'NEXT_SLIDE' => 'Kita skaidrė',
                    'PAGINATION_BULLET' => 'Pereiti į skaidrę numeriu {{index}}',
                    'PREV_SLIDE' => 'Buvusi skaidrė'
                ]
            ]
        ]
    ]
];
