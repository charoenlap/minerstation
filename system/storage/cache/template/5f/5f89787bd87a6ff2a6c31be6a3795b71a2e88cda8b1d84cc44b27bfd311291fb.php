<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_4ba2d48af876524fb5c1473ce3def716dc339ac3be3828a8aed88cfe0af6cb60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"banner-area mt-50px mb-20px \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"banner-wrapper\">
                    <a href=\"shop-4-column.html\"><img src=\"html/assets/images/banner-image/11.jpg\" alt=\"\" /></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"banner-wrapper\">
                    <a href=\"shop-4-column.html\"><img src=\"html/assets/images/banner-image/12.jpg\" alt=\"\" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/carousel.twig", "");
    }
}
