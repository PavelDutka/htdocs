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

/* plugins/admin-buttons.html.twig */
class __TwigTemplate_e318af9d4b4f864388bb7483e3015d5e8c9c1e5756959d6479c93127a9481e7c extends \Twig\Template
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
        echo "<button data-preview-scss class=\"button\"><i class=\"fa fa-fw fa-eye\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PREVIEW"), "html", null, true);
        echo "</button>
<button data-recompile-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.RECOMPILE"), "html", null, true);
        echo "</button>
<button data-export-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.EXPORT"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "plugins/admin-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<button data-preview-scss class=\"button\"><i class=\"fa fa-fw fa-eye\"></i> {{ \"PLUGIN_ADMIN.PREVIEW\"|t }}</button>
<button data-recompile-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> {{ \"PLUGIN_ADMIN.RECOMPILE\"|t }}</button>
<button data-export-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> {{ \"PLUGIN_ADMIN.EXPORT\"|t }}</button>
", "plugins/admin-buttons.html.twig", "C:\\xampp\\htdocs\\user\\plugins\\admin\\themes\\grav\\templates\\plugins\\admin-buttons.html.twig");
    }
}
