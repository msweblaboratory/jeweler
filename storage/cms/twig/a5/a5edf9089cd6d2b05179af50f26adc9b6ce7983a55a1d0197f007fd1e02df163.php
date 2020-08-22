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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/works.htm */
class __TwigTemplate_828e82d1c1a4b03996c5f0a1f750021a80113dd62298348e78a9ebadb0d91488 extends \Twig\Template
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
        echo " <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/1.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/2.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/3.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/4.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/5.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/6.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/7.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  113 => 61,  100 => 51,  87 => 41,  77 => 34,  64 => 24,  54 => 17,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/1.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/2.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/3.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/4.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/5.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/6.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/7.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/works.htm", "");
    }
}
