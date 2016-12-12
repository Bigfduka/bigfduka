<?php

/* /home/ubuntu/workspace/themes/ad/layouts/default.htm */
class __TwigTemplate_57ba027512afca07c003ebe974de4752dced4e254dc3d294b2b6bce6b05f99ea extends Twig_Template
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
        echo "<!DOCTYPE html>
<html><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Your Landing Page Title</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">

\t<!--pageMeta-->

\t<!-- Lib CSS -->
\t<link href=\"//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/minify/rgen_min.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/configstyle.css?rgDPy\" id=\"config_style");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css\" rel=\"stylesheet");
        echo "\">

\t<!-- Favicons -->
\t<link rel=\"icon\" href=\"assets/images/favicons/favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"images/favicons/apple-touch-icon.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/favicons/apple-touch-icon-72x72.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/favicons/apple-touch-icon-114x114.png\">

\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
\t<!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t<!--[if IE 9 ]><script src=\"js/ie-matchmedia.js\"></script><![endif]-->

</head>
<body>
<div id=\"page\">
";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("futer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/minify/rgen_min.js");
        echo "\"></script>
<script async=\"\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/rgen.js");
        echo "\"></script>


</body></html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  79 => 41,  72 => 36,  68 => 35,  66 => 34,  62 => 33,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Your Landing Page Title</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">

\t<!--pageMeta-->

\t<!-- Lib CSS -->
\t<link href=\"//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800\" rel=\"stylesheet\">
\t<link href=\"{{'assets/minify/rgen_min.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/configstyle.css?rgDPy\" id=\"config_style'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/custom.css\" rel=\"stylesheet'|theme}}\">

\t<!-- Favicons -->
\t<link rel=\"icon\" href=\"assets/images/favicons/favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"images/favicons/apple-touch-icon.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/favicons/apple-touch-icon-72x72.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/favicons/apple-touch-icon-114x114.png\">

\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
\t<!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t<!--[if IE 9 ]><script src=\"js/ie-matchmedia.js\"></script><![endif]-->

</head>
<body>
<div id=\"page\">
{%partial 'header'%}
{%page%}
{%partial 'futer'%}

</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src=\"{{'assets/minify/rgen_min.js'|theme}}\"></script>
<script async=\"\"{{'assets/js/rgen.js'|theme}}\"></script>


</body></html>", "/home/ubuntu/workspace/themes/ad/layouts/default.htm", "");
    }
}
