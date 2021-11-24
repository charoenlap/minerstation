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

/* default/template/extension/module/featured.twig */
class __TwigTemplate_4682d8f519e2bbdfaef713a8ef72aca6df979610cf3720e82c08afb456f4e2a4 extends \Twig\Template
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
        echo "<!-- Feature Area Start -->
<div class=\"feature-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"section-title\">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                </div>
                <div class=\"feature-slider-wrapper slider-nav-style-1\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "                    <div class=\"slider-single-item\">
                        <!-- Single Item -->
                        <article class=\"list-product text-center mb-30px\">
                            <div class=\"product-inner\">
                                <div class=\"img-block\">
                                    <a href=\"single-product.html\" class=\"thumbnail\">
                                        <img class=\"first-img\" src=\"html/assets/images/product-image/4.jpg\" alt=\"\" />
                                        <img class=\"second-img\" src=\"html/assets/images/product-image/5.jpg\" alt=\"\" />
                                    </a>
                                    <div class=\"add-to-link\">
                                        <ul>
                                            <li>
                                                <a class=\"quick_view\" href=\"#\" data-link-action=\"quickview\" title=\"Quick view\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                                    <i class=\"lnr lnr-magnifier\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"wishlist.html\" title=\"Add to Wishlist\"><i class=\"lnr lnr-heart\"></i></a>
                                            </li>
                                            <li>
                                                <a href=\"compare.html\" title=\"Add to compare\"><i class=\"lnr lnr-sync\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class=\"product-flag\">
                                    <li class=\"new\">-12%</li>
                                </ul>
                                <div class=\"product-decs\">
                                    <a class=\"inner-link\" href=\"shop-4-column.html\"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                      <a href=\"single-product.html\" class=\"product-link\">
                                        ";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
            echo "
                                      </a>
                                    </h2>
                                    <div class=\"pricing-meta\">
                                        <ul>
                                            <li class=\"old-price\">\$23.90</li>
                                            <li class=\"current-price\">\$21.51</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"cart-btn\">
                                    <a href=\"#\" class=\"add-to-curt\" title=\"Add to cart\">Add to cart</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Area End -->
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 64,  90 => 47,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}
