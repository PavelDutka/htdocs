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

/* partials/gallery-plusplus.html.twig */
class __TwigTemplate_cc92611a7d8d9474ffe52ff8439c925630aff48196b8a61109c552b50f03be8c extends \Twig\Template
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
        echo "<p id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "src", [], "array"), "html", null, true);
            echo "\" class=\"glightbox-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
            // line 6
            if ((($context["descEnabled"] ?? null) == "true")) {
                // line 7
                echo "";
                echo " data-description=\"";
                echo $this->getAttribute($context["image"], "desc", [], "array");
                echo "\"";
            }
            // line 9
            echo ">
";
            // line 12
            $context["original_image"] = $this->getAttribute($context["image"], "src", [], "array");
            // line 14
            if (($context["base_url"] ?? null)) {
                // line 15
                $context["original_image"] = twig_replace_filter(($context["original_image"] ?? null), [($context["base_url"] ?? null) => ""]);
            }
            // line 19
            $context["original_image"] = twig_split_filter($this->env, ($context["original_image"] ?? null), "/user/", 2);
            // line 21
            $context["original_image"] = ("user://" . $this->getAttribute(($context["original_image"] ?? null), 1, [], "array"));
            // line 23
            $context["original_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["original_image"] ?? null), [], "array");
            // line 25
            if (($context["original_image"] ?? null)) {
                // line 26
                $context["estimated_thumb_width"] = twig_round((($this->getAttribute(($context["original_image"] ?? null), "width", []) * ($context["rowHeight"] ?? null)) / $this->getAttribute(($context["original_image"] ?? null), "height", [])));
                // line 30
                echo "        ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["original_image"] ?? null), "derivatives", [0 => [0 => twig_round((                // line 31
($context["estimated_thumb_width"] ?? null) * ($context["resizeFactor"] ?? null)))]], "method"), "sizes", [0 => "1px"], "method"), "width", [0 =>                 // line 33
($context["estimated_thumb_width"] ?? null)], "method"), "height", [0 =>                 // line 34
($context["rowHeight"] ?? null)], "method"), "loading", []), "html", [0 => $this->getAttribute(                // line 35
$context["image"], "title", []), 1 => $this->getAttribute($context["image"], "alt", [])], "method");
                echo "
";
            } else {
                // line 38
                echo "        ";
                echo $this->getAttribute($context["image"], "image", [], "array");
                // line 39
                echo "
";
            }
            // line 41
            echo "    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/gallery-plusplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 43,  90 => 41,  86 => 39,  83 => 38,  78 => 35,  77 => 34,  76 => 33,  75 => 31,  73 => 30,  71 => 26,  69 => 25,  67 => 23,  65 => 21,  63 => 19,  60 => 15,  58 => 14,  56 => 12,  53 => 9,  47 => 7,  45 => 6,  39 => 4,  35 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# html #}
<p id=\"{{ id }}\">
    {%~ for image in images %}
    <a href=\"{{ image[\"src\"] }}\" class=\"glightbox-{{ id }}\"
        {#- add description, if enabled #}
        {%- if descEnabled == \"true\" %}
            {{- \"\" }} data-description=\"{{ image[\"desc\"]|raw }}\"
        {%- endif %}
>
        {#~ try to generate a thumbnail image #}
        {#- get the full image url              https://mywebsite.com/user/pages/02.gallery/01.landscapes/image01.jpg #}
        {%- set original_image = image[\"src\"] %}
        {#- remove the sites url                                     /user/pages/02.gallery/01.landscapes/image01.jpg #}
        {%- if base_url %}
            {%- set original_image = original_image|replace({(base_url): \"\"}) %}
        {%- endif %}
        {#- remove \"/user/\"                                                pages/02.gallery/01.landscapes/image01.jpg #}
        {#- be careful, a page can be named \"user\", only replace the first occurence #}
        {%- set original_image = original_image|split(\"/user/\", 2) %}
        {#- add \"user://\"                                           user://pages/02.gallery/01.landscapes/image01.jpg #}
        {%- set original_image = \"user://\" ~ original_image[1] %}
        {#- use the generated url to get the image via grav (can load any image in the /user directory) #}
        {%- set original_image = page.media[original_image] %}
        {#- success: can now generate a smaller thumbnail image #}
        {%- if original_image %}
        {%- set estimated_thumb_width = ( original_image.width * rowHeight / original_image.height ) | round %}
        {#- force the use of the first image in srcset (thumbnail) with sizes=\"1px\" #}
        {#- RSS readers shouldn't use srcset images, otherwise they will display something similar to JG, but not justified #}
        {#- width and height to avoid Justified Gallery loading the image from \"src\" attribute #}
        {{ original_image
            .derivatives( [ ( estimated_thumb_width * resizeFactor ) | round ] )
            .sizes( \"1px\" )
            .width( estimated_thumb_width )
            .height( rowHeight )
            .loading.html(image.title, image.alt)|raw }}
        {#~ couldn't find the image inside grav, so just use the original url #}
        {%- else %}
        {{ image[\"image\"]|raw }}
        {{- \"\\n\" }}
        {%- endif %}
    </a>
    {%~ endfor %}
</p>
", "partials/gallery-plusplus.html.twig", "C:\\xampp\\htdocs\\user\\plugins\\shortcode-gallery-plusplus\\templates\\partials\\gallery-plusplus.html.twig");
    }
}
