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

/* /home/msweblab/public_html/themes/jeweler/partials/Site/header.htm */
class __TwigTemplate_f72202affc6a68f754dd9d0f94e68203b2fe6527882f8e8517f6dd6f34ca1671 extends \Twig\Template
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
        echo "<header class=\"header ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2) != "home")) {
            echo " active ";
        }
        echo "\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\"><a class=\"nav__link\" href=\"/\">Masterandgold</a></div>

            <nav class=\"nav\" id=\"nav\">
               ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["topMenu"] ?? null), "menuItems", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                <a class=\"nav__link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                <!-- <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a> -->
            </nav>
            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  53 => 9,  49 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<header class=\"header {% if this.page.id != 'home' %} active {% endif %}\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\"><a class=\"nav__link\" href=\"/\">Masterandgold</a></div>

            <nav class=\"nav\" id=\"nav\">
               {% for item in topMenu.menuItems %}
                <a class=\"nav__link\" href=\"{{ item.url }}\">{{ item.title }}</a>
                {% endfor %}
                <!-- <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a> -->
            </nav>
            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>", "/home/msweblab/public_html/themes/jeweler/partials/Site/header.htm", "");
    }
}
