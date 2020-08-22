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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/statistics.htm */
class __TwigTemplate_0496c7787b8a7991f4a6439240e76fb530a18b07ac596022190c7a19c7133536 extends \Twig\Template
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
        echo "<!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Партнеров</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">Довольных клиентов</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">Сотрудников</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">Выполненно заказов</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">Ожидают заказов</div>
                </div>
            </div>

        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/statistics.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Партнеров</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">Довольных клиентов</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">Сотрудников</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">Выполненно заказов</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">Ожидают заказов</div>
                </div>
            </div>

        </div>
    </div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/statistics.htm", "");
    }
}
