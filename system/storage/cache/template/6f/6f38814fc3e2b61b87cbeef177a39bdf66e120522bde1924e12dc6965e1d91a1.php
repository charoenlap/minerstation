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
class __TwigTemplate_2be5db32a2546502b5dcc00ee5655f1e21d4fbb6a7d089b3668da478d1f08d06 extends \Twig\Template
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
<div class=\"popular-categories-area popular-categories-area-2  bg-light-gray pt-50px pb-50px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h2 class=\"section-heading\">Popular Categories</h2>
                </div>
            </div>
        </div>
        <div class=\"popular-category-slider-wrapper slider-nav-style-2\">
            <!-- single-item -->
            <div class=\"single-slider-item\">
                <div class=\"thumb-category\">
                    <a href=\"#\">
                        <img src=\"html/assets/images/popular-image/2-1.jpg\" alt=\"product-image.jpg\" />
                    </a>
                </div>
                <div class=\"category-discript\">
                    <h4>Antminer</h4>
                    <ul>
                        <li><a href=\"#\">Hot Categories</a></li>
                    </ul>
                    <a href=\"#\" class=\"view-all-btn\">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- category Area End -->
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

<!-- Best sell Area Start -->
<div class=\"best-sell-area mt-20px mt-lm-30px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h2>Best Sellers</h2>
                </div>
            </div>
        </div>
        <div class=\"best-sell-area-wrapper slider-nav-style-1 slider-nav-style-4\">
            <div class=\"single-slider-item\">
                <!-- Single Item -->
                <article class=\"list-product text-center\">
                    <div class=\"product-inner\">
                        <div class=\"img-block\">
                            <a href=\"single-product.html\" class=\"thumbnail\">
                                <img class=\"first-img\" src=\"html/assets/images/product-image/6.jpg\" alt=\"\" />
                                <img class=\"second-img\" src=\"html/assets/images/product-image/7.jpg\" alt=\"\" />
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
                        <div class=\"product-decs\">
                            <a class=\"inner-link\" href=\"shop-4-column.html\"><span>Graphic Corner</span></a>
                            <h2><a href=\"single-product.html\" class=\"product-link\">SoundBox Pro Portable</a></h2>
                            <div class=\"availability-list in-stock\">Availability: <span>900 In Stock</span></div>
                            <p>Android 8.1 (Oreo), Hisilicon Kirin 710 (12 nm), Octa-core (4x2.2 GHz Cortex-A73 &amp; 4x1.7 GHz Cortex-A53), Mali-G51 MP4</p>
                            <div class=\"pricing-meta\">
                                <ul>
                                    <li class=\"current-price\">\$29.51</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class=\"single-slider-item\">
                <!-- Single Item -->
                <article class=\"list-product text-center\">
                    <div class=\"product-inner\">
                        <div class=\"img-block\">
                            <a href=\"single-product.html\" class=\"thumbnail\">
                                <img class=\"first-img\" src=\"html/assets/images/product-image/15.jpg\" alt=\"\" />
                                <img class=\"second-img\" src=\"html/assets/images/product-image/16.jpg\" alt=\"\" />
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
                            <h2><a href=\"single-product.html\" class=\"product-link\">Polk Audio T30 Speaker</a></h2>
                            <div class=\"availability-list in-stock\">Availability: <span>1200 In Stock</span></div>
                            <p>Dimensions (W x H x D): TV without stand: 43.7\" x 25.3\" x 3\", TV with stand: 43.7\" x 27.7\" x 8.5\"</p>
                            <div class=\"pricing-meta\">
                                <ul>
                                    <li class=\"old-price\">\$21.51</li>
                                    <li class=\"current-price\">\$21.51</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class=\"single-slider-item\">
                <!-- Single Item -->
                <article class=\"list-product text-center\">
                    <div class=\"product-inner\">
                        <div class=\"img-block\">
                            <a href=\"single-product.html\" class=\"thumbnail\">
                                <img class=\"first-img\" src=\"html/assets/images/product-image/6.jpg\" alt=\"\" />
                                <img class=\"second-img\" src=\"html/assets/images/product-image/7.jpg\" alt=\"\" />
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
                        <div class=\"product-decs\">
                            <a class=\"inner-link\" href=\"shop-4-column.html\"><span>Graphic Corner</span></a>
                            <h2><a href=\"single-product.html\" class=\"product-link\">SoundBox Pro Portable</a></h2>
                            <div class=\"availability-list in-stock\">Availability: <span>900 In Stock</span></div>
                            <p>Android 8.1 (Oreo), Hisilicon Kirin 710 (12 nm), Octa-core (4x2.2 GHz Cortex-A73 &amp; 4x1.7 GHz Cortex-A53), Mali-G51 MP4</p>
                            <div class=\"pricing-meta\">
                                <ul>
                                    <li class=\"current-price\">\$29.51</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class=\"single-slider-item\">
                <!-- Single Item -->
                <article class=\"list-product text-center\">
                    <div class=\"product-inner\">
                        <div class=\"img-block\">
                            <a href=\"single-product.html\" class=\"thumbnail\">
                                <img class=\"first-img\" src=\"html/assets/images/product-image/15.jpg\" alt=\"\" />
                                <img class=\"second-img\" src=\"html/assets/images/product-image/16.jpg\" alt=\"\" />
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
                            <h2><a href=\"single-product.html\" class=\"product-link\">Polk Audio T30 Speaker</a></h2>
                            <div class=\"availability-list in-stock\">Availability: <span>1200 In Stock</span></div>
                            <p>Dimensions (W x H x D): TV without stand: 43.7\" x 25.3\" x 3\", TV with stand: 43.7\" x 27.7\" x 8.5\"</p>
                            <div class=\"pricing-meta\">
                                <ul>
                                    <li class=\"old-price\">\$21.51</li>
                                    <li class=\"current-price\">\$21.51</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- Best sell Area End -->
<!-- Brand area start -->
<div class=\"brand-area mt-30px mb-50px\">
    <div class=\"container\">
        <div class=\"brand-slider\">
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/1.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/2.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/3.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/4.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/5.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/1.jpg\" alt=\"\" /></a>
            </div>
            <div class=\"brand-slider-item\">
                <a href=\"#\"><img class=\" img-responsive\" src=\"html/assets/images/brand-logo/2.jpg\" alt=\"\" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->
<!-- News letter area -->
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
                                    <li class=\"old-price not-cut\">???18.90</li>
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
        // line 454
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
        return array (  482 => 454,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
