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

/* @Page:C:/xampp/htdocs/user/pages/03.Contact */
class __TwigTemplate_b7b8add325e549532d59e2a3f049ff242676f4b2f177b94b37983ce9fb7c6f4a extends \Twig\Template
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
        echo "<h1>Kontakt</h1>
<p>";
        // line 2
        $this->loadTemplate("forms/form.html.twig", "@Page:C:/xampp/htdocs/user/pages/03.Contact", 2)->display($context);
        echo "</p>
<h2>Formulář</h2>
<p>Vyplňte formulář a kontaktujte nás.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/user/pages/03.Contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Kontakt</h1>
<p>{% include \"forms/form.html.twig\" %}</p>
<h2>Formulář</h2>
<p>Vyplňte formulář a kontaktujte nás.</p>", "@Page:C:/xampp/htdocs/user/pages/03.Contact", "");
    }
}
