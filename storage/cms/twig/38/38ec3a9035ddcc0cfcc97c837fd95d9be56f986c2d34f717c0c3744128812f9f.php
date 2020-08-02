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
        // line 1
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"video-block\">
      <img class=\"img-fluid\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/start-logo.png");
        echo "\" alt=\"Логотип\" width=\"379\" height=\"391\" />
        <p style=\"font-size: 24px; color: #e6b945; text-align: center; padding: 0; margin: 0;\">Ювелирная мастерская Киеве</p>
        <div class = \"text-center mt-5\">
        <a href=\"/home\" class=\"btn btn-warning btn-lg \">ПЕРЕЙТИ НА САЙТ</a>
        </div>
      </div>
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
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"video-block\">
      <img class=\"img-fluid\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"{{ '/assets/images/start-logo.png' |theme }}\" alt=\"Логотип\" width=\"379\" height=\"391\" />
        <p style=\"font-size: 24px; color: #e6b945; text-align: center; padding: 0; margin: 0;\">Ювелирная мастерская Киеве</p>
        <div class = \"text-center mt-5\">
        <a href=\"/home\" class=\"btn btn-warning btn-lg \">ПЕРЕЙТИ НА САЙТ</a>
        </div>
      </div>
    </div>
  </div>
</div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/start.htm", "");
    }
}
