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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/logos.htm */
class __TwigTemplate_2fbc4651842d9d2a4acf2085dcc79ebbfeaf1df367b46d0debbbe1549483165f extends \Twig\Template
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
        echo "<!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ ПАРТНЕРЫ</h3>
                <h2 class=\"section__title\">ПАРТНЕРЫ КОТОРЫЕ ДОВЕРЯЮТ НАМ</h2>
            </div>

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/1.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/2.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/3.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/4.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/5.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/6.png");
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/logos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  73 => 24,  67 => 21,  61 => 18,  55 => 15,  49 => 12,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ ПАРТНЕРЫ</h3>
                <h2 class=\"section__title\">ПАРТНЕРЫ КОТОРЫЕ ДОВЕРЯЮТ НАМ</h2>
            </div>

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/1.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/2.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/3.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/4.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/5.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/6.png' | theme }}\" alt=\"\">
                </div>
            </div>

        </div>
    </div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/logos.htm", "");
    }
}
