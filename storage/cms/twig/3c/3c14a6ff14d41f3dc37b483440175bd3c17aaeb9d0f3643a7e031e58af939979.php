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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/media.htm */
class __TwigTemplate_d2745ef253a9d5f5112848c6f3b52d40a3b7dfdf78db098b74b29cb572fa8e54 extends \Twig\Template
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
        echo "<!-- Media -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ РАБОТЫ</h3>
                <h2 class=\"section__title\">Примеры наших работ</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/media/1.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            Смотреть фото
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Фото галерея</div>
                        <div class=\"card__prof\">Сдесь можно посмотреть фото наших работ</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/media/2.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            Смотреть видео
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Видео галерея </div>
                        <div class=\"card__prof\">Сдесь можно посмотреть видео наших работ </div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/media/3.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"https://www.facebook.com/%D0%AE%D0%B2%D0%B5%D0%BB%D0%B8%D1%80-%D0%9A%D0%B8%D0%B5%D0%B2-%D0%AE%D0%B2%D0%B5%D0%BB%D0%B8%D1%80%D0%BD%D1%8B%D0%B5-%D0%98%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D1%8F-662265097554740/\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-google\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                                <a class=\"social__item\" href=\"https://www.instagram.com/masterandgold/\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Мы в социальных сетях </div>
                        <div class=\"card__prof\">Следите за нашими новостями </div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/media.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  73 => 33,  55 => 18,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Media -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">НАШИ РАБОТЫ</h3>
                <h2 class=\"section__title\">Примеры наших работ</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/media/1.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            Смотреть фото
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Фото галерея</div>
                        <div class=\"card__prof\">Сдесь можно посмотреть фото наших работ</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/media/2.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            Смотреть видео
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Видео галерея </div>
                        <div class=\"card__prof\">Сдесь можно посмотреть видео наших работ </div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/media/3.png' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"https://www.facebook.com/%D0%AE%D0%B2%D0%B5%D0%BB%D0%B8%D1%80-%D0%9A%D0%B8%D0%B5%D0%B2-%D0%AE%D0%B2%D0%B5%D0%BB%D0%B8%D1%80%D0%BD%D1%8B%D0%B5-%D0%98%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D1%8F-662265097554740/\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-google\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                                <a class=\"social__item\" href=\"https://www.instagram.com/masterandgold/\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Мы в социальных сетях </div>
                        <div class=\"card__prof\">Следите за нашими новостями </div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/media.htm", "");
    }
}
