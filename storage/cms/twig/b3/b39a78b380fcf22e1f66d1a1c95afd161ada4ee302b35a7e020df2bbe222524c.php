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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/service.htm */
class __TwigTemplate_c94741fb77cdd879f147ad4e9424b97858e197b28e0059589234566760efba0c extends \Twig\Template
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
        echo "<div style=\"margin:40px auto; height:5px; width:20%; background:RGB(255, 146, 43);\"></div>
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/kolco.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Кольца</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sergi.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Серьги</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brosh.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Броши</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/podves.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Подвесы</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cepochka.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Цепочки</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/replica.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Реплики</p></div>
      </div>
    </div>
    
    <div class=\"col-xs-6 col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/coin.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Именные монеты</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/keychain.png");
        echo "\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Брелки</p></div>
      </div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 55,  104 => 48,  94 => 41,  84 => 34,  74 => 27,  64 => 20,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"margin:40px auto; height:5px; width:20%; background:RGB(255, 146, 43);\"></div>
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/kolco.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Кольца</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/sergi.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Серьги</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/brosh.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Броши</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/podves.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Подвесы</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/cepochka.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Цепочки</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/replica.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Реплики</p></div>
      </div>
    </div>
    
    <div class=\"col-xs-6 col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/coin.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Именные монеты</p></div>
      </div>
    </div>
    
    <div class=\"col-sm-6 col-lg-3 text-center\">
      <div class=\"services\" onclick=\"location.href='#';\">
      <img class=\"img-fluid\" src=\"{{ 'assets/images/keychain.png' | theme }}\" width=\"150px\" height=\"auto\" alt=\"\">
      <div class=\"services-text\"><p>Брелки</p></div>
      </div>
    </div>

  </div>
</div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/service.htm", "");
    }
}
