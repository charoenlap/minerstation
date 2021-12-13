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

/* default/template/common/footer.twig */
class __TwigTemplate_13b658361bdabeecfd1124d9af8f48ea4ec327303ea4d6b9ca85adb137db852f extends \Twig\Template
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
        echo "<!-- Footer Area Start -->
<div class=\"footer-area\">
    <div class=\"footer-container\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-4 mb-md-30px mb-lm-30px\">
                        <div class=\"single-wedge\">
                            <div class=\"footer-logo\">
                                <a href=\"index.html\"><img class=\"img-responsive\" src=\"html/assets/images/logo/logo.jpg\" alt=\"logo.jpg\" /></a>
                            </div>
                            <p class=\"text-infor\">We are a team of designers and developers that create high quality HTML template</p>
                            <div class=\"need_help\">
                                <p class=\"add\"><span class=\"address\">Address:</span> 4710-4890 Breckinridge St, Fayetteville</p>
                                <p class=\"mail\"><span class=\"email\">Email:</span> <a href=\"mailto:support@hasthemes.com\">support@hasthemes.com</a></p>
                                <p class=\"phone\"><span class=\"call us\">Call Us:</span> <a href=\"tel:(+800)123456789\"> (+800)123456789</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-2 col-sm-6 mb-md-30px mb-lm-30px\">
                        <div class=\"single-wedge\">
                            ";
        // line 22
        if (($context["informations"] ?? null)) {
            // line 23
            echo "                            <h4 class=\"footer-herading\">";
            echo ($context["text_information"] ?? null);
            echo "</h4>
                            <div class=\"footer-links\">
                                <ul>
                                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 27
                echo "                                    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 27);
                echo "</a></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                </ul>
                            </div>
                            ";
        }
        // line 32
        echo "                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-2 col-sm-6 mb-sm-30px mb-lm-30px\">
                        <div class=\"single-wedge\">
                            <h4 class=\"footer-herading\">";
        // line 36
        echo ($context["text_account"] ?? null);
        echo "</h4>
                            <div class=\"footer-links\">
                                <ul class=\"\">
                                  <li><a href=\"";
        // line 39
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                                  <li><a href=\"";
        // line 40
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                                  <li><a href=\"";
        // line 41
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                                  <li><a href=\"";
        // line 42
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 \">
                        <div class=\"single-wedge\">
                            <h4 class=\"footer-herading\">";
        // line 49
        echo ($context["text_service"] ?? null);
        echo "</h4>
                            <div class=\"footer-links\">
                                <ul class=\"\">
                                  <li><a href=\"";
        // line 52
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                                  <li><a href=\"";
        // line 53
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
                                  <li><a href=\"";
        // line 54
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"footer-paymet-warp d-flex\">
                            <div class=\"heading-info\">Payment:</div>
                            <div class=\"payment-way\"><img class=\"payment-img img-responsive\" src=\"html/assets/images/icons/payment.png\" alt=\"\" />
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"footer-social-icon d-flex\">
                            <div class=\"heading-info\">Follow Us:</div>
                            <div class=\"social-icon\">
                                <ul>
                                    <li class=\"facebook\">
                                        <a href=\"#\"><i class=\"ion-social-facebook\"></i></a>
                                    </li>
                                    <li class=\"twitter\">
                                        <a href=\"#\"><i class=\"ion-social-twitter\"></i></a>
                                    </li>
                                    <li class=\"google\">
                                        <a href=\"#\"><i class=\"ion-social-google\"></i></a>
                                    </li>
                                    <li class=\"youtube\">
                                        <a href=\"#\"><i class=\"ion-social-youtube\"></i></a>
                                    </li>
                                    <li class=\"instagram\">
                                        <a href=\"#\"><i class=\"ion-social-instagram\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-tags\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"tag-content\">
                            <ul>
                                <li><a href=\"#\">Online Shopping</a></li>
                                <li><a href=\"#\">Promotions</a></li>
                                <li><a href=\"#\">My Orders</a></li>
                                <li><a href=\"#\">Help</a></li>
                                <li><a href=\"#\">Customer Service</a></li>
                                <li><a href=\"#\">Support</a></li>
                                <li><a href=\"#\">Most Populars</a></li>
                                <li><a href=\"#\">New Arrivals</a></li>
                                <li><a href=\"#\">Special Products</a></li>
                                <li><a href=\"#\">Manufacturers</a></li>
                                <li><a href=\"#\">Our Stores</a></li>
                                <li><a href=\"#\">Shipping</a></li>
                                <li><a href=\"#\">Payments</a></li>
                                <li><a href=\"#\">Warantee</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                                <li><a href=\"#\">Checkout</a></li>
                                <li><a href=\"#\">Discount</a></li>
                                <li><a href=\"#\">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-12 text-center\">
                        <p class=\"copy-text\">Copyright © <a href=\"https://hasthemes.com/\"> HasThemes</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 182
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 182);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 182);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 182);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 185
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "<script src=\"html/assets/js/vendor/vendor.min.js\"></script>
<script src=\"html/assets/js/plugins/plugins.min.js\"></script>
<script src=\"html/assets/js/main.js\"></script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 187,  256 => 185,  252 => 184,  239 => 182,  235 => 181,  149 => 54,  143 => 53,  137 => 52,  131 => 49,  119 => 42,  113 => 41,  107 => 40,  101 => 39,  95 => 36,  89 => 32,  84 => 29,  73 => 27,  69 => 26,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
