<?php

/* /home/ubuntu/workspace/themes/ad/pages/search.htm */
class __TwigTemplate_85c9e33827cfb3919ab99c94ace3730d683df591ed06b97bc33ed7b228abedba extends Twig_Template
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
        echo "<section class=\"content-section align-c content-section-9\">
\t<div class=\"container\">
\t\t<form action=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("search");
        echo "\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
    
</form>
<h2>Search results for ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["searchResults"]) ? $context["searchResults"] : null), "query", array()), "html", null, true);
        echo "</h2>

";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t<div class= row>
\t\t<div class ='col-md-4'>
\t\t<hr class=\"mr-b-40\">
\t\t    ";
        // line 14
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 15
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 16
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 17
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 18
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 19
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 20
        echo "
<ul class=\"record-list\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 23
            echo "        <li>
            ";
            // line 25
            echo "            ";
            ob_start();
            // line 26
            echo "                ";
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 27
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter((isset($context["detailsPage"]) ? $context["detailsPage"] : null), array((isset($context["detailsUrlParameter"]) ? $context["detailsUrlParameter"] : null) => $this->getAttribute($context["record"], (isset($context["detailsKeyColumn"]) ? $context["detailsKeyColumn"] : null))));
                echo "\">
                ";
            }
            // line 29
            echo "
                <a href=\"/category/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "</a>

                ";
            // line 32
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 33
                echo "                    </a>
                ";
            }
            // line 35
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 36
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>

";
        // line 42
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 43
            echo "    <ul class=\"pagination\">
        ";
            // line 44
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 45
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 50
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
        ";
            // line 54
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 55
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 57
            echo "    </ul>
";
        }
        // line 59
        echo "\t\t</div>
\t
\t\t<div class=\"col-md-8\">
\t\t
\t\t<hr class=\"mr-b-40\">
\t\t<div class=\"row eqh gt40 fs-equalize-element\">
\t\t\t
\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 67
            echo "\t\t\t<a href='/film/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "slug", array()), "html", null, true);
            echo "'>
\t\t\t
\t\t\t<div class=\"col-md-3\" style=\"height: 373px;\">
\t\t\t\t<div class=\"info-box info-box8\">
\t\t\t
\t\t\t\t\t<div class=\"img\"><img src=\"";
            // line 72
            echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($context["film"], "image", array()));
            echo "\" class=\"img-responsive\" alt=\"image\"></div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<h2 class=\"hd\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "name", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<p class=\"sub-txt\">";
            // line 75
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["film"], "description", array()), 0, 50), "html", null, true);
            echo "...</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>
\t\t</div>
\t</div>
\t</div><!-- /.container -->
</section><!-- /.content-section --><!-- Slider -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 81,  201 => 75,  197 => 74,  192 => 72,  183 => 67,  179 => 66,  170 => 59,  166 => 57,  160 => 55,  158 => 54,  155 => 53,  144 => 50,  139 => 49,  135 => 48,  132 => 47,  126 => 45,  124 => 44,  121 => 43,  119 => 42,  115 => 40,  106 => 38,  100 => 36,  97 => 35,  93 => 33,  91 => 32,  84 => 30,  81 => 29,  75 => 27,  72 => 26,  69 => 25,  66 => 23,  61 => 22,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  47 => 15,  45 => 14,  40 => 11,  36 => 10,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content-section align-c content-section-9\">
\t<div class=\"container\">
\t\t<form action=\"{{ 'search' | page }}\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
    
</form>
<h2>Search results for {{ searchResults.query }}</h2>

{% component 'searchResults' %}
\t<div class= row>
\t\t<div class ='col-md-4'>
\t\t<hr class=\"mr-b-40\">
\t\t    {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <a href=\"/category/{{record.slug}}\">{{ attribute(record, displayColumn) }}</a>

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
\t\t</div>
\t
\t\t<div class=\"col-md-8\">
\t\t
\t\t<hr class=\"mr-b-40\">
\t\t<div class=\"row eqh gt40 fs-equalize-element\">
\t\t\t
\t\t\t{%for film in films%}
\t\t\t<a href='/film/{{film.slug}}'>
\t\t\t
\t\t\t<div class=\"col-md-3\" style=\"height: 373px;\">
\t\t\t\t<div class=\"info-box info-box8\">
\t\t\t
\t\t\t\t\t<div class=\"img\"><img src=\"{{film.image|media}}\" class=\"img-responsive\" alt=\"image\"></div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<h2 class=\"hd\">{{film.name}}</h2>
\t\t\t\t\t\t<p class=\"sub-txt\">{{film.description|slice(0,50)}}...</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
</a>
{%endfor%}
    </div>
\t\t</div>
\t</div>
\t</div><!-- /.container -->
</section><!-- /.content-section --><!-- Slider -->", "/home/ubuntu/workspace/themes/ad/pages/search.htm", "");
    }
}
