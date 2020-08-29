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

/* /home/msweblab/public_html/themes/jeweler/layouts/empty.htm */
class __TwigTemplate_764a07b29495a0d23cde4c07408111e5c610b5c66619575ac8db69ce02952fe5 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 5
        echo "
";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/layouts/empty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% partial 'Site/head' %}

{%page%}

{% partial 'Site/scripts' %}

    </body>
</html>", "/home/msweblab/public_html/themes/jeweler/layouts/empty.htm", "");
    }
}
