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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/service.htm */
class __TwigTemplate_decb68dac1c61bfd2ad1fff2127857251f1ea0294b7b5700523fea23a7805597 extends \Twig\Template
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
        echo "    <!-- Service -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">ГАРАНТИЯ</h3>
                <h2 class=\"section__title\">Гарантия и обслуживание</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"service\">
                <div class=\"service__item\">
                    <img class=\"service__img\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service.jpg");
        echo "\" alt=\"\">
                </div>

                <div class=\"service__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#service_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lamp.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">Гарантия на украшения ручной работы</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#service_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/creativity.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">Гарантия на реставрацию</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#service_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/webdesign.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">Обслуживание ювелирных украшений</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.service__item -->
            </div><!-- /.service -->

        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  77 => 34,  64 => 24,  53 => 16,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
    <!-- Service -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">ГАРАНТИЯ</h3>
                <h2 class=\"section__title\">Гарантия и обслуживание</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"service\">
                <div class=\"service__item\">
                    <img class=\"service__img\" src=\"{{ 'assets/images/service.jpg' | theme }}\" alt=\"\">
                </div>

                <div class=\"service__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#service_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/lamp.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">Гарантия на украшения ручной работы</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#service_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/services/creativity.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">Гарантия на реставрацию</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#service_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/services/webdesign.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">Обслуживание ювелирных украшений</div>
                            </div>
                            <div class=\"accordion__content\" id=\"service_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.service__item -->
            </div><!-- /.service -->

        </div>
    </section>", "/home/msweblab/public_html/themes/jeweler/partials/Home/service.htm", "");
    }
}
