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

/* default/template/common/header.twig */
class __TwigTemplate_e14bbf7cd3b419b3958da5a379ab51be92d5059d02b4617547846a86a7085d7f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" href=\"html/assets/css/vendor/vendor.min.css\">
<link rel=\"stylesheet\" href=\"html/assets/css/plugins/plugins.min.css\">
<link rel=\"stylesheet\" href=\"html/assets/css/style.min.css\">

<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>


";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 30);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 30);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 37);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 37);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</head>
<body>
  <header class=\"header-wrapper\">
    <!-- Header Nav Start -->
    <div class=\"header-nav d-lg-none\">
        <div class=\"container\">
            <div class=\"header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between\">
                <div class=\"header-static-nav\">
                    <a href=\"mailto:yourname@email.com\">yourname@email.com</a>
                </div>
                <div class=\"header-menu-nav\">
                    <ul class=\"menu-nav\">
                        <li>
                            <div class=\"dropdown\">
                                <button type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">My Account <i class=\"ion-ios-arrow-down\"></i></button>

                                <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton\">
                                    <li><a href=\"my-account.html\">My account</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"login.html\">Sign in</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class=\"dropdown\">
                                <button type=\"button\" id=\"dropdownMenuButton-2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">USD \$ <i class=\"ion-ios-arrow-down\"></i></button>

                                <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton-2\">
                                    <li><a href=\"#\">EUR €</a></li>
                                    <li><a href=\"#\">USD \$</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"pr-0\">
                            <div class=\"dropdown\">
                                <button type=\"button\" id=\"dropdownMenuButton-3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=\"html/assets/images/flag/1.jpg\" alt=\"\" /> English <i class=\"ion-ios-arrow-down\"></i>
                                </button>

                                <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton-3\">
                                    <li>
                                        <a href=\"#\"><img src=\"html/assets/images/flag/1.jpg\" alt=\"\" /> English</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"html/assets/images/flag/2.jpg\" alt=\"\" /> Français</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class=\"header-top header-style-3 bg-white sticky-nav ptb-10px d-lg-block d-none\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 d-flex\">
                    <div class=\"logo align-self-center\">
                        <a href=\"index.html\"><img class=\"img-responsive\" src=\"html/assets/images/logo/logo.jpg\" alt=\"logo.jpg\" /></a>
                    </div>
                </div>
                <div class=\"col-md-6 align-self-center header-menu-3\">
                    <div class=\"header-horizontal-menu\">
                        <ul class=\"menu-content\">
                            <li class=\"active menu-dropdown\">
                                <a href=\"#\">Home <i class=\"ion-ios-arrow-down\"></i></a>
                                <ul class=\"main-sub-menu\">
                                    <li><a href=\"index.html\">Home 1</a></li>
                                    <li><a href=\"index-2.html\">Home 2</a></li>
                                    <li><a href=\"index-3.html\">Home 3</a></li>
                                    <li><a href=\"index-4.html\">Home 4</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-dropdown\">
                                <a href=\"#\">Shop <i class=\"ion-ios-arrow-down\"></i></a>
                                <ul class=\"mega-menu-wrap\">
                                    <li>
                                        <ul>
                                            <li class=\"mega-menu-title\"><a href=\"#\">Shop Grid</a></li>
                                            <li><a href=\"shop-3-column.html\">Shop Grid 3 Column</a></li>
                                            <li><a href=\"shop-4-column.html\">Shop Grid 4 Column</a></li>
                                            <li><a href=\"shop-left-sidebar.html\">Shop Grid Left Sidebar</a></li>
                                            <li><a href=\"shop-right-sidebar.html\">Shop Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class=\"mega-menu-title\"><a href=\"#\">Shop List</a></li>
                                            <li><a href=\"shop-list.html\">Shop List</a></li>
                                            <li><a href=\"shop-list-left-sidebar.html\">Shop List Left Sidebar</a></li>
                                            <li><a href=\"shop-list-right-sidebar.html\">Shop List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class=\"mega-menu-title\"><a href=\"#\">Shop Single</a></li>
                                            <li><a href=\"single-product.html\">Shop Single</a></li>
                                            <li><a href=\"single-product-variable.html\">Shop Variable</a></li>
                                            <li><a href=\"single-product-affiliate.html\">Shop Affiliate</a></li>
                                            <li><a href=\"single-product-group.html\">Shop Group</a></li>
                                            <li><a href=\"single-product-tabstyle-2.html\">Shop Tab 2</a></li>
                                            <li><a href=\"single-product-tabstyle-3.html\">Shop Tab 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class=\"mega-menu-title\"><a href=\"#\">Shop Single</a></li>
                                            <li><a href=\"single-product-slider.html\">Shop Slider</a></li>
                                            <li><a href=\"single-product-gallery-left.html\">Shop Gallery Left</a></li>
                                            <li><a href=\"single-product-gallery-right.html\">Shop Gallery Right</a></li>
                                            <li><a href=\"single-product-sticky-left.html\">Shop Sticky Left</a></li>
                                            <li><a href=\"single-product-sticky-right.html\">Shop Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"w-100\">
                                        <ul class=\"banner-megamenu-wrapper d-flex\">
                                            <li class=\"banner-wrapper mr-30px\">
                                                <a href=\"single-product.html\"><img src=\"html/assets/images/menu-image/banner-menu2.jpg\" alt=\"\" /></a>
                                            </li>
                                            <li class=\"banner-wrapper\">
                                                <a href=\"single-product.html\"><img src=\"html/assets/images/menu-image/banner-menu3.jpg\" alt=\"\" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-dropdown\">
                                <a href=\"#\">Pages <i class=\"ion-ios-arrow-down\"></i></a>
                                <ul class=\"main-sub-menu\">
                                    <li><a href=\"about.html\">About Page</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout Page</a></li>
                                    <li><a href=\"compare.html\">Compare Page</a></li>
                                    <li><a href=\"login.html\">Login & Register Page</a></li>
                                    <li><a href=\"my-account.html\">Account Page</a></li>
                                    <li><a href=\"empty-cart.html\">Empty Cart Page</a></li>
                                    <li><a href=\"404.html\">404 Page</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-dropdown\">
                                <a href=\"#\">Blog <i class=\"ion-ios-arrow-down\"></i></a>
                                <ul class=\"main-sub-menu\">
                                    <li class=\"menu-dropdown position-static\">
                                        <a href=\"#\">Blog Grid <i class=\"ion-ios-arrow-right\"></i></a>
                                        <ul class=\"main-sub-menu main-sub-menu-2\">
                                            <li><a href=\"blog-grid-left-sidebar.html\">Blog Grid Left Sidebar</a></li>
                                            <li><a href=\"blog-grid-right-sidebar.html\">Blog Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-dropdown position-static\">
                                        <a href=\"#\">Blog List <i class=\"ion-ios-arrow-right\"></i></a>
                                        <ul class=\"main-sub-menu main-sub-menu-2\">
                                            <li><a href=\"blog-list-left-sidebar.html\">Blog List Left Sidebar</a></li>
                                            <li><a href=\"blog-list-right-sidebar.html\">Blog List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-dropdown position-static\">
                                        <a href=\"#\">Blog Single <i class=\"ion-ios-arrow-right\"></i></a>
                                        <ul class=\"main-sub-menu main-sub-menu-2\">
                                            <li><a href=\"blog-single-left-sidebar.html\">Blog Single Left Sidebar</a></li>
                                            <li><a href=\"blog-single-right-sidebar.html\">Blog Single Right Sidbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-dropdown\">
                                <a href=\"#\">Custom Menu <i class=\"ion-ios-arrow-down\"></i></a>
                                <ul class=\"mega-menu-wrap mega-menu-wrap-2\">
                                    <li>
                                        <div class=\"custom-single-item\">
                                            <h4><a href=\"shop-4-column.html\">Women Is Clothes & Fashion</a></h4>
                                            <p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"custom-single-item\">
                                            <h4><a href=\"shop-4-column.html\">Simple Style</a></h4>
                                            <p>A New Flattering Style With All The Comfort Of Our Linen.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"custom-single-item\">
                                            <h4><a href=\"shop-4-column.html\">Easy Style</a></h4>
                                            <p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 text-right align-self-center header-nav \">
                    <div class=\"header-menu-nav\">
                        <ul class=\"menu-nav\">
                            <li>
                                <div class=\"dropdown\">
                                    <button type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">My Account <i class=\"ion-ios-arrow-down\"></i></button>

                                    <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton\">
                                        <li><a href=\"my-account.html\">My account</a></li>
                                        <li><a href=\"checkout.html\">Checkout</a></li>
                                        <li><a href=\"login.html\">Sign in</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class=\"dropdown\">
                                    <button type=\"button\" id=\"dropdownMenuButton-2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">USD \$ <i class=\"ion-ios-arrow-down\"></i></button>

                                    <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton-2\">
                                        <li><a href=\"#\">EUR €</a></li>
                                        <li><a href=\"#\">USD \$</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"pr-0\">
                                <div class=\"dropdown\">
                                    <button type=\"button\" id=\"dropdownMenuButton-3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <img src=\"html/assets/images/flag/1.jpg\" alt=\"\" /> English <i class=\"ion-ios-arrow-down\"></i>
                                    </button>

                                    <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton-3\">
                                        <li>
                                            <a href=\"#\"><img src=\"html/assets/images/flag/1.jpg\" alt=\"\" /> English</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><img src=\"html/assets/images/flag/2.jpg\" alt=\"\" /> Français</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class=\"header-menu header-menu-style-3 bg-blue  d-lg-block d-none ptb-13px\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"header-menu-vertical\">
                        <h4 class=\"menu-title\">Browse Categories </h4>
                        <ul class=\"menu-content display-none\">
                            <li class=\"menu-item\"><a href=\"#\">Televisions</a></li>
                            <li class=\"menu-item\">
                                <a href=\"#\">Electronics <i class=\"ion-ios-arrow-right\"></i></a>
                                <ul class=\"sub-menu flex-wrap\">
                                    <li>
                                        <a href=\"#\">
                                            <span> <strong> Accessories & Parts</strong></span>
                                        </a>
                                        <ul class=\"submenu-item\">
                                            <li><a href=\"#\">Cables & Adapters</a></li>
                                            <li><a href=\"#\">Batteries</a></li>
                                            <li><a href=\"#\">Chargers</a></li>
                                            <li><a href=\"#\">Bags & Cases</a></li>
                                            <li><a href=\"#\">Electronic Cigarettes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span><strong>Camera & Photo</strong></span>
                                        </a>
                                        <ul class=\"submenu-item\">
                                            <li><a href=\"#\">Digital Cameras</a></li>
                                            <li><a href=\"#\">Camcorders</a></li>
                                            <li><a href=\"#\">Camera Drones</a></li>
                                            <li><a href=\"#\">Action Cameras</a></li>
                                            <li><a href=\"#\">Photo Studio Supplie</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span><strong>Smart Electronics</strong></span>
                                        </a>
                                        <ul class=\"submenu-item\">
                                            <li><a href=\"#\">Wearable Devices</a></li>
                                            <li><a href=\"#\">Smart Home Appliances</a></li>
                                            <li><a href=\"#\">Smart Remote Controls</a></li>
                                            <li><a href=\"#\">Smart Watches</a></li>
                                            <li><a href=\"#\">Smart Wristbands</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span><strong>Audio & Video</strong></span>
                                        </a>
                                        <ul class=\"submenu-item\">
                                            <li><a href=\"#\">Televisions</a></li>
                                            <li><a href=\"#\">TV Receivers</a></li>
                                            <li><a href=\"#\">Projectors</a></li>
                                            <li><a href=\"#\">Audio Amplifier Boards</a></li>
                                            <li><a href=\"#\">TV Sticks</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- sub menu -->
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#\">Video Games <i class=\"ion-ios-arrow-right\"></i></a>
                                <ul class=\"sub-menu sub-menu-2\">
                                    <li>
                                        <ul class=\"submenu-item\">
                                            <li><a href=\"#\">Handheld Game Players</a></li>
                                            <li><a href=\"#\">Game Controllers</a></li>
                                            <li><a href=\"#\">Joysticks</a></li>
                                            <li><a href=\"#\">Stickers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- sub menu -->
                            </li>
                            <li class=\"menu-item\"><a href=\"#\">Digital Cameras</a></li>
                            <li class=\"menu-item\"><a href=\"#\">Headphones</a></li>
                            <li class=\"menu-item\"><a href=\"#\"> Wearable Devices</a></li>
                            <li class=\"menu-item\"><a href=\"#\"> Smart Watches</a></li>
                            <li class=\"menu-item\"><a href=\"#\"> Game Controllers</a></li>
                            <li class=\"menu-item\"><a href=\"#\"> Smart Home Appliances</a></li>
                        </ul>
                        <!-- menu content -->
                    </div>
                    <!-- header menu vertical -->
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"header-right-element d-flex\">
                        <div class=\"search-element media-body\">
                            <form class=\"d-flex\" action=\"#\">
                                <div class=\"search-category\">
                                    <select>
                                        <option value=\"0\">All categories</option>
                                        <option value=\"12\">Laptop</option>
                                        <option value=\"13\">- - Hot Categories</option>
                                        <option value=\"19\">- - - - Dresses</option>
                                        <option value=\"20\">- - - - Jackets &amp; Coats</option>
                                        <option value=\"21\">- - - - Sweaters</option>
                                        <option value=\"22\">- - - - Jeans</option>
                                        <option value=\"23\">- - - - Blouses &amp; Shirts</option>
                                        <option value=\"14\">- - Outerwear &amp; Jackets</option>
                                        <option value=\"24\">- - - - Basic Jackets</option>
                                        <option value=\"25\">- - - - Real Fur</option>
                                        <option value=\"26\">- - - - Down Coats</option>
                                        <option value=\"27\">- - - - Blazers</option>
                                        <option value=\"28\">- - - - Trench Coats</option>
                                        <option value=\"15\">- - Weddings &amp; Events</option>
                                        <option value=\"29\">- - - - Wedding Dresses</option>
                                        <option value=\"30\">- - - - Evening Dresses</option>
                                        <option value=\"31\">- - - - Prom Dresses</option>
                                        <option value=\"32\">- - - - Bridesmaid Dresses</option>
                                        <option value=\"33\">- - - - Wedding Accessories</option>
                                        <option value=\"16\">- - Bottoms</option>
                                        <option value=\"34\">- - - - Skirts</option>
                                        <option value=\"35\">- - - - Leggings</option>
                                        <option value=\"36\">- - - - Pants &amp; Capris</option>
                                        <option value=\"37\">- - - - Wide Leg Pants</option>
                                        <option value=\"38\">- - - - Shorts</option>
                                        <option value=\"17\">- - Tops &amp; Sets</option>
                                        <option value=\"39\">- - - - Tank Tops</option>
                                        <option value=\"40\">- - - - Suits &amp; Sets</option>
                                        <option value=\"41\">- - - - Jumpsuits</option>
                                        <option value=\"42\">- - - - Rompers</option>
                                        <option value=\"43\">- - - - Sleep &amp; Lounge</option>
                                        <option value=\"18\">- - Accessories</option>
                                        <option value=\"44\">- - - - Eyewear &amp; Accessories</option>
                                        <option value=\"45\">- - - - Hats &amp; Caps</option>
                                        <option value=\"46\">- - - - Belts &amp; Cummerbunds</option>
                                        <option value=\"47\">- - - - Scarves &amp; Wraps</option>
                                        <option value=\"48\">- - - - Gloves &amp; Mittens</option>
                                        <option value=\"49\">Computer</option>
                                        <option value=\"50\">- - Bottoms</option>
                                        <option value=\"53\">- - - - Skirts</option>
                                        <option value=\"54\">- - - - Leggings</option>
                                        <option value=\"55\">- - - - Jeans</option>
                                        <option value=\"56\">- - - - Pants &amp; Capris</option>
                                        <option value=\"57\">- - - - Shorts</option>
                                        <option value=\"51\">- - Outerwear &amp; Jackets</option>
                                        <option value=\"58\">- - - - Trench</option>
                                        <option value=\"59\">- - - - Genuine Leather</option>
                                        <option value=\"60\">- - - - Parkas</option>
                                        <option value=\"61\">- - - - Down Jackets</option>
                                        <option value=\"62\">- - - - Wool &amp; Blends</option>
                                        <option value=\"52\">- - Underwear &amp; Loungewear</option>
                                        <option value=\"63\">- - - - Boxers</option>
                                        <option value=\"64\">- - - - Briefs</option>
                                        <option value=\"65\">- - - - Long Johns</option>
                                        <option value=\"66\">- - - - Men's Sleep &amp; Lounge</option>
                                        <option value=\"67\">- - - - Pajama Sets</option>
                                        <option value=\"68\">Smartphone</option>
                                        <option value=\"69\">- - Accessories &amp; Parts</option>
                                        <option value=\"75\">- - - - Cables &amp; Adapters</option>
                                        <option value=\"76\">- - - - Batteries</option>
                                        <option value=\"77\">- - - - Chargers</option>
                                        <option value=\"78\">- - - - Bags &amp; Cases</option>
                                        <option value=\"79\">- - - - Electronic Cigarettes</option>
                                        <option value=\"70\">- - Audio &amp; Video</option>
                                        <option value=\"80\">- - - - Televisions</option>
                                        <option value=\"81\">- - - - TV Receivers</option>
                                        <option value=\"82\">- - - - Projectors</option>
                                        <option value=\"83\">- - - - Audio Amplifier Boards</option>
                                        <option value=\"84\">- - - - TV Sticks</option>
                                        <option value=\"71\">- - Camera &amp; Photo</option>
                                        <option value=\"85\">- - - - Digital Cameras</option>
                                        <option value=\"86\">- - - - Camcorders</option>
                                        <option value=\"87\">- - - - Camera Drones</option>
                                        <option value=\"88\">- - - - Action Cameras</option>
                                        <option value=\"89\">- - - - Photo Studio Supplies</option>
                                        <option value=\"72\">- - Portable Audio &amp; Video</option>
                                        <option value=\"90\">- - - - Headphones</option>
                                        <option value=\"91\">- - - - Speakers</option>
                                        <option value=\"92\">- - - - MP3 Players</option>
                                        <option value=\"93\">- - - - VR/AR Devices</option>
                                        <option value=\"94\">- - - - Microphones</option>
                                        <option value=\"73\">- - Smart Electronics</option>
                                        <option value=\"95\">- - - - Wearable Devices</option>
                                        <option value=\"96\">- - - - Smart Home Appliances</option>
                                        <option value=\"97\">- - - - Smart Remote Controls</option>
                                        <option value=\"98\">- - - - Smart Watches</option>
                                        <option value=\"99\">- - - - Smart Wristbands</option>
                                        <option value=\"74\">- - Video Games</option>
                                        <option value=\"100\">- - - - Handheld Game Players</option>
                                        <option value=\"101\">- - - - Game Controllers</option>
                                        <option value=\"102\">- - - - Joysticks</option>
                                        <option value=\"103\">- - - - Stickers</option>
                                        <option value=\"104\">Game Consoles</option>
                                        <option value=\"105\">Mp3 &amp; headphone</option>
                                        <option value=\"106\">Tv &amp; Video</option>
                                        <option value=\"107\">Watches</option>
                                        <option value=\"108\">Washing Machine</option>
                                        <option value=\"109\">Camera</option>
                                        <option value=\"110\">Audio &amp; Theater</option>
                                        <option value=\"111\">Accessories</option>
                                        <option value=\"112\">Games &amp; Consoles</option>
                                    </select>
                                </div>
                                <input type=\"text\" placeholder=\"Enter your search key ... \" />
                                <button>Search</button>
                            </form>
                        </div>
                    </div>
                    </div>
                        <!--Cart info Start -->
                    <div class=\"col-lg-3 text-right\">
                        <div class=\"header-tools\">
                            <div class=\"cart-info align-self-center\">
                                <a href=\"#offcanvas-wishlist\" class=\"heart offcanvas-toggle\"><i class=\"lnr lnr-heart\"></i><span>Wishlist</span></a>
                                <a href=\"#offcanvas-cart\" class=\"bag offcanvas-toggle\"><i class=\"lnr lnr-cart\"></i><span>My Cart</span></a>
                            </div>
                        </div>
                    </div>
                    <!--Cart info End -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- header menu -->
</header>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 42,  152 => 40,  148 => 39,  137 => 37,  133 => 36,  130 => 35,  121 => 33,  117 => 32,  104 => 30,  100 => 29,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
