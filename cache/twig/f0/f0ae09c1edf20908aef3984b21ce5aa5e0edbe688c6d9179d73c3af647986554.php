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

/* @Page:C:/xampp/htdocs/user/pages/04.slider */
class __TwigTemplate_e801cdf57ab301b73a81682408d809aecd3f4f44d9f3513c0662d2edca38c43b extends \Twig\Template
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
        echo "<h1>Shop Geek Stuff</h1>
<h2>We have all your <strong>geek</strong> needs covered..</h2>
<hr />
<h1>SnipCart Powered</h1>
<h2><strong>Grav</strong> plus <strong>SnipCart</strong> equals easy shopping</h2>
<hr />
<h1>A Huge Variety</h1>
<h2>A great selection of <strong>bits</strong> and <strong>bobs</strong></h2>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/user/pages/04.slider";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Shop Geek Stuff</h1>
<h2>We have all your <strong>geek</strong> needs covered..</h2>
<hr />
<h1>SnipCart Powered</h1>
<h2><strong>Grav</strong> plus <strong>SnipCart</strong> equals easy shopping</h2>
<hr />
<h1>A Huge Variety</h1>
<h2>A great selection of <strong>bits</strong> and <strong>bobs</strong></h2>", "@Page:C:/xampp/htdocs/user/pages/04.slider", "");
    }
}
