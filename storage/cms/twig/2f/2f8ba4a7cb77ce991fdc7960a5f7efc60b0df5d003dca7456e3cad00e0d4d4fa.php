<?php

/* /home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/pagination.htm */
class __TwigTemplate_ce6468a1504bf08910b416cdaa38583ec614c4dc8c9ce88f85c9f52ff6330f15 extends Twig_Template
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
        if ($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "hasPages", array())) {
            // line 2
            echo "    ";
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "
";
        }
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if results.hasPages %}
    {{ results | raw }}
{% endif %}

", "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/pagination.htm", "");
    }
}
