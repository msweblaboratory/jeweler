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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/statistics.htm */
class __TwigTemplate_1e84c8ab8af4d8dd4a05782c01e2a46f8794e672e30a8684ca81b0edb6f715b1 extends \Twig\Template
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
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/statistics.htm";
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
    </div>", "/home/msweblab/public_html/themes/jeweler/partials/Home/statistics.htm", "");
    }
}
