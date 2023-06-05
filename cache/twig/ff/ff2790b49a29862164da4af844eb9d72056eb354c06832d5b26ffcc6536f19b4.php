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

/* partials/base.html.twig */
class __TwigTemplate_906ab8b543d55c8143086289a15e3e5203883804d897714ec8b20c8e8b4205de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('assets', $context, $blocks);
        // line 30
        echo "</head>
<body id=\"top\" class=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "<!--
";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo " -->

";
        // line 62
        $this->displayBlock('bottom', $context, $blocks);
        // line 65
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/PD_logo.svg"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 98], "method");
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 26
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            ";
        // line 36
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 41
        echo "        </div>
    </div>
";
    }

    // line 36
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 37
        echo "            <nav class=\"main-nav\">
                ";
        // line 38
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "            </nav>
            ";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        // line 46
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div>
    </section>
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        // line 54
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"https://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"https://trilby.media\">Trilby Media, LLC</a>.</p>
        </div>
    </div>
";
    }

    // line 62
    public function block_bottom($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 63,  234 => 62,  225 => 54,  222 => 53,  217 => 48,  211 => 49,  209 => 48,  205 => 46,  202 => 45,  197 => 39,  195 => 38,  192 => 37,  189 => 36,  183 => 41,  181 => 36,  177 => 34,  174 => 33,  167 => 28,  162 => 27,  159 => 26,  149 => 23,  146 => 22,  141 => 19,  138 => 18,  135 => 17,  132 => 16,  126 => 13,  122 => 12,  119 => 11,  117 => 10,  106 => 6,  103 => 5,  100 => 4,  92 => 65,  90 => 62,  86 => 60,  84 => 53,  81 => 52,  79 => 45,  76 => 44,  74 => 33,  69 => 31,  66 => 30,  64 => 26,  61 => 25,  59 => 22,  56 => 21,  54 => 16,  51 => 15,  49 => 4,  44 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/PD_logo.svg')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
    {% do assets.addCss('theme://css/main.css', 98) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes|e }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
<!--
{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"https://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"https://trilby.media\">Trilby Media, LLC</a>.</p>
        </div>
    </div>
{% endblock %}
 -->

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\user\\themes\\main-theme\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
