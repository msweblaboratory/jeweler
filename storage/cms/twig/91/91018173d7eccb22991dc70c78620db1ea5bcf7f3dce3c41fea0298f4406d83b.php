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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/reviews.htm */
class __TwigTemplate_6b13a7063b0d40076247bf3a664c2b20a0e21f7b5478668f2a9d1d42afabe3b7 extends \Twig\Template
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
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/reviews.htm";
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
    </div>", "/home/msweblab/public_html/themes/jeweler/partials/Home/reviews.htm", "");
    }
}
