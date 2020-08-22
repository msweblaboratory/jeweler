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

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/categories_blog.htm */
class __TwigTemplate_acee1d26a834eed33eb8b7b7b3e9de84906d56a0d1ad62e93278b81feb2de7b1 extends \Twig\Template
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

    <div class=\"section__header\">
        <h3 class=\"section__suptitle\">Our stories</h3>
        <h2 class=\"section__title\">Latest blog</h2>
    </div>

<div class=\"blog\">

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 21), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "                    <img class=\"blog__photo\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 26), "d"), "html", null, true);
            echo "</div>
                ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 27), "M"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
            </div>
            <div class=\"blog__text\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 39), "html", null, true);
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
        // line 48
        echo "
</div><!-- /.blog -->
    </div><!-- /.container -->
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/categories_blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  115 => 39,  107 => 34,  100 => 32,  92 => 27,  88 => 26,  84 => 24,  73 => 22,  69 => 21,  65 => 20,  61 => 18,  57 => 17,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% set posts = blogPosts.posts %}


<!-- Blog -->
<section class=\"section\" id=\"blog\">
    <div class=\"container\">

    <div class=\"section__header\">
        <h3 class=\"section__suptitle\">Our stories</h3>
        <h2 class=\"section__title\">Latest blog</h2>
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

</div><!-- /.blog -->
    </div><!-- /.container -->
</section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/categories_blog.htm", "");
    }
}
