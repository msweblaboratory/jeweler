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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/clients.htm */
class __TwigTemplate_4b47baa57e27728abe77344a74032942a076bd897d368b26c94f7d8e4f95a0a4 extends \Twig\Template
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
        echo "    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ КЛИЕНТЫ</h3>
                <h2 class=\"section__title\">Отзывы счастливых клиентов</h2>
                <a class=\"btn\" target=\"_blank\" href=\"https://www.google.com/search?q=%D1%8E%D0%B2%D0%B5%D0%BB%D0%B8%D1%80%D0%BD%D0%B0%D1%8F+%D0%BC%D0%B0%D1%81%D1%82%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F+diamond+%D0%BA%D0%BD%D1%8F%D0%B6%D0%B8%D0%B9+%D0%B7%D0%B0%D1%82%D0%BE%D0%BD+15&oq=%D1%8E%D0%B2&aqs=chrome.0.69i59j69i57j35i39l2j46j0j69i61l2.1550j0j7&sourceid=chrome&ie=UTF-8#lrd=0x40d4c5a3034bf6f7:0x956f7c8bee00d8ab,1,,,\">Читать Отзывы</a>
            </div>
        </div><!-- /.container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/clients.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ КЛИЕНТЫ</h3>
                <h2 class=\"section__title\">Отзывы счастливых клиентов</h2>
                <a class=\"btn\" target=\"_blank\" href=\"https://www.google.com/search?q=%D1%8E%D0%B2%D0%B5%D0%BB%D0%B8%D1%80%D0%BD%D0%B0%D1%8F+%D0%BC%D0%B0%D1%81%D1%82%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F+diamond+%D0%BA%D0%BD%D1%8F%D0%B6%D0%B8%D0%B9+%D0%B7%D0%B0%D1%82%D0%BE%D0%BD+15&oq=%D1%8E%D0%B2&aqs=chrome.0.69i59j69i57j35i39l2j46j0j69i61l2.1550j0j7&sourceid=chrome&ie=UTF-8#lrd=0x40d4c5a3034bf6f7:0x956f7c8bee00d8ab,1,,,\">Читать Отзывы</a>
            </div>
        </div><!-- /.container -->
    </section>", "/home/msweblab/public_html/themes/jeweler/partials/Home/clients.htm", "");
    }
}
