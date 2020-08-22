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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/advantages.htm */
class __TwigTemplate_9171a3ee9fdd06567e42adfbba88a6005d7b5a19fbbd1081f3e9baec0c5cd311 extends \Twig\Template
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
        echo " <!-- Advantages -->
    <section class=\"section\" id=\"advantages\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">ПРЕИМУЩЕСТВА</h3>
                <h2 class=\"section__title\">Наши преимущества в работе с клиентами</h2>
            </div>

            <div class=\"advantages\">
                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/phone.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">Бесплатная консультация мастера</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/ok.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">Выполняем всегда в срок</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/tochnayrabota.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">100% Точная работа</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                
                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/delivery.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">Бесплатная доставка по Украине</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/calendar.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">Срок изготовления от 1 до 14 дней</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
    
                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/client.png");
        echo "\" alt=\"\">

                    <div class=\"advantages__title\">Индивидуальный подход</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/advantages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  90 => 41,  80 => 34,  70 => 27,  60 => 20,  50 => 13,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Advantages -->
    <section class=\"section\" id=\"advantages\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">ПРЕИМУЩЕСТВА</h3>
                <h2 class=\"section__title\">Наши преимущества в работе с клиентами</h2>
            </div>

            <div class=\"advantages\">
                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/phone.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">Бесплатная консультация мастера</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/ok.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">Выполняем всегда в срок</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item  advantages__item--border\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/tochnayrabota.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">100% Точная работа</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                
                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/delivery.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">Бесплатная доставка по Украине</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>

                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/calendar.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">Срок изготовления от 1 до 14 дней</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
    
                <div class=\"advantages__item\">
                    <img class=\"advantages__icon\" src=\"{{ 'assets/images/services/client.png' | theme }}\" alt=\"\">

                    <div class=\"advantages__title\">Индивидуальный подход</div>
                    <div class=\"advantages__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/advantages.htm", "");
    }
}
