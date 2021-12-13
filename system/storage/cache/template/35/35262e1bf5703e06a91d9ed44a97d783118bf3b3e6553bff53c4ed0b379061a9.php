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

/* default/template/common/home.twig */
class __TwigTemplate_07c8953973ba4ffba9742000196030e45b7eff3cddcf3b0d52b80ab2ac18cd01 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["content_top"] ?? null);
        echo "


<!-- category Area Start -->
";
        // line 35
        echo "<!-- category Area End -->
<!-- Static Area Start -->
<div class=\"static-area mtb-50px\">
    <div class=\"container\">
        <div class=\"static-area-wrap\">
            <div class=\"row\">
                <!-- Static Single Item Start -->
                <div class=\"col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px\">
                    <div class=\"single-static\">
                        <img src=\"html/assets/images/icons/static-icons-1.png\" alt=\"\" class=\"img-responsive\" />
                        <div class=\"single-static-meta\">
                            <h4>Free Shipping</h4>
                            <p>On all orders over \$75.00</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class=\"col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px\">
                    <div class=\"single-static\">
                        <img src=\"html/assets/images/icons/static-icons-2.png\" alt=\"\" class=\"img-responsive\" />
                        <div class=\"single-static-meta\">
                            <h4>Free Returns</h4>
                            <p>Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class=\"col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px\">
                    <div class=\"single-static\">
                        <img src=\"html/assets/images/icons/static-icons-3.png\" alt=\"\" class=\"img-responsive\" />
                        <div class=\"single-static-meta\">
                            <h4>100% Payment Secure</h4>
                            <p>Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class=\"col-lg-3 col-xs-12 col-md-6 col-sm-6\">
                    <div class=\"single-static\">
                        <img src=\"html/assets/images/icons/static-icons-4.png\" alt=\"\" class=\"img-responsive\" />
                        <div class=\"single-static-meta\">
                            <h4>Support 24/7</h4>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Static Area End -->
";
        // line 301
        echo "<!-- News letter area -->
<div class=\"news-letter-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-4 mb-md-30px mb-lm-30px\">
                <div class=\"title-newsletter\">
                    <h2>Line</h2>
                    <p class=\"des\">Best way support in line application</p>
                </div>
            </div>
            <div class=\"col-md-12 col-lg-8\">
                <div id=\"\" class=\"subscribe-form\">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News letter area  End -->

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px\">
                        <div class=\"quickview-wrapper\">
                            <!-- slider -->
                            <div class=\"gallery-top\">
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/8.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/14.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/15.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/11.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/19.jpg\" alt=\"\">
                                </div>
                            </div>
                            <div class=\" gallery-thumbs\">
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/8.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/14.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/15.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/11.jpg\" alt=\"\">
                                </div>
                                <div class=\"single-slide\">
                                    <img class=\"img-responsive m-auto\" src=\"html/assets/images/product-image/19.jpg\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-12 col-xs-12\">
                        <div class=\"product-details-content quickview-content\">
                            <h2>Originals Kaval Windbr</h2>
                            <p class=\"reference\">Reference:<span> demo_17</span></p>
                            <div class=\"pro-details-rating-wrap\">
                                <div class=\"rating-product\">
                                    <i class=\"ion-android-star\"></i>
                                    <i class=\"ion-android-star\"></i>
                                    <i class=\"ion-android-star\"></i>
                                    <i class=\"ion-android-star\"></i>
                                    <i class=\"ion-android-star\"></i>
                                </div>
                                <span class=\"read-review\"><a class=\"reviews\" href=\"#\">Read reviews (1)</a></span>
                            </div>
                            <div class=\"pricing-meta\">
                                <ul>
                                    <li class=\"old-price not-cut\">€18.90</li>
                                </ul>
                            </div>
                            <p class=\"quickview-para\">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class=\"pro-details-size-color\">
                                <div class=\"pro-details-color-wrap\">
                                    <span>Color</span>
                                    <div class=\"pro-details-color-content\">
                                        <ul>
                                            <li class=\"blue\"></li>
                                            <li class=\"maroon active\"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"pro-details-quality\">
                                <div class=\"cart-plus-minus\">
                                    <input class=\"cart-plus-minus-box\" type=\"text\" name=\"qtybutton\" value=\"1\" />
                                </div>
                                <div class=\"pro-details-cart btn-hover\">
                                    <a href=\"#\"> + Add To Cart</a>
                                </div>
                            </div>
                            <div class=\"pro-details-wish-com\">
                                <div class=\"pro-details-wishlist\">
                                    <a href=\"wishlist.html\"><i class=\"ion-android-favorite-outline\"></i>Add to wishlist</a>
                                </div>
                                <div class=\"pro-details-compare\">
                                    <a href=\"compare.html\"><i class=\"ion-ios-shuffle-strong\"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class=\"pro-details-social-info\">
                                <span>Share</span>
                                <div class=\"social-info\">
                                    <ul>
                                        <li>
                                            <a href=\"#\"><i class=\"ion-social-facebook\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><i class=\"ion-social-twitter\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><i class=\"ion-social-google\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><i class=\"ion-social-instagram\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 457
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 457,  105 => 301,  48 => 35,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
