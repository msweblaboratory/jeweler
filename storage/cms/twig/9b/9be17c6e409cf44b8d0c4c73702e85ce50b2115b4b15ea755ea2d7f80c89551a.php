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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm */
class __TwigTemplate_2ada31de7e86571fe65dadb6932e1e8675261ae8291817a7aca41b0e2c09dc61 extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-dark footer\">
    <div class=\"row\">
        <div class=\"col text-center mt-2\">
            <h2 class=\"footer-title\">Ювелирная мастерская \"JEWELERLAB\"</h2>
            <p class=\"footer-desc\">Предлагает Вам услуги по изготовлению, ремонту и реставрации ювелирных изделий в
                Киеве и по всей Украине.</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"footer-contact\">
                <h2 class=\"footer-contact-title\">Контакты</h2>
                <a href=\"#\"><i class=\"fas fa-map-marker-alt mr-2\"></i>Украина, г. Киев, ул. Княжий Затон, 15 </a>
                <a href=\"#\"><i class=\"fas fa-phone mr-2\"></i>050 582 1213</a>
                <a href=\"#\"><i class=\"fas fa-phone mr-2\"></i>063 842 3767</a>
                <a href=\"#\"><i class=\"fas fa-envelope mr-2\"></i>info@masterandgold.com.ua</a>
            </div>
        </div>

        <div class=\"col mt-3\" style=\"z-index:5\">
            <div class=\"footer-map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1894.2016574752147!2d30.618790967745245!3d50.40190082993435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5b024989fa9%3A0x8f67a77f741b530!2z0YPQuy4g0JrQvdGP0LbQuNC5INCX0LDRgtC-0L0sIDE1LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1595759673601!5m2!1sru!2sua\"
                        width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"
                        aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
        </div>

        <div class=\"col bg-dark footer-menu\">
            <ul>
                <li><a href=\"#\">Главная</a>
                <li>
                <li><a href=\"#\">Контакты</a>
                <li>
                <li><a href=\"#\">Мои работы</a>
                <li>
                <li><a href=\"#\">Магазин</a>
                <li>
                <li><a href=\"#\">Блог</a>
                <li>
            </ul>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col footer-social\">
            <a href=\"#\"><i class=\"fab fa-facebook-f fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-twitter fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-google-plus-g fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-instagram fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-pinterest fa-2x\"></i></a>
        </div>
    </div>

    <div class=\"footer-copyright text-center py-3\"><p>© 2020 Copyright:</p></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-dark footer\">
    <div class=\"row\">
        <div class=\"col text-center mt-2\">
            <h2 class=\"footer-title\">Ювелирная мастерская \"JEWELERLAB\"</h2>
            <p class=\"footer-desc\">Предлагает Вам услуги по изготовлению, ремонту и реставрации ювелирных изделий в
                Киеве и по всей Украине.</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"footer-contact\">
                <h2 class=\"footer-contact-title\">Контакты</h2>
                <a href=\"#\"><i class=\"fas fa-map-marker-alt mr-2\"></i>Украина, г. Киев, ул. Княжий Затон, 15 </a>
                <a href=\"#\"><i class=\"fas fa-phone mr-2\"></i>050 582 1213</a>
                <a href=\"#\"><i class=\"fas fa-phone mr-2\"></i>063 842 3767</a>
                <a href=\"#\"><i class=\"fas fa-envelope mr-2\"></i>info@masterandgold.com.ua</a>
            </div>
        </div>

        <div class=\"col mt-3\" style=\"z-index:5\">
            <div class=\"footer-map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1894.2016574752147!2d30.618790967745245!3d50.40190082993435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5b024989fa9%3A0x8f67a77f741b530!2z0YPQuy4g0JrQvdGP0LbQuNC5INCX0LDRgtC-0L0sIDE1LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1595759673601!5m2!1sru!2sua\"
                        width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"
                        aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
        </div>

        <div class=\"col bg-dark footer-menu\">
            <ul>
                <li><a href=\"#\">Главная</a>
                <li>
                <li><a href=\"#\">Контакты</a>
                <li>
                <li><a href=\"#\">Мои работы</a>
                <li>
                <li><a href=\"#\">Магазин</a>
                <li>
                <li><a href=\"#\">Блог</a>
                <li>
            </ul>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col footer-social\">
            <a href=\"#\"><i class=\"fab fa-facebook-f fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-twitter fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-google-plus-g fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-instagram fa-2x\"></i></a>
            <a href=\"#\"><i class=\"fab fa-pinterest fa-2x\"></i></a>
        </div>
    </div>

    <div class=\"footer-copyright text-center py-3\"><p>© 2020 Copyright:</p></div>
</div>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Site/footer.htm", "");
    }
}
