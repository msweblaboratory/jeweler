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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/about.htm */
class __TwigTemplate_af3a749666ddffde515cfbcd202d4a389a4d3e2b5a31dd63a684916766b50349 extends \Twig\Template
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
        echo "    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">О НАС</h3>
                <h2 class=\"section__title\">Ювелирная мастерская \"JEWELERLAB\"</h2>
                <div class=\"section__text\">
                    <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/kolco.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Кольца</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/sergi.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Серьги</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/brosh.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Броши</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/kulon.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Подвесы</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/cepochka.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Цепочки</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/replica.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Реплики</div>
                    </div>
                </div>
                  <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/coin.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Именные монеты</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/keychain.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Брелки</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/brosh.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Браслеты</div>
                    </div>
                </div>

            </div>
        </div><!-- /.container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 89,  138 => 80,  126 => 71,  115 => 63,  103 => 54,  91 => 45,  79 => 36,  67 => 27,  55 => 18,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">О НАС</h3>
                <h2 class=\"section__title\">Ювелирная мастерская \"JEWELERLAB\"</h2>
                <div class=\"section__text\">
                    <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/kolco.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Кольца</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/sergi.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Серьги</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/brosh.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Броши</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/kulon.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Подвесы</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/cepochka.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Цепочки</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/replica.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Реплики</div>
                    </div>
                </div>
                  <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/coin.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Именные монеты</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/keychain.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Брелки</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/brosh.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">Браслеты</div>
                    </div>
                </div>

            </div>
        </div><!-- /.container -->
    </section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/about.htm", "");
    }
}
