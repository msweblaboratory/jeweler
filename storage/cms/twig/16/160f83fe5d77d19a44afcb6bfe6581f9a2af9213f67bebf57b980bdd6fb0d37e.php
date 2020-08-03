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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/layouts/main.htm */
class __TwigTemplate_3420bdee1f7f7d16fcd370273820495fa06c2fa04f96c0c6a788cbca585c24d2 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "



<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\" data-scroll=\"#intro\">Jewelerlab</div>

            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\">О нас</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#services\">Предлагаем</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#blog\">Блог</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#works\">Работы</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#footer\">Контакты</a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </nav>

            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>



";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "


";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  82 => 38,  77 => 35,  75 => 34,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'Site/head' %}




<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\" data-scroll=\"#intro\">Jewelerlab</div>

            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\">О нас</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#services\">Предлагаем</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#blog\">Блог</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#works\">Работы</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#footer\">Контакты</a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </nav>

            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>



{%page%}



{% partial 'Site/scripts' %}


    </body>
</html>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/layouts/main.htm", "");
    }
}
