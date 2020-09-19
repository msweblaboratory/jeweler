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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/maps.htm */
class __TwigTemplate_23726dc87000ac30707d2c074d98cae35f56d16d9782c4ae4e1498c06cc7510e extends \Twig\Template
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
<section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/rj7aLbi9ZsAt6NZp8\" target=\"_blank\">Открыть карту</a>
                </h2>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/maps.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

<section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/rj7aLbi9ZsAt6NZp8\" target=\"_blank\">Открыть карту</a>
                </h2>
            </div>
        </div>
    </section>", "/home/msweblab/public_html/themes/jeweler/partials/Home/maps.htm", "");
    }
}
