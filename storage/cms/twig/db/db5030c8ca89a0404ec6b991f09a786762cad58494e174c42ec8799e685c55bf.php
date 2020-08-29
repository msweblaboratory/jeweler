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

/* /home/msweblab/public_html/themes/jeweler/pages/home.htm */
class __TwigTemplate_1eb4fa8ef04d21b6c181fd1bd6ad71fde14941f2483fa8371f9d2527f1dcc942 extends \Twig\Template
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
        echo "<div class=\"page\">

    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  

    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/reviews"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/advantages"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "
    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/making"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/media"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/works"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/clients"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/statistics"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
    ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/logos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Blog/last_post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Открыть карту</a>
                </h2>
            </div>
        </div>
    </section>

</div><!-- /.page -->";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  118 => 26,  115 => 25,  111 => 24,  108 => 23,  104 => 22,  101 => 21,  97 => 20,  94 => 19,  90 => 18,  87 => 17,  83 => 16,  80 => 15,  76 => 14,  73 => 13,  69 => 12,  66 => 11,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  48 => 6,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"page\">

    {% partial 'Home/intro' %}  

    {% partial 'Home/about' %}

    {% partial 'Home/reviews' %}

    {% partial 'Home/advantages' %}

    {% partial 'Home/making' %}

    {% partial 'Home/media' %}

    {% partial 'Home/works' %}

    {% partial 'Home/service' %}

    {% partial 'Home/clients' %}

    {% partial 'Home/statistics' %}

    {% partial 'Home/logos' %}

    {% partial 'Blog/last_post' %}

    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Открыть карту</a>
                </h2>
            </div>
        </div>
    </section>

</div><!-- /.page -->", "/home/msweblab/public_html/themes/jeweler/pages/home.htm", "");
    }
}
