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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_77f5b64845fc10046a1113c88e7ade98bf8e7de2c17a224e04ec20dd42eec435 extends \Twig\Template
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
        echo "<div class=\"slider-area slider-dots-style-3\">
    <div  class=\"hero-slider-wrapper\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "          <div class=\"single-slide slider-height-3 bg-img d-flex\" data-bg-image=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
            echo "\">
              <div class=\"container align-self-center\">
                  <div class=\"slider-content-1 slider-animated-1 text-left\">
                      <h1 class=\"animated color-black\">
                      ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
            echo "
                      </h1>
                      ";
            // line 11
            echo "                      <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11);
            echo "\" class=\"shop-btn animated\">SHOP NOW</a>
                  </div>
              </div>
          </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  58 => 11,  53 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
