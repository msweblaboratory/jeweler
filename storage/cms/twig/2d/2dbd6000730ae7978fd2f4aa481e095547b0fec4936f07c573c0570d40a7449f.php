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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/announce.htm */
class __TwigTemplate_925f217d7d1bef1da93b6625cfd55bc72b7ad961dd120a3ad90a73688e86575d extends \Twig\Template
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
            <div class=\"announce\">
                <h1 class=\"announce-title\">Ювелирная мастерская \"JEWELERLAB\"</h1>
                <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15. Работаем 7 дней в неделю (в воскресенье укороченный график).</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/announce.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"announce\">
                <h1 class=\"announce-title\">Ювелирная мастерская \"JEWELERLAB\"</h1>
                <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15. Работаем 7 дней в неделю (в воскресенье укороченный график).</p>
            </div>
        </div>
    </div>
</div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/announce.htm", "");
    }
}
