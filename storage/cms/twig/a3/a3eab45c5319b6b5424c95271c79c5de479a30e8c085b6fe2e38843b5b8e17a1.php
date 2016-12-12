<?php

/* /home/ubuntu/workspace/themes/ad/pages/film.htm */
class __TwigTemplate_9a4aa3bb0c7817ce272df0f17f1d2f8f68dce350b1ead57bfecee51992e5f46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 6
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "</h1>
    <h5>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "discription", array()), "html", null, true);
            echo "</h5>
    <img src=\"";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()));
            echo "\" alt=\"\">
    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link", array()), "html", null, true);
            echo "\"><h3>Download</h3></a>
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 11
                echo "    
    ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "genre_name", array()), "html", null, true);
                echo "
    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/pages/film.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  54 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h1>{{ attribute(record, displayColumn) }}</h1>
    <h5>{{ record.discription }}</h5>
    <img src=\"{{record.image|media}}\" alt=\"\">
    <a href=\"{{record.link}}\"><h3>Download</h3></a>
    {%for genre in record.genres%}
    
    {{genre.genre_name}}
    
    {%endfor%}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/home/ubuntu/workspace/themes/ad/pages/film.htm", "");
    }
}
