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

/* default/template/extension/module/special.twig */
class __TwigTemplate_f5954e2d72ba5d9ea78b60ba9aa62a7e34c4d860fba0eb4aa4c2dea0bffd1e4c extends \Twig\Template
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
        echo "<!-- Arrivals Area Start -->
<div class=\"arrival-area mt-20px mb-20px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h2>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h2>
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs sub-category\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#tab-1\">Home Audio</a>
                        </li>
                    </ul>
                    <!-- Nav tabs -->
                </div>
            </div>
        </div>
        <!-- tab content -->
        <div class=\"tab-content\">
            <!-- First-Tab -->
            <div id=\"tab-1\" class=\"tab-pane active fade\">
                <!-- Arrivel slider start -->
                <div class=\"arrival-slider-wrapper slider-nav-style-1\">
                  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "                    <div class=\"slider-single-item\">
                        <!-- Single Item -->
                        <article class=\"list-product text-center\">
                            <div class=\"product-inner\">
                                <div class=\"img-block\">
                                    <a href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
            echo "\" class=\"thumbnail\">
                                        <img class=\"first-img\" src=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
            echo "\" alt=\"\" />
                                    </a>
                                    <div class=\"add-to-link\">
                                        <ul>
                                            <!-- <li>
                                                <a class=\"quick_view\" href=\"#\" data-link-action=\"quickview\" title=\"Quick view\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                                    <i class=\"lnr lnr-magnifier\"></i>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href=\"";
            // line 41
            echo ($context["button_wishlist"] ?? null);
            echo "\" title=\"Add to Wishlist\"><i class=\"lnr lnr-heart\"></i></a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 44
            echo ($context["button_compare"] ?? null);
            echo "\" title=\"Add to compare\"><i class=\"lnr lnr-sync\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <ul class=\"product-flag\">
                                    <li class=\"new\">-12%</li>
                                </ul> -->
                                <div class=\"product-decs\">
                                    <!-- <a class=\"inner-link\" href=\"shop-4-column.html\"><span>STUDIO DESIGN</span></a> -->
                                    <h2><a href=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
            echo "\" class=\"product-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
            echo "</a></h2>
                                    ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                    <div class=\"pricing-meta\">
                                        <ul>
                                            ";
                // line 58
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                                            <li class=\"current-price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                    echo "</li>
                                            ";
                } else {
                    // line 61
                    echo "                                            <li class=\"old-price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                    echo "</li>
                                            <li class=\"current-price\">";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62);
                    echo "</li>
                                            ";
                }
                // line 64
                echo "                                        </ul>
                                    </div>
                                    ";
            }
            // line 67
            echo "                                </div>
                                <div class=\"cart-btn\">
                                    <a href=\"#\" onclick=\"cart.add('";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
            echo "');\" class=\"add-to-curt\" title=\"Add to cart\">Add to cart</a>
                                </div>
                            </div>
                        </article>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>
                <!-- Arrivel slider end -->
            </div>
        </div>
        <!-- tab content end-->
    </div>
</div>
<!-- Arrivals Area End -->
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 75,  151 => 69,  147 => 67,  142 => 64,  137 => 62,  132 => 61,  126 => 59,  124 => 58,  120 => 56,  118 => 55,  112 => 54,  99 => 44,  93 => 41,  80 => 31,  76 => 30,  69 => 25,  65 => 24,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
