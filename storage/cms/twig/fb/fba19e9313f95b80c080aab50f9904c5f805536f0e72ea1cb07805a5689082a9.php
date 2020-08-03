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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/home.htm */
class __TwigTemplate_c79b5e0f13ca0a92d2e8312f266b2bcf8e933e0d6f5ed16da026c9741220e8ac extends \Twig\Template
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
        echo "<div class=\"page\">

    <!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                <h2 class=\"intro__suptitle\">Jewelerlab</h2>
                <h1 class=\"intro__title\">Ювелирная мастерская<br /> в Киеве</h1>

                <a class=\"btn\" href=\"#\">Подробнее</a>
            </div>
            
            <div class=\"intro__content\"> 
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
            </div>
            
        </div>
    </div><!-- /.intro -->


    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">Story about us</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/2.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/3.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Web Design Projects</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">happy client</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">award winner</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">cup of coffee</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">members</div>
                </div>
            </div>

        </div>
    </div>


    <!-- Services -->
    <section class=\"section\" id=\"services\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">We work with</h3>
                <h2 class=\"section__title\">Amazing Services</h2>
            </div>

            <div class=\"services\">
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/photography.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/webdesign.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/creativity.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/seo.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">seo</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/css-html.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">Css/Html</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/digital.png");
        echo "\" alt=\"\">

                    <div class=\"services__title\">digital</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Devices -->
    <section class=\"section  section--devices\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">For all devices</h3>
                <h2 class=\"section__title\">Unique design</h2>
            </div>

            <div class=\"devices\">
                <img class=\"devices__item\" src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ipad.png");
        echo "\" alt=\"\">
                <img class=\"devices__item  devices__item--iphone\" src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/iphone.png");
        echo "\" alt=\"\">
            </div>

        </div>
    </section>


    <!-- Wedo -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Service</h3>
                <h2 class=\"section__title\">what we do</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"wedo\">
                <div class=\"wedo__item\">
                    <img class=\"wedo__img\" src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/wedo.jpg");
        echo "\" alt=\"\">
                </div>

                <div class=\"wedo__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#wedo_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/photography.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">Photography</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#wedo_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/creativity.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">Creativity</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#wedo_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/webdesign.png");
        echo "\" alt=\"\">
                                <div class=\"accordion__title\">web design</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.wedo__item -->
            </div><!-- /.wedo -->

        </div>
    </section>


    <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 233
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Team -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Who we are</h3>
                <h2 class=\"section__title\">Meet our team</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 269
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Matthew Dix</div>
                        <div class=\"card__prof\">Graphic Design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 297
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/2.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Christopher Campbell</div>
                        <div class=\"card__prof\">Branding/UX design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"";
        // line 325
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/3.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Michael Fertig </div>
                        <div class=\"card__prof\">Developer</div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>


    <!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 362
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/1.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/2.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 368
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/3.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 371
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/4.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/5.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"";
        // line 377
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/6.png");
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
    </div>


    <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 400
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/1.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 407
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/2.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 417
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/3.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 424
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/4.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/5.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 444
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/6.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"";
        // line 451
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/7.jpg");
        echo "\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>


    <!-- Reviews 2 -->
    <div class=\"section\">
        <div class=\"container\">

            <div class=\"reviews\">

                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 471
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"";
        // line 479
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.png");
        echo "\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Happy Clients</h3>
                <h2 class=\"section__title\">What people say</h2>
            </div>

            <div class=\"clients\">
                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"";
        // line 502
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/clients/1.png");
        echo "\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Matthew Dix</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"";
        // line 511
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/clients/2.png");
        echo "\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Nick Karvounis</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"";
        // line 520
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/clients/3.png");
        echo "\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Jaelynn Castillo </div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"";
        // line 529
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/clients/4.png");
        echo "\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Mike Petrucci</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>
            </div><!-- /.clients -->

        </div><!-- /.container -->
    </section>


    <!-- Blog -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Our stories</h3>
                <h2 class=\"section__title\">Latest blog</h2>
            </div>

            <div class=\"blog\">
                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"";
        // line 555
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/1.jpg");
        echo "\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"";
        // line 583
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/2.jpg");
        echo "\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"";
        // line 611
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/3.jpg");
        echo "\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- /.blog -->

        </div><!-- /.container -->
    </section>


    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Open Map</a>
                </h2>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Jewelerlab</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                    <form class=\"subscribe\" action=\"/\" method=\"post\">
                        <input class=\"subscribe__input\" type=\"email\" name=\"name\" placeholder=\"Your Email...\">
                        <button class=\"subscribe__btn\" type=\"submit\">Subscribe</button>
                    </form>
                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 692
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/1.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 700
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/2.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"";
        // line 708
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/3.jpg");
        echo "\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 722
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/1.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 725
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/2.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 728
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/3.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 731
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/4.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 734
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/5.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 737
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/6.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 740
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/7.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                           <img src=\"";
        // line 743
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/8.jpg");
        echo "\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"";
        // line 746
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram/9.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Jewelerlab 2020</span>
            </div>

        </div><!-- /.container -->
    </footer>

