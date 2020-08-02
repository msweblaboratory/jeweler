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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/carousel.htm */
class __TwigTemplate_bc640ea5145bd326f1b5476a0b0887466beffc7bb980d5d487787ea154bcabdc extends \Twig\Template
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
        echo "<div class=\"container-fluid main-carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/carousel_img.jpg");
        echo "\" class=\"d-block w-100\" alt=\"carousel img\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Изготовление ювелирных изделий на заказ от Ювелирной мастерской \"JEWELERLAB\" в Киеве <br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/carousel_img.jpg");
        echo "\" class=\"d-block w-100\" alt=\"carousel img 2\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Изготовление ювелирных изделий на заказ от Ювелирной мастерской \"JEWELERLAB\" в Киеве <br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/carousel_img.jpg");
        echo "\" class=\"d-block w-100\" alt=\"carousel img 3\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Ремонт разной сложности с возможностью восстановления недостающих деталей<br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  59 => 18,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid main-carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"{{ 'assets/images/carousel_img.jpg' |theme }}\" class=\"d-block w-100\" alt=\"carousel img\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Изготовление ювелирных изделий на заказ от Ювелирной мастерской \"JEWELERLAB\" в Киеве <br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ 'assets/images/carousel_img.jpg' |theme }}\" class=\"d-block w-100\" alt=\"carousel img 2\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Изготовление ювелирных изделий на заказ от Ювелирной мастерской \"JEWELERLAB\" в Киеве <br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ 'assets/images/carousel_img.jpg' |theme }}\" class=\"d-block w-100\" alt=\"carousel img 3\">
      <div class=\"carousel-caption d-none d-md-block\">
    <h3>Ремонт разной сложности с возможностью восстановления недостающих деталей<br /> +38(050) 582 1213</h3>
    <button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='/zakaz-izdeliya';\">ЗАКАЗАТЬ ИЗДЕЛИЕ</button>
    <p class=\"mt-1\" style=\"color:#f03e3e;\">Заказать изготовление изделия на заказ</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/carousel.htm", "");
    }
}
