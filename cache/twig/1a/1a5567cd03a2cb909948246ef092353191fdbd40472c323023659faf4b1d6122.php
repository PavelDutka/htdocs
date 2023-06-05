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

/* forms/fields/colorscheme/colorscheme.html.twig */
class __TwigTemplate_fcd06303e40cbd64cd1923cf58c8e9fbabf213420aeecd5f373b14c0e30cf717 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/colorscheme/colorscheme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"colorbar current-scheme\">
        ";
        // line 5
        $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/colorscheme/colorscheme.html.twig", 5)->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
        // line 6
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/colorscheme/colorscheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"colorbar current-scheme\">
        {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
    </div>

{% endblock %}




", "forms/fields/colorscheme/colorscheme.html.twig", "C:\\xampp\\htdocs\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\colorscheme\\colorscheme.html.twig");
    }
}
