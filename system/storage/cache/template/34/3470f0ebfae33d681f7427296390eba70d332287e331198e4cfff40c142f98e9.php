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
class __TwigTemplate_78fbcc12cf9a2ff656ee01ee06db5c3aa8c94a02b5b2a9f1690b6be6d57f673f extends \Twig\Template
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
                            <h4 class=\"footer-herading\">Information</h4>
                            <div class=\"footer-links\">
                                <ul>
                                    <li><a href=\"#\">Delivery</a></li>
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"#\">Secure Payment</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                    <li><a href=\"#\">Sitemap</a></li>
                                    <li><a href=\"#\">Stores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-2 col-sm-6 mb-sm-30px mb-lm-30px\">
                        <div class=\"single-wedge\">
                            <h4 class=\"footer-herading\">CUSTOM LINKS</h4>
                            <div class=\"footer-links\">
                                <ul>
                                    <li><a href=\"#\">Legal Notice</a></li>
                                    <li><a href=\"#\">Prices Drop</a></li>
                                    <li><a href=\"#\">New Products</a></li>
                                    <li><a href=\"#\">Best Sales</a></li>
                                    <li><a href=\"login.html\">Login</a></li>
                                    <li><a href=\"my-account.html\">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 \">
                        <div class=\"single-wedge\">
                            <h4 class=\"footer-herading\">From Our Blog</h4>
                            <div class=\"footer-blog-slider\">
                                <div class=\"footer-blog-slider-wrapper slider-nav-style-3 \">
                                    <!-- Single-item -->
                                    <div class=\"single-slider-item\">
                                        <div class=\"footer-blog-post d-flex mb-30px\">
                                            <div class=\"footer-blog-post-top\">
                                                <div class=\"post-thumbnail\">
                                                    <a href=\"blog-single-left-sidebar.html\">
                                                        <img src=\"html/assets/images/blog-image/blog-8.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"footer-blog-content\">
                                                <h4><a href=\"blog-single-left-sidebar.html\">This is First Post For XipBlog</a></h4>
                                                <div class=\"footer-blog-meta\">
                                                    <span class=\"autor\">Posted by <a href=\"#\">Demo Hasthemes</a> </span>
                                                    <span class=\"date\">Jun 29,2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer-blog-post\">
                                            <div class=\"footer-blog-post-top\">
                                                <div class=\"post-thumbnail\">
                                                    <a href=\"blog-single-left-sidebar.html\">
                                                        <img src=\"html/assets/images/blog-image/blog-9.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"footer-blog-content\">
                                                <h4><a href=\"blog-single-left-sidebar.html\">This is Secound Post For XipBlog</a></h4>
                                                <div class=\"footer-blog-meta\">
                                                    <span class=\"autor\">Posted by <a href=\"#\">Demo Hasthemes</a> </span>
                                                    <span class=\"date\">Jun 29,2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-item -->
                                    <div class=\"single-slider-item\">
                                        <div class=\"footer-blog-post d-flex mb-30px\">
                                            <div class=\"footer-blog-post-top\">
                                                <div class=\"post-thumbnail\">
                                                    <a href=\"blog-single-left-sidebar.html\">
                                                        <img src=\"html/assets/images/blog-image/blog-10.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"footer-blog-content\">
                                                <h4><a href=\"blog-single-left-sidebar.html\">This is Third Post For XipBlog</a></h4>
                                                <div class=\"footer-blog-meta\">
                                                    <span class=\"autor\">Posted by <a href=\"#\">Demo Hasthemes</a> </span>
                                                    <span class=\"date\">Jun 29,2020</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"footer-blog-post d-flex\">
                                            <div class=\"footer-blog-post-top\">
                                                <div class=\"post-thumbnail\">
                                                    <a href=\"blog-single-left-sidebar.html\">
                                                        <img src=\"html/assets/images/blog-image/blog-11.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"footer-blog-content\">
                                                <h4><a href=\"blog-single-left-sidebar.html\">This is Fourth Post For XipBlog</a></h4>
                                                <div class=\"footer-blog-meta\">
                                                    <span class=\"autor\">Posted by <a href=\"#\">Demo Hasthemes</a> </span>
                                                    <span class=\"date\">Jun 29,2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-item end -->
                                </div>
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
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 253
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 253);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 253);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 253);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 256
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
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
        return array (  274 => 258,  265 => 256,  261 => 255,  248 => 253,  244 => 252,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
