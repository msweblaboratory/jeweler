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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/intro.htm */
class __TwigTemplate_9002a6f0a932becb374748796f2624f092b5870303d8068e9f226a0852bff569 extends \Twig\Template
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
        echo "<!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                <h2 class=\"intro__suptitle animate__animated animate__bounce animate__delay-1s\">Jewelerlab</h2>
                <h1 class=\"intro__title  animate__animated animate__fadeInRight animate__delay-2s\">Ювелирная мастерская<br /> в Киеве</h1>

    <div class=\"intro__content animate__animated animate__fadeInLeft animate__delay-2s\"> 
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
            </div>
                <a class=\"btn animate__animated animate__fadeIn animate__delay-2s\" href=\"#\">Заказать изготовление ювелирного украшения</a>
            </div>
        </div>
    </div><!-- /.intro -->";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/intro.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                <h2 class=\"intro__suptitle animate__animated animate__bounce animate__delay-1s\">Jewelerlab</h2>
                <h1 class=\"intro__title  animate__animated animate__fadeInRight animate__delay-2s\">Ювелирная мастерская<br /> в Киеве</h1>

    <div class=\"intro__content animate__animated animate__fadeInLeft animate__delay-2s\"> 
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
            </div>
                <a class=\"btn animate__animated animate__fadeIn animate__delay-2s\" href=\"#\">Заказать изготовление ювелирного украшения</a>
            </div>
        </div>
    </div><!-- /.intro -->", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/intro.htm", "");
    }
}
