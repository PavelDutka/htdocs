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

/* @Page:C:/xampp/htdocs/user/pages/01.Home */
class __TwigTemplate_99f1f4071887d7beda8a516969c63004a5c243e3e12dad965f68d8b075802695 extends \Twig\Template
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
        // line 1
        echo "<p>";
        $this->loadTemplate("modular/lightslider.html.twig", "@Page:C:/xampp/htdocs/user/pages/01.Home", 1)->display(twig_array_merge($context, ["page" => $this->getAttribute(        // line 2
($context["page"] ?? null), "find", [0 => "/slider-content"], "method")]));
        echo "</p>
<h2>About me</h2>
<p>Hi, I'm Pavel and I'm currently studying cyber security and IOT at SPŠSE a VOŠ Liberec. In this portfolio I will show you some of my projects to demonstrate what I can do. I hope you enjoy.</p>
<h2>3D modeling</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"Boeing 737-800\" src=\"/user/images/737.png\" /></p>
<h2>Animation</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"Formula car on track\" src=\"/user/images/EndlessEngines.jpg\" /></p>
<h2>Archviz</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"HaasSohn Bregenz\" src=\"/user/images/Bregenz.jpg\" /></p>
<h2>Game Development</h2>
<p>This is how my 3D artist journey started. When I was 13 years old, I always wanted to create my own dream game, so I started learning Unreal Engine and Blender. But the game I wanted to create was a really big project, so I never finished it, instead I created several smaller projects. Some of them you can download on my <a href=\"https://pavel-dutka.itch.io/\">itch.io</a></p>
<p><img alt=\"HaasSohn Bregenz\" src=\"/user/images/Cars.jpg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/user/pages/01.Home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>{% include 'modular/lightslider.html.twig' with
{'page': page.find('/slider-content')} %}</p>
<h2>About me</h2>
<p>Hi, I'm Pavel and I'm currently studying cyber security and IOT at SPŠSE a VOŠ Liberec. In this portfolio I will show you some of my projects to demonstrate what I can do. I hope you enjoy.</p>
<h2>3D modeling</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"Boeing 737-800\" src=\"/user/images/737.png\" /></p>
<h2>Animation</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"Formula car on track\" src=\"/user/images/EndlessEngines.jpg\" /></p>
<h2>Archviz</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ante. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Curabitur vitae diam non enim vestibulum interdum. Pellentesque sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Aenean vel massa quis mauris vehicula lacinia. Aliquam ante. In enim a arcu imperdiet malesuada. Nullam feugiat.</p>
<p><img alt=\"HaasSohn Bregenz\" src=\"/user/images/Bregenz.jpg\" /></p>
<h2>Game Development</h2>
<p>This is how my 3D artist journey started. When I was 13 years old, I always wanted to create my own dream game, so I started learning Unreal Engine and Blender. But the game I wanted to create was a really big project, so I never finished it, instead I created several smaller projects. Some of them you can download on my <a href=\"https://pavel-dutka.itch.io/\">itch.io</a></p>
<p><img alt=\"HaasSohn Bregenz\" src=\"/user/images/Cars.jpg\" /></p>", "@Page:C:/xampp/htdocs/user/pages/01.Home", "");
    }
}
