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
class __TwigTemplate_18610c652f1e3a6056f96e9902555ede6a20a53beb980c055440c663f2ba16d6 extends \Twig\Template
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
            echo "      <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 17
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "      <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 20
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap\" type=\"text/css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"html/assets/css/vendor/vendor.min.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/stylesheet.css\">
    <link rel=\"stylesheet\" href=\"html/assets/css/plugins/plugins.min.css\">
    <link rel=\"stylesheet\" href=\"html/assets/css/style.min.css\">
    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo "      ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </head>
  <body>
    <!-- Header Section Start From Here -->
    <header class=\"header-wrapper\">
      ";
        // line 95
        echo "      <div class=\"header-top header-style-3 bg-white sticky-nav ptb-10px d-lg-block d-none\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-2 d-flex\">
              <div class=\"logo align-self-center\">
                <a href=\"";
        // line 100
        echo ($context["home"] ?? null);
        echo "\">
                  <img class=\"img-responsive\" src=\"html/assets/images/logo/logo.jpg\" alt=\"logo.jpg\" />
                </a>
              </div>
            </div>
            <div class=\"col-md-6 align-self-center header-menu-3\">
              ";
        // line 106
        echo ($context["menu"] ?? null);
        echo "
            </div>
            <div class=\"col-md-4 text-right align-self-center header-nav \" style=\"text-align: right;\">
              <div class=\"header-menu-nav\">
                <ul class=\"menu-nav\">
                  <li>
                    <div class=\"dropdown\">
                      <button type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 113
        echo ($context["text_account"] ?? null);
        echo " <i class=\"ion-ios-arrow-down\"></i></button>
                      <ul class=\"dropdown-menu animation slideDownIn\" aria-labelledby=\"dropdownMenuButton\">
                        ";
        // line 115
        if (($context["logged"] ?? null)) {
            // line 116
            echo "                        <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 117
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 118
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 119
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 120
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                        ";
        } else {
            // line 122
            echo "                        <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 123
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 125
        echo "                      </ul>
                    </div>
                  </li>
                  <li>
                    ";
        // line 129
        echo ($context["currency"] ?? null);
        echo "
                  </li>
                  <li class=\"pr-0\">
                    ";
        // line 132
        echo ($context["language"] ?? null);
        echo "
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
            <div class=\"col-lg-9\">
              ";
        // line 145
        echo ($context["search"] ?? null);
        echo "
            </div>
            <!--Cart info Start -->
            <div class=\"col-lg-3 text-right\" style=\"text-align: right;\">
              <div class=\"header-tools\">
                <div class=\"cart-info align-self-center\">
                  ";
        // line 153
        echo "                  <a href=\"";
        echo ($context["shopping_cart"] ?? null);
        echo "\" class=\"bag offcanvas-toggle\">
                    <i class=\"lnr lnr-cart\"></i><span>";
        // line 154
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a>
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
    <!-- Header Section End Here -->
    <!-- Mobile Header Section Start -->
    <div class=\"mobile-header d-lg-none sticky-nav bg-white ptb-20px\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <!-- Header Logo Start -->
          <div class=\"col\">
            <div class=\"header-logo\">
              <a href=\"";
        // line 174
        echo ($context["home"] ?? null);
        echo "\"><img class=\"img-responsive\" src=\"html/assets/images/logo/logo.jpg\" alt=\"logo.jpg\" /></a>
            </div>
          </div>
          <!-- Header Logo End -->
          <!-- Header Tools Start -->
          <div class=\"col-auto\">
            <div class=\"header-tools justify-content-end\">
              <div class=\"cart-info d-flex align-self-center\">
                <a href=\"";
        // line 182
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"heart offcanvas-toggle\">
                  <i class=\"lnr lnr-heart\"></i><span>";
        // line 183
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
                </a>
                <a href=\"";
        // line 185
        echo ($context["shopping_cart"] ?? null);
        echo "\" class=\"bag offcanvas-toggle\">
                  <i class=\"lnr lnr-cart\"></i><span>";
        // line 186
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
                </a>
              </div>
              <div class=\"mobile-menu-toggle\">
                <a href=\"#offcanvas-mobile-menu\" class=\"offcanvas-toggle\">
                  <svg viewBox=\"0 0 800 600\">
                  <path d=\"M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200\" id=\"top\"></path>
                  <path d=\"M300,320 L540,320\" id=\"middle\"></path>
                  <path d=\"M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190\" id=\"bottom\" transform=\"translate(480, 320) scale(1, -1) translate(-480, -318) \"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        <!-- Header Tools End -->
        </div>
      </div>
    </div>
";
        // line 510
        echo "<!-- OffCanvas Search Start -->
<div id=\"offcanvas-mobile-menu\" class=\"offcanvas offcanvas-mobile-menu\">
<div class=\"inner customScroll\">
  <div class=\"head\">
    <span class=\"title\">&nbsp;</span>
    <button class=\"offcanvas-close\">×</button>
  </div>
  <div class=\"offcanvas-menu-search-form\">
    <form action=\"#\">
      <input type=\"text\" placeholder=\"Search...\">
      <button><i class=\"lnr lnr-magnifier\"></i></button>
    </form>
  </div>
  <div class=\"offcanvas-menu\">
    <ul>
      <li><a href=\"#\"><span class=\"menu-text\">Home</span></a>
      <ul class=\"sub-menu\">
        <li><a href=\"index.html\"><span class=\"menu-text\">Home 1</span></a></li>
        <li><a href=\"index-2.html\"><span class=\"menu-text\">Home 2</span></a></li>
        <li> <a href=\"index-3.html\"><span class=\"menu-text\">Home 3</span></a></li>
        <li><a href=\"index-4.html\"><span class=\"menu-text\">Home 4</span></a></li>
      </ul>
    </li>
    <li><a href=\"#\"><span class=\"menu-text\">Shop</span></a>
    <ul class=\"sub-menu\">
      <li>
        <a href=\"#\"><span class=\"menu-text\">Shop Grid</span></a>
        <ul class=\"sub-menu\">
          <li><a href=\"shop-3-column.html\">Shop Grid 3 Column</a></li>
          <li><a href=\"shop-4-column.html\">Shop Grid 4 Column</a></li>
          <li><a href=\"shop-left-sidebar.html\">Shop Grid Left Sidebar</a></li>
          <li><a href=\"shop-right-sidebar.html\">Shop Grid Right Sidebar</a></li>
        </ul>
      </li>
      <li>
        <a href=\"#\"><span class=\"menu-text\">Shop List</span></a>
        <ul class=\"sub-menu\">
          <li><a href=\"shop-list.html\">Shop List</a></li>
          <li><a href=\"shop-list-left-sidebar.html\">Shop List Left Sidebar</a></li>
          <li><a href=\"shop-list-right-sidebar.html\">Shop List Right Sidebar</a></li>
        </ul>
      </li>
      <li>
        <a href=\"#\"><span class=\"menu-text\">Shop Single</span></a>
        <ul class=\"sub-menu\">
          <li><a href=\"single-product.html\">Shop Single</a></li>
          <li><a href=\"single-product-variable.html\">Shop Variable</a></li>
          <li><a href=\"single-product-affiliate.html\">Shop Affiliate</a></li>
          <li><a href=\"single-product-group.html\">Shop Group</a></li>
          <li><a href=\"single-product-tabstyle-2.html\">Shop Tab 2</a></li>
          <li><a href=\"single-product-tabstyle-3.html\">Shop Tab 3</a></li>
        </ul>
      </li>
      <li>
        <a href=\"#\"><span class=\"menu-text\">Shop Single</span></a>
        <ul class=\"sub-menu\">
          <li><a href=\"single-product-slider.html\">Shop Slider</a></li>
          <li><a href=\"single-product-gallery-left.html\">Shop Gallery Left</a></li>
          <li><a href=\"single-product-gallery-right.html\">Shop Gallery Right</a></li>
          <li><a href=\"single-product-sticky-left.html\">Shop Sticky Left</a></li>
          <li><a href=\"single-product-sticky-right.html\">Shop Sticky Right</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href=\"#\"><span class=\"menu-text\">Pages</span></a>
  <ul class=\"sub-menu\">
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
<li><a href=\"#\"><span class=\"menu-text\">Blog</span></a>
<ul class=\"sub-menu\">
  <li><a href=\"#\"><span class=\"menu-text\">Blog Grid</span></a>
  <ul class=\"sub-menu\">
    <li><a href=\"blog-grid-left-sidebar.html\">Blog Grid Left Sidebar</a></li>
    <li><a href=\"blog-grid-right-sidebar.html\">Blog Grid Right Sidebar</a></li>
  </ul>
</li>
<li><a href=\"#\"><span class=\"menu-text\">Blog List</span></a>
<ul class=\"sub-menu\">
  <li><a href=\"blog-list-left-sidebar.html\">Blog List Left Sidebar</a></li>
  <li><a href=\"blog-list-right-sidebar.html\">Blog List Right Sidebar</a></li>
</ul>
</li>
<li><a href=\"#\"><span class=\"menu-text\">Blog Single</span></a>
<ul class=\"sub-menu\">
<li><a href=\"blog-single-left-sidebar.html\">Blog Single Left Sidebar</a></li>
<li><a href=\"blog-single-right-sidebar.html\">Blog Single Right Sidbar</a></li>
</ul>
</li>
</ul>
</li>
<li><a href=\"#\"><span class=\"menu-text\">Custom Menu</span></a>
<ul class=\"sub-menu\">
<li><a href=\"shop-4-column.html\">Women Is Clothes & Fashion</a></li>
<li><a href=\"shop-4-column.html\">Simple Style</a></li>
<li><a href=\"shop-4-column.html\">Easy Style</a></li>
</ul>
</li>
<li><a href=\"contact.html\">Contact Us</a></li>
</ul>
</div>
<!-- OffCanvas Menu End -->
<div class=\"offcanvas-social mt-30px\">
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
<a href=\"#\"><i class=\"ion-social-youtube\"></i></a>
</li>
<li>
<a href=\"#\"><i class=\"ion-social-instagram\"></i></a>
</li>
</ul>
</div>
</div>
</div>
<!-- OffCanvas Search End -->
<div class=\"offcanvas-overlay\"></div>

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
        return array (  357 => 510,  336 => 186,  332 => 185,  327 => 183,  323 => 182,  312 => 174,  289 => 154,  284 => 153,  275 => 145,  259 => 132,  253 => 129,  247 => 125,  240 => 123,  233 => 122,  226 => 120,  220 => 119,  214 => 118,  208 => 117,  201 => 116,  199 => 115,  194 => 113,  184 => 106,  175 => 100,  168 => 95,  162 => 40,  153 => 38,  148 => 37,  137 => 35,  133 => 34,  130 => 33,  121 => 31,  116 => 30,  103 => 28,  99 => 27,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
