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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/reviews.htm */
class __TwigTemplate_a313bbee8e0c1a870d00e72a9c623fe5d0a53c28a029d378b333fd06b8a22614 extends \Twig\Template
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
        echo " <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 10,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/reviews.htm", "");
    }
}
