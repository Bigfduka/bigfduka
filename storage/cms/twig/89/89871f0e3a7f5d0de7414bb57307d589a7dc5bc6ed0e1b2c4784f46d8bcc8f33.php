<?php

/* /home/ubuntu/workspace/themes/ad/partials/futer.htm */
class __TwigTemplate_2d7eeeffc5393e2e6440b06285c9302e96bbbd892faaf12be2a780cb11c047b5 extends Twig_Template
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
        echo "<section class=\"footer-section footer-section-5\">
\t<div class=\"container\">
\t\t<img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/phoenix.png");
        echo "\" alt=\"Company logo\" class=\"\">
\t\t<p class=\"\"> Правообладателям просьба писать вежливо и своевременно: mrbigfduka@gmail.com и мы отнесемся к вашей просьбе с пониманием.</p>
\t\t<hr class=\"\">
\t\t<p class=\"copyright\">© 2016, amadeuss</p>
\t</div>
</section><!-- ./Footer section --></div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/partials/futer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"footer-section footer-section-5\">
\t<div class=\"container\">
\t\t<img src=\"{{'assets/images/phoenix.png'|theme}}\" alt=\"Company logo\" class=\"\">
\t\t<p class=\"\"> Правообладателям просьба писать вежливо и своевременно: mrbigfduka@gmail.com и мы отнесемся к вашей просьбе с пониманием.</p>
\t\t<hr class=\"\">
\t\t<p class=\"copyright\">© 2016, amadeuss</p>
\t</div>
</section><!-- ./Footer section --></div>", "/home/ubuntu/workspace/themes/ad/partials/futer.htm", "");
    }
}