</div><!-- /.page -->";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 746,  937 => 743,  931 => 740,  925 => 737,  919 => 734,  913 => 731,  907 => 728,  901 => 725,  895 => 722,  878 => 708,  867 => 700,  856 => 692,  772 => 611,  741 => 583,  710 => 555,  681 => 529,  669 => 520,  657 => 511,  645 => 502,  619 => 479,  608 => 471,  585 => 451,  575 => 444,  562 => 434,  549 => 424,  539 => 417,  526 => 407,  516 => 400,  490 => 377,  484 => 374,  478 => 371,  472 => 368,  466 => 365,  460 => 362,  420 => 325,  389 => 297,  358 => 269,  327 => 241,  316 => 233,  289 => 209,  276 => 199,  263 => 189,  252 => 181,  228 => 160,  224 => 159,  200 => 138,  191 => 132,  182 => 126,  173 => 120,  164 => 114,  155 => 108,  99 => 55,  87 => 46,  75 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page\">

    <!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                <h2 class=\"intro__suptitle\">Jewelerlab</h2>
                <h1 class=\"intro__title\">Ювелирная мастерская<br /> в Киеве</h1>

                <a class=\"btn\" href=\"#\">Подробнее</a>
            </div>
            
            <div class=\"intro__content\"> 
            <p>Наша мастерская расположена в Киеве, на улице Княжий Затон, 15.<br /> Работаем 7 дней в неделю (в воскресенье укороченный график).<br /> +38(050) 582 1213</p>
            </div>
            
        </div>
    </div><!-- /.intro -->


    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">Story about us</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/1.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/2.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/about/3.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Web Design Projects</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">happy client</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">award winner</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">cup of coffee</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">members</div>
                </div>
            </div>

        </div>
    </div>


    <!-- Services -->
    <section class=\"section\" id=\"services\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">We work with</h3>
                <h2 class=\"section__title\">Amazing Services</h2>
            </div>

            <div class=\"services\">
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/photography.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/webdesign.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/creativity.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/seo.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">seo</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/css-html.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">Css/Html</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"{{ 'assets/images/services/digital.png' | theme }}\" alt=\"\">

                    <div class=\"services__title\">digital</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Devices -->
    <section class=\"section  section--devices\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">For all devices</h3>
                <h2 class=\"section__title\">Unique design</h2>
            </div>

            <div class=\"devices\">
                <img class=\"devices__item\" src=\"{{ 'assets/images/ipad.png' | theme }}\" alt=\"\">
                <img class=\"devices__item  devices__item--iphone\" src=\"{{ 'assets/images/iphone.png' | theme }}\" alt=\"\">
            </div>

        </div>
    </section>


    <!-- Wedo -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Service</h3>
                <h2 class=\"section__title\">what we do</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"wedo\">
                <div class=\"wedo__item\">
                    <img class=\"wedo__img\" src=\"{{ 'assets/images/wedo.jpg' | theme }}\" alt=\"\">
                </div>

                <div class=\"wedo__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#wedo_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/services/photography.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">Photography</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#wedo_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/services/creativity.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">Creativity</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#wedo_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"{{ 'assets/images/services/webdesign.png' | theme }}\" alt=\"\">
                                <div class=\"accordion__title\">web design</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.wedo__item -->
            </div><!-- /.wedo -->

        </div>
    </section>


    <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Team -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Who we are</h3>
                <h2 class=\"section__title\">Meet our team</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/team/1.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Matthew Dix</div>
                        <div class=\"card__prof\">Graphic Design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/team/2.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Christopher Campbell</div>
                        <div class=\"card__prof\">Branding/UX design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"{{ 'assets/images/team/3.jpg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Michael Fertig </div>
                        <div class=\"card__prof\">Developer</div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>


    <!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/1.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/2.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/3.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/4.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/5.png' | theme }}\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"{{ 'assets/images/logos/6.png' | theme }}\" alt=\"\">
                </div>
            </div>

        </div>
    </div>


    <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/1.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/2.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/3.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/4.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/5.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/6.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"{{ 'assets/images/works/7.jpg' | theme }}\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>


    <!-- Reviews 2 -->
    <div class=\"section\">
        <div class=\"container\">

            <div class=\"reviews\">

                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"{{ 'assets/images/avatar.png' | theme }}\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Happy Clients</h3>
                <h2 class=\"section__title\">What people say</h2>
            </div>

            <div class=\"clients\">
                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"{{ 'assets/images/clients/1.png' | theme }}\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Matthew Dix</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"{{ 'assets/images/clients/2.png' | theme }}\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Nick Karvounis</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"{{ 'assets/images/clients/3.png' | theme }}\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Jaelynn Castillo </div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"{{ 'assets/images/clients/4.png' | theme }}\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Mike Petrucci</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>
            </div><!-- /.clients -->

        </div><!-- /.container -->
    </section>


    <!-- Blog -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Our stories</h3>
                <h2 class=\"section__title\">Latest blog</h2>
            </div>

            <div class=\"blog\">
                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"{{ 'assets/images/blog/1.jpg' | theme }}\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"{{ 'assets/images/blog/2.jpg' | theme }}\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"blog__item\">
                    <div class=\"blog__header\">
                        <a href=\"#\">
                            <img class=\"blog__photo\" src=\"{{ 'assets/images/blog/3.jpg' | theme }}\" alt=\"\">
                        </a>
                        <div class=\"blog__date\">
                            <div class=\"blog__date-day\">15</div>
                            Jan
                        </div>
                    </div>
                    <div class=\"blog__content\">
                        <div class=\"blog__title\">
                            <a href=\"#\">Lorem ipsum dolor sit amet</a>
                        </div>
                        <div class=\"blog__text\">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                    <div class=\"blog__footer\">
                        <div class=\"blog-stat\">
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-eye\"></i> 542
                            </span>
                            <span class=\"blog-stat__item\">
                                <i class=\"far fa-comment-dots\"></i> 17
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- /.blog -->

        </div><!-- /.container -->
    </section>


    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Open Map</a>
                </h2>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Jewelerlab</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                    <form class=\"subscribe\" action=\"/\" method=\"post\">
                        <input class=\"subscribe__input\" type=\"email\" name=\"name\" placeholder=\"Your Email...\">
                        <button class=\"subscribe__btn\" type=\"submit\">Subscribe</button>
                    </form>
                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/1.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/2.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"{{ 'assets/images/blog/3.jpg' | theme }}\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/1.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/2.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/3.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/4.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/5.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/6.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/7.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                           <img src=\"{{ 'assets/images/instagram/8.jpg' | theme }}\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/instagram/9.jpg' | theme }}\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Jewelerlab 2020</span>
            </div>

        </div><!-- /.container -->
    </footer>

</div><!-- /.page -->", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/pages/home.htm", "");
    }
}
