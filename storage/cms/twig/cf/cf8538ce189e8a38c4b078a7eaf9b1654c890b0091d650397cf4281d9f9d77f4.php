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

/* /home/msweblab/public_html/themes/jeweler/partials/Blog/last_post.htm */
class __TwigTemplate_1f2f5fb97baaae17af44bf6c281f91785863484f266e2eafbb9c4dc2e5cc19cc extends \Twig\Template
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
        echo "


<!-- Blog -->
<section class=\"section\" id=\"blog\">
    <div class=\"container\">

    <div class=\"section__header\">
        <h3 class=\"section__suptitle\">БЛОГ</h3>
        <h2 class=\"section__title\">Последие статьи блога</h2>
    </div>

<div class=\"blog\">

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 20), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "                    <img class=\"blog__photo\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 21), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 25), "d"), "html", null, true);
            echo "</div>
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 26), "M"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
            </div>
            <div class=\"blog__text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 38), "html", null, true);
            echo "
                </span>
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-comment-dots\"></i> 17
                </span>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <a class=\"btn btn__all-posts\" href=\"/blog\">Читать все все статьи</a>

</div><!-- /.blog -->
    </div><!-- /.container -->
</section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Blog/last_post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  111 => 38,  103 => 33,  96 => 31,  88 => 26,  84 => 25,  80 => 23,  69 => 21,  65 => 20,  61 => 19,  57 => 17,  53 => 16,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}



<!-- Blog -->
<section class=\"section\" id=\"blog\">
    <div class=\"container\">

    <div class=\"section__header\">
        <h3 class=\"section__suptitle\">БЛОГ</h3>
        <h2 class=\"section__title\">Последие статьи блога</h2>
    </div>

<div class=\"blog\">

    {% for post in posts %}
    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"{{ post.url }}\">
                {% for image in post.featured_images|slice(0, 1) %}
                    <img class=\"blog__photo\" src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
                {% endfor %}
            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">{{ post.published_at|date('d') }}</div>
                {{ post.published_at|date('M') }}
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"{{ post.url }}\">{{ post.title }}</a>
            </div>
            <div class=\"blog__text\">{{ post.excerpt }}</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> {{ post.views }}
                </span>
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-comment-dots\"></i> 17
                </span>
            </div>
        </div>
    </div>
    {% endfor %}

    <a class=\"btn btn__all-posts\" href=\"/blog\">Читать все все статьи</a>

</div><!-- /.blog -->
    </div><!-- /.container -->
</section>", "/home/msweblab/public_html/themes/jeweler/partials/Blog/last_post.htm", "");
    }
}
