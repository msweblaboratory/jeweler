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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm */
class __TwigTemplate_2ada31de7e86571fe65dadb6932e1e8675261ae8291817a7aca41b0e2c09dc61 extends \Twig\Template
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
        // line 2
        echo " <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Jewelerlab</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                    <form class=\"subscribe\" action=\"/\" method=\"post\">
                        <input class=\"subscribe__input\" type=\"email\" name=\"name\" placeholder=\"Your Email...\">
                        <button class=\"subscribe__btn\" type=\"submit\">Subscribe</button>
                    </form>
                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/1.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/2.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/3.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/1.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/2.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/3.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/4.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/5.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/6.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/7.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/8.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/9.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Jewelerlab 2020</span>
            </div>

        </div><!-- /.container -->
    </footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 94,  158 => 91,  152 => 88,  146 => 85,  140 => 82,  134 => 79,  128 => 76,  122 => 73,  116 => 70,  99 => 56,  88 => 48,  77 => 40,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Jewelerlab</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                    <form class=\"subscribe\" action=\"/\" method=\"post\">
                        <input class=\"subscribe__input\" type=\"email\" name=\"name\" placeholder=\"Your Email...\">
                        <button class=\"subscribe__btn\" type=\"submit\">Subscribe</button>
                    </form>
                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/1.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/2.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/3.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/1.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/2.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/3.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/4.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/5.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/6.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/7.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/8.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/9.jpg' | theme }}\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Jewelerlab 2020</span>
            </div>

        </div><!-- /.container -->
    </footer>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm", "");
    }
}
