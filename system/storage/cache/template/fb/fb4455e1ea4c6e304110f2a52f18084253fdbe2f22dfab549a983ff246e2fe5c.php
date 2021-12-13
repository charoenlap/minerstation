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
class __TwigTemplate_3ac888ae286ba43c8804be876b628fea0600ad63cc9964ed2d1feae204ea98f8 extends \Twig\Template
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
                                    <!-- <a class=\"inner-link\" href=\"shop-4-column.html\"><span>STUDIO DESIGN</span></a> -->
                                    <h2><a href=\"single-product.html\" class=\"product-link\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
            echo "</a></h2>
                                    <div class=\"pricing-meta\">
                                        <ul>
                                            <li class=\"old-price\">\$23.90</li>
                                            <li class=\"current-price\">\$21.51</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"cart-btn\">
                                    <a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
            echo "\" class=\"add-to-curt\" title=\"Add to cart\">Add to cart</a>
                                </div>
                            </div>
                        </article>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return array (  125 => 70,  113 => 64,  101 => 55,  69 => 25,  65 => 24,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
