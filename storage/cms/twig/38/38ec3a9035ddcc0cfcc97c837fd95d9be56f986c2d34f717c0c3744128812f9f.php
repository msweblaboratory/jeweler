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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/start.htm */
class __TwigTemplate_cb07cb8b0d2bfeda6b0e7e1d86b1f6eaf187e3f9c5d87d14fe29c6eedbb9c5eb extends \Twig\Template
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
        echo "

<div class=\"section-start\">
        <div class=\"container\">
            <div class=\"section__header\">
            <div class=\"start_logo\"><img class=\"img-responsive\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/start/main-logo.png");
        echo "\" alt=\"Логотип\"  /></div>
            <h1 class=\"start__title\">Ювелирная мастерская в Киеве</h1>
            <div class=\"start__content\">
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
        </div>
            <a class=\"btn\" href=\"/home\">Перейти на сайт</a>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/start.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}


<div class=\"section-start\">
        <div class=\"container\">
            <div class=\"section__header\">
            <div class=\"start_logo\"><img class=\"img-responsive\" src=\"{{ '/assets/images/start/main-logo.png' |theme }}\" alt=\"Логотип\"  /></div>
            <h1 class=\"start__title\">Ювелирная мастерская в Киеве</h1>
            <div class=\"start__content\">
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
        </div>
            <a class=\"btn\" href=\"/home\">Перейти на сайт</a>
            </div>
        </div>
    </div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/start.htm", "");
    }
}
