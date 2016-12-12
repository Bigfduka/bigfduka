<?php

/* /home/ubuntu/workspace/themes/ad/partials/header.htm */
class __TwigTemplate_925af743c89fff70e0eb1d878e1ed49ac8e2b37c7eb66aee97216f29bd1ad685 extends Twig_Template
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
        echo "<!-- Navigation -->

<nav class=\"nav-wrp nav-4 dark\">
\t<div class=\"container\">
\t\t
\t\t<div class=\"nav-header\">
\t\t\t<a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/phoenix.png");
        echo "\" alt=\"Brand logo\" class=\"\"></a>
\t\t\t<a class=\"nav-handle fs-touch-element\" data-nav=\".nav\"><i class=\"fa fa-bars\"></i></a>\t
\t\t</div>
\t\t
\t\t<div class=\"nav vm-item\">
\t\t\t<ul class=\"nav-links\">
\t\t\t\t<li role=\"menuitem\"><a href=\"/\">Главная</a></li>
\t\t\t\t<li class=\"\"><a href=\"#s2\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#s3\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#\" class=\"\"></a></li>
\t\t\t</ul>
\t\t\t<div class=\"nav-other\">
\t\t\t\t<!-- <span class=\"\"><a href=\"mailto:test@test.com\" class=\"\"><i class=\"fa fa-envelope-o\"></i> Вход</a></span> -->
\t\t\t</div>
\t\t</div><!-- /.nav --> 
\t\t
\t</div><!-- /.container --> 
</nav><!-- /.nav-wrp --><!-- Content -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->

<nav class=\"nav-wrp nav-4 dark\">
\t<div class=\"container\">
\t\t
\t\t<div class=\"nav-header\">
\t\t\t<a class=\"navbar-brand\" href=\"/\"><img src=\"{{'assets/images/phoenix.png'|theme}}\" alt=\"Brand logo\" class=\"\"></a>
\t\t\t<a class=\"nav-handle fs-touch-element\" data-nav=\".nav\"><i class=\"fa fa-bars\"></i></a>\t
\t\t</div>
\t\t
\t\t<div class=\"nav vm-item\">
\t\t\t<ul class=\"nav-links\">
\t\t\t\t<li role=\"menuitem\"><a href=\"/\">Главная</a></li>
\t\t\t\t<li class=\"\"><a href=\"#s2\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#s3\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#\" class=\"\"></a></li>
\t\t\t\t<li class=\"\"><a href=\"#\" class=\"\"></a></li>
\t\t\t</ul>
\t\t\t<div class=\"nav-other\">
\t\t\t\t<!-- <span class=\"\"><a href=\"mailto:test@test.com\" class=\"\"><i class=\"fa fa-envelope-o\"></i> Вход</a></span> -->
\t\t\t</div>
\t\t</div><!-- /.nav --> 
\t\t
\t</div><!-- /.container --> 
</nav><!-- /.nav-wrp --><!-- Content -->", "/home/ubuntu/workspace/themes/ad/partials/header.htm", "");
    }
}
