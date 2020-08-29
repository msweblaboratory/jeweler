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

/* /home/msweblab/public_html/themes/jeweler/partials/Blog/blog_post.htm */
class __TwigTemplate_110de6d380fbe67172b1005494e783c1ad66a953b670b536aca03686531f2511 extends \Twig\Template
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
";
        // line 3
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 3);
        // line 4
        echo "

<!-- Blog -->
<section class=\"section\" id=\"blog\">
    <div class=\"container\">

<div class=\"blog\">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 16), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                    <img class=\"blog__photo\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 21), "d"), "html", null, true);
            echo "</div>
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 22), "M"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
            </div>
            <div class=\"blog__text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 34), "html", null, true);
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
        // line 43
        echo "
</div><!-- /.blog -->
    </div><!-- /.container -->
</section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Blog/blog_post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  110 => 34,  102 => 29,  95 => 27,  87 => 22,  83 => 21,  79 => 19,  68 => 17,  64 => 16,  60 => 15,  56 => 13,  52 => 12,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% set posts = blogPosts.posts %}


<!-- Blog -->
<section class=\"section\" id=\"blog\">
    <div class=\"container\">

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

</div><!-- /.blog -->
    </div><!-- /.container -->
</section>", "/home/msweblab/public_html/themes/jeweler/partials/Blog/blog_post.htm", "");
    }
}
