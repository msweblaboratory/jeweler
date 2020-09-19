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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/works.htm */
class __TwigTemplate_0ac3e6e8726fa60705807a15480a83a8b57769688dec4772e92b7968fb9dfbb8 extends \Twig\Template
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
                <h3 class=\"section__suptitle\">ЛУЧШИЕ РАБОТЫ</h3>
                <h2 class=\"section__title\">Примеры наших лучших работ</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            
            <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/1.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Серьги</div>
                        <div class=\"works__text\">Из золота 585 пробы с бриллиантами<br />срок изготовления 2 - 3 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/2.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                         <div class=\"works__title\">Серьги </div>
                        <div class=\"works__text\">Из желтого золота 585 пробы с бриллиантами<br />срок изготовления 1.5 - 2 месяца </div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/3.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Крест</div>
                        <div class=\"works__text\">Из желтого золота 585 пробы, эмаль, гранаты, бриллианты<br />срок изготовления 3 - 4 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/4.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                         <div class=\"works__title\">Кольцо</div>
                        <div class=\"works__text\">Из красного золота 585 пробы, эмаль, бриллианты<br />срок изготовления 1 месяц.</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/5.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Подвес</div>
                        <div class=\"works__text\">Из белого золота, камень 5.51 карат<br />срок изготовления 1 неделя.</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/6.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Кольцо</div>
                        <div class=\"works__text\">Из белого золота 585 пробы<br />срок изготовления 2 - 3 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/7.gif");
        echo "\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Браслет</div>
                        <div class=\"works__text\">Барака - казино 585 пробы, бриллианты и рубины<br />срок изготовления 3 - 4 месяца.</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->

        <div class=\"work__video\">
        <div class=\"video-responsive\">
            <iframe src=\"https://www.youtube.com/embed/urbTIWSDOf0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
        </div>
    </div>
</div><!-- /.container -->

    </section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 67,  112 => 60,  99 => 50,  86 => 40,  76 => 33,  63 => 23,  53 => 16,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">ЛУЧШИЕ РАБОТЫ</h3>
                <h2 class=\"section__title\">Примеры наших лучших работ</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            
            <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/1.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Серьги</div>
                        <div class=\"works__text\">Из золота 585 пробы с бриллиантами<br />срок изготовления 2 - 3 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/2.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                         <div class=\"works__title\">Серьги </div>
                        <div class=\"works__text\">Из желтого золота 585 пробы с бриллиантами<br />срок изготовления 1.5 - 2 месяца </div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/3.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Крест</div>
                        <div class=\"works__text\">Из желтого золота 585 пробы, эмаль, гранаты, бриллианты<br />срок изготовления 3 - 4 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/4.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                         <div class=\"works__title\">Кольцо</div>
                        <div class=\"works__text\">Из красного золота 585 пробы, эмаль, бриллианты<br />срок изготовления 1 месяц.</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/5.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Подвес</div>
                        <div class=\"works__text\">Из белого золота, камень 5.51 карат<br />срок изготовления 1 неделя.</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/6.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Кольцо</div>
                        <div class=\"works__text\">Из белого золота 585 пробы<br />срок изготовления 2 - 3 недели.</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/7.gif' | theme }}\" width=\"600\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">Браслет</div>
                        <div class=\"works__text\">Барака - казино 585 пробы, бриллианты и рубины<br />срок изготовления 3 - 4 месяца.</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->

        <div class=\"work__video\">
        <div class=\"video-responsive\">
            <iframe src=\"https://www.youtube.com/embed/urbTIWSDOf0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
        </div>
    </div>
</div><!-- /.container -->

    </section>", "/home/msweblab/public_html/themes/jeweler/partials/Home/works.htm", "");
    }
}
