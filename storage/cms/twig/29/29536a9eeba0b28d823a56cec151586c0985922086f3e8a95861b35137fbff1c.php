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

/* /home/msweblab/public_html/plugins/vimirlab/instagram/components/hashfeed/default.htm */
class __TwigTemplate_6e35c2305e4ccfb20edb64ad747466d211a200c1f0ceeaa256b13e67485ae08c extends \Twig\Template
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
        $context["check_error_message2"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "check_error_messages", [], "any", false, false, false, 1);
        // line 2
        $context["check_error_message1"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "check_error_message", [], "any", false, false, false, 2);
        // line 3
        echo "\t<p>";
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</p>
\t<p>";
        // line 4
        echo twig_escape_filter($this->env, ($context["check_error_message1"] ?? null), "html", null, true);
        echo "</p>
\t<p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["check_error_message2"] ?? null), "html", null, true);
        echo "</p>
";
        // line 6
        if ((($context["slider"] ?? null) == "add")) {
            // line 7
            echo "\t<div class=\"owl-carousel owl-theme insta-slider owl-loaded owl-drag\">
\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "data", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 9
                echo "\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "error_message", [], "any", false, false, false, 9), "html", null, true);
                echo "
\t\t";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 10) == "image")) {
                    // line 11
                    echo "\t\t\t<div class=\"item\">
\t\t\t\t<a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 12), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t\t\t<img src=\"";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "images", [], "any", false, false, false, 13), "low_resolution", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
                    echo "\">
\t\t\t\t</a>
\t\t\t</div>
\t\t";
                }
                // line 17
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</div>
";
        } elseif ((        // line 19
($context["slider"] ?? null) == "no")) {
            // line 20
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "data", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 21
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 21) == "image")) {
                    // line 22
                    echo "\t\t\t<div class=\"insta-img\">
\t\t\t\t<a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 23), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t\t\t<img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "images", [], "any", false, false, false, 24), "low_resolution", [], "any", false, false, false, 24), "url", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" class=\"img-responsive\">
\t\t\t\t</a>
\t\t\t</div>
\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 27
$context["row"], "type", [], "any", false, false, false, 27) == "video")) {
                    echo "\t
\t\t\t<a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" target=\"_blank\">\t
\t\t\t\t<video controls>
\t\t\t\t\t<source src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "videos", [], "any", false, false, false, 30), "low_resolution", [], "any", false, false, false, 30), "url", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" 
\t\t\t\t\ttype=\"video/mp4\"/>
\t\t\t\t</video>
\t\t\t</a>
\t\t";
                }
                // line 35
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/plugins/vimirlab/instagram/components/hashfeed/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  125 => 30,  120 => 28,  116 => 27,  110 => 24,  106 => 23,  103 => 22,  100 => 21,  95 => 20,  93 => 19,  90 => 18,  84 => 17,  77 => 13,  73 => 12,  70 => 11,  68 => 10,  63 => 9,  59 => 8,  56 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set check_error_message2 = __SELF__.check_error_messages %}
{% set check_error_message1 = __SELF__.check_error_message %}
\t<p>{{ error_message }}</p>
\t<p>{{ check_error_message1 }}</p>
\t<p>{{ check_error_message2 }}</p>
{% if slider == 'add' %}
\t<div class=\"owl-carousel owl-theme insta-slider owl-loaded owl-drag\">
\t{% for row in posts.data %}
\t{{ row.error_message }}
\t\t{% if row.type == 'image' %}
\t\t\t<div class=\"item\">
\t\t\t\t<a href=\"{{ row.link }}\" target=\"_blank\">
\t\t\t\t\t<img src=\"{{ row.images.low_resolution.url }}\">
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}
\t{% endfor %}
\t</div>
{% elseif slider == 'no' %}
\t{% for row in posts.data %}
\t\t{% if row.type == 'image' %}
\t\t\t<div class=\"insta-img\">
\t\t\t\t<a href=\"{{ row.link }}\" target=\"_blank\">
\t\t\t\t\t<img src=\"{{ row.images.low_resolution.url }}\" class=\"img-responsive\">
\t\t\t\t</a>
\t\t\t</div>
\t\t{% elseif row.type == 'video' %}\t
\t\t\t<a href=\"{{ row.link }}\" target=\"_blank\">\t
\t\t\t\t<video controls>
\t\t\t\t\t<source src=\"{{ row.videos.low_resolution.url }}\" 
\t\t\t\t\ttype=\"video/mp4\"/>
\t\t\t\t</video>
\t\t\t</a>
\t\t{% endif %}
\t{% endfor %}
{% endif %}", "/home/msweblab/public_html/plugins/vimirlab/instagram/components/hashfeed/default.htm", "");
    }
}
