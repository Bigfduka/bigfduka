<?php

/* /home/ubuntu/workspace/themes/ad/pages/category.htm */
class __TwigTemplate_cadc2608fa8d09e5d1c3ef872fbc1c3f50d8a3c6e92998e1364782dd80e72a5e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("amadeus");
        echo "\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
    
</form>
\t<div class= row>
\t\t<div class ='col-md-4'>
\t\t<hr class=\"mr-b-40\">
\t\t    ";
        // line 11
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 12
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 13
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 14
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 15
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 16
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 17
        echo "
<ul class=\"record-list\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "        <li>
            ";
            // line 22
            echo "            ";
            ob_start();
            // line 23
            echo "                ";
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 24
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter((isset($context["detailsPage"]) ? $context["detailsPage"] : null), array((isset($context["detailsUrlParameter"]) ? $context["detailsUrlParameter"] : null) => $this->getAttribute($context["record"], (isset($context["detailsKeyColumn"]) ? $context["detailsKeyColumn"] : null))));
                echo "\">
                ";
            }
            // line 26
            echo "
                 <a href=\"/category/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "</a>

                ";
            // line 29
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 30
                echo "                    </a>
                ";
            }
            // line 32
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 33
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</ul>

";
        // line 39
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 40
            echo "    <ul class=\"pagination\">
        ";
            // line 41
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 42
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 47
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
            // line 50
            echo "
        ";
            // line 51
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 52
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 54
            echo "    </ul>
";
        }
        // line 56
        echo "\t\t</div>
\t
\t\t<div class=\"col-md-8\">
\t\t
\t\t<hr class=\"mr-b-40\">
\t\t<div class=\"row eqh gt40 fs-equalize-element\">
\t\t";
        // line 62
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 63
        echo "        ";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 64
        echo "        ";
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 65
        echo "        
        ";
        // line 66
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 67
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "
        ";
        } else {
            // line 69
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
        ";
        }
        // line 71
        echo "                
               
           
\t\t\t
\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "movies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 76
            echo "\t\t
\t\t\t<a href='/film/";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "slug", array()), "html", null, true);
            echo "'>
\t\t\t
\t\t\t<div class=\"col-md-3\" style=\"height: 373px;\">
\t\t\t\t<div class=\"info-box info-box8\">
\t\t\t\t\t<div class=\"img\"><img src=\"";
            // line 81
            echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($context["film"], "image", array()));
            echo "\" class=\"img-responsive\" alt=\"image\"></div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<h2 class=\"hd\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "name", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<p class=\"sub-txt\">";
            // line 84
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
        // line 90
        echo "    </div>
\t\t</div>
\t</div>
\t</div><!-- /.container -->
</section><!-- /.content-section --><!-- Slider -->";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/ad/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 90,  221 => 84,  217 => 83,  212 => 81,  205 => 77,  202 => 76,  198 => 75,  192 => 71,  186 => 69,  180 => 67,  178 => 66,  175 => 65,  172 => 64,  169 => 63,  167 => 62,  159 => 56,  155 => 54,  149 => 52,  147 => 51,  144 => 50,  133 => 47,  128 => 46,  124 => 45,  121 => 44,  115 => 42,  113 => 41,  110 => 40,  108 => 39,  104 => 37,  95 => 35,  89 => 33,  86 => 32,  82 => 30,  80 => 29,  73 => 27,  70 => 26,  64 => 24,  61 => 23,  58 => 22,  55 => 20,  50 => 19,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  23 => 3,  19 => 1,);
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
\t\t<form action=\"{{ 'amadeus' | page }}\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
    
</form>
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
\t\t{% set record = builderDetails.record %}
        {% set displayColumn = builderDetails.displayColumn %}
        {% set notFoundMessage = builderDetails.notFoundMessage %}
        
        {% if record %}
            {{ attribute(record, displayColumn) }}
        {% else %}
            {{ notFoundMessage }}
        {% endif %}
                
               
           
\t\t\t
\t\t\t{%for film in record.movies%}
\t\t
\t\t\t<a href='/film/{{film.slug}}'>
\t\t\t
\t\t\t<div class=\"col-md-3\" style=\"height: 373px;\">
\t\t\t\t<div class=\"info-box info-box8\">
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
</section><!-- /.content-section --><!-- Slider -->", "/home/ubuntu/workspace/themes/ad/pages/category.htm", "");
    }
}
