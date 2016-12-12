<?php

/* /home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/no-results.htm */
class __TwigTemplate_02eebc4472071d960652be3da6c01f10f72306875fa1314c044f0ece428a9826 extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "noResultsMessage", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/no-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>{{ __SELF__.noResultsMessage }}</p>", "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/no-results.htm", "");
    }
}
