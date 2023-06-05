<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/gallery-plusplus-inlinejs.js.twig */
class __TwigTemplate_c64261c5378f956ced3ecf6b52a102bdd790ad8aeefbcaf55c125755aa336ee3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "\$(\"#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\").justifiedGallery({
    rowHeight: ";
        // line 3
        echo twig_escape_filter($this->env, ($context["rowHeight"] ?? null), "html", null, true);
        echo ",
    margins: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
        echo ",
    lastRow: \"";
        // line 5
        echo twig_escape_filter($this->env, ($context["lastRow"] ?? null), "html", null, true);
        echo "\",
    captions: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["captions"] ?? null), "html", null, true);
        echo ",
    border: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["border"] ?? null), "html", null, true);
        echo ",
";
        // line 9
        echo "    waitThumbnailsLoad: false,
    thumbnailPath: function (currentPath, width, height, image) {
";
        // line 12
        echo "        return image.currentSrc;
    },
});

GLightbox({
    selector: \".glightbox-";
        // line 17
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\",
    openEffect: \"";
        // line 18
        echo twig_escape_filter($this->env, ($context["openEffect"] ?? null), "html", null, true);
        echo "\",
    closeEffect: \"";
        // line 19
        echo twig_escape_filter($this->env, ($context["closeEffect"] ?? null), "html", null, true);
        echo "\",
    slideEffect: \"";
        // line 20
        echo twig_escape_filter($this->env, ($context["slideEffect"] ?? null), "html", null, true);
        echo "\",
    closeButton: ";
        // line 21
        echo twig_escape_filter($this->env, ($context["closeButton"] ?? null), "html", null, true);
        echo ",
    touchNavigation: ";
        // line 22
        echo twig_escape_filter($this->env, ($context["touchNavigation"] ?? null), "html", null, true);
        echo ",
    touchFollowAxis: ";
        // line 23
        echo twig_escape_filter($this->env, ($context["touchFollowAxis"] ?? null), "html", null, true);
        echo ",
    keyboardNavigation: ";
        // line 24
        echo twig_escape_filter($this->env, ($context["keyboardNavigation"] ?? null), "html", null, true);
        echo ",
    closeOnOutsideClick: ";
        // line 25
        echo twig_escape_filter($this->env, ($context["closeOnOutsideClick"] ?? null), "html", null, true);
        echo ",
    loop: ";
        // line 26
        echo twig_escape_filter($this->env, ($context["loop"] ?? null), "html", null, true);
        echo ",
    draggable: ";
        // line 27
        echo twig_escape_filter($this->env, ($context["draggable"] ?? null), "html", null, true);
        echo ",
    descPosition: \"";
        // line 28
        echo twig_escape_filter($this->env, ($context["descPosition"] ?? null), "html", null, true);
        echo "\",
    moreText: \"";
        // line 29
        echo twig_escape_filter($this->env, ($context["descMoreText"] ?? null), "html", null, true);
        echo "\",
    moreLength: ";
        // line 30
        echo twig_escape_filter($this->env, ($context["descMoreLength"] ?? null), "html", null, true);
        echo ",
});
";
    }

    public function getTemplateName()
    {
        return "partials/gallery-plusplus-inlinejs.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  59 => 12,  55 => 9,  51 => 7,  47 => 6,  43 => 5,  39 => 4,  35 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# add javascript for gallery and lightbox configuration #}
\$(\"#{{ id }}\").justifiedGallery({
    rowHeight: {{  rowHeight  }},
    margins: {{  margins  }},
    lastRow: \"{{  lastRow  }}\",
    captions: {{  captions  }},
    border: {{  border  }},
    {#~ use given width and height, don't load \"src\" attribute #}
    waitThumbnailsLoad: false,
    thumbnailPath: function (currentPath, width, height, image) {
        {#~ don't try to reload image from \"src\" #}
        return image.currentSrc;
    },
});

GLightbox({
    selector: \".glightbox-{{ id }}\",
    openEffect: \"{{ openEffect }}\",
    closeEffect: \"{{ closeEffect }}\",
    slideEffect: \"{{ slideEffect }}\",
    closeButton: {{ closeButton }},
    touchNavigation: {{ touchNavigation }},
    touchFollowAxis: {{ touchFollowAxis }},
    keyboardNavigation: {{ keyboardNavigation }},
    closeOnOutsideClick: {{ closeOnOutsideClick }},
    loop: {{ loop }},
    draggable: {{ draggable }},
    descPosition: \"{{ descPosition }}\",
    moreText: \"{{ descMoreText }}\",
    moreLength: {{ descMoreLength }},
});
", "partials/gallery-plusplus-inlinejs.js.twig", "C:\\xampp\\htdocs\\user\\plugins\\shortcode-gallery-plusplus\\templates\\partials\\gallery-plusplus-inlinejs.js.twig");
    }
}
