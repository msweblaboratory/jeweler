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

/* /home/msweblab/public_html/themes/jeweler/pages/post.htm */
class __TwigTemplate_bb48bd53501283d61fbbf16adc09b707c6add3e68671726f4747430492c266be extends \Twig\Template
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
        echo "<section class=\"section  section--post\">
    <div class=\"container\">

        <div class=\"section__header\">
            <h2 class=\"section__title\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
            <div class=\"section__text\">
                ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 8), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"post\">
            ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 13);
        echo "
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  48 => 8,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"section  section--post\">
    <div class=\"container\">

        <div class=\"section__header\">
            <h2 class=\"section__title\">{{ post.title }}</h2>
            <div class=\"section__text\">
                {{ post.excerpt }}
            </div>
        </div>

        <div class=\"post\">
            {{ post.content_html|raw }}
        </div>
    </div>
</section>", "/home/msweblab/public_html/themes/jeweler/pages/post.htm", "");
    }
}
