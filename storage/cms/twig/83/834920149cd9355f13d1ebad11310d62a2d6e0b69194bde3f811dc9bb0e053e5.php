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

/* /home/msweblab/public_html/themes/jeweler/partials/Site/footer.htm */
class __TwigTemplate_7d95a637514fd8343cbd45eb10369594840b2ac9691032dbd6563a513a88dacd extends \Twig\Template
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
        echo " <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">
            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Masterandgold</div>
                    <div class=\"footer__text\"></div>

                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"social\">
                    <a class=\"footer__social--item\" href=\"https://www.facebook.com/Ювелир-Киев-Ювелирные-Изделия-662265097554740/\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/facebook.png");
        echo "\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"https://www.instagram.com/masterandgold/\"><img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/in.png");
        echo "\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/google.png");
        echo "\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/youtube.png");
        echo "\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"viber://chat?number=+380505821213\"><img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/viber.png");
        echo "\" alt=\"\"></a> 
                </div>
                
                </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Masterandgold 2020</span>
            </div>


        </div><!-- /.container -->
    </footer>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
 <!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">
            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">Masterandgold</div>
                    <div class=\"footer__text\"></div>

                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"social\">
                    <a class=\"footer__social--item\" href=\"https://www.facebook.com/Ювелир-Киев-Ювелирные-Изделия-662265097554740/\"><img src=\"{{ 'assets/images/social/facebook.png' | theme }}\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"https://www.instagram.com/masterandgold/\"><img src=\"{{ 'assets/images/social/in.png' | theme }}\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"\"><img src=\"{{ 'assets/images/social/google.png' | theme }}\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"\"><img src=\"{{ 'assets/images/social/youtube.png' | theme }}\" alt=\"\"></a>
                    <a class=\"footer__social--item\" href=\"viber://chat?number=+380505821213\"><img src=\"{{ 'assets/images/social/viber.png' | theme }}\" alt=\"\"></a> 
                </div>
                
                </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                <span>© Masterandgold 2020</span>
            </div>


        </div><!-- /.container -->
    </footer>", "/home/msweblab/public_html/themes/jeweler/partials/Site/footer.htm", "");
    }
}
