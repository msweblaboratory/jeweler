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

/* /home/msweblab/public_html/themes/jeweler/pages/start.htm */
class __TwigTemplate_ea08c37c104e22f51a86dd724ca84430adefff29b3f12394194ea10ac32faab1 extends \Twig\Template
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
            <img class=\"img-responsive\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/start/main-logo.png");
        echo "\" width=\"379px\" alt=\"Логотип\"  />
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
        return "/home/msweblab/public_html/themes/jeweler/pages/start.htm";
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
            <img class=\"img-responsive\" src=\"{{ '/assets/images/start/main-logo.png' |theme }}\" width=\"379px\" alt=\"Логотип\"  />
            <h1 class=\"start__title\">Ювелирная мастерская в Киеве</h1>
            <div class=\"start__content\">
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
        </div>
            <a class=\"btn\" href=\"/home\">Перейти на сайт</a>
            </div>
        </div>
    </div>", "/home/msweblab/public_html/themes/jeweler/pages/start.htm", "");
    }
}
