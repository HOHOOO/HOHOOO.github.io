<?php

/* block/breadcrumbs.html */
class __TwigTemplate_cfa6f3ef805683ecc85f165e46b6dc80ebd38c99b20816eff2d7a6472bcd3955 extends Twig_Template
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
        echo "<div class=\"quest-row\" id=\"title-container\">
\t<div class=\"container title-container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 5
        if (((isset($context["pageName"]) ? $context["pageName"] : null) == "search")) {
            // line 6
            echo "\t\t\t\t<h3>搜索：";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
            echo "</h3>
\t\t\t\t";
        } else {
            // line 8
            echo "\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navObj"]) ? $context["navObj"] : null), "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t";
        // line 14
        if (((isset($context["pageName"]) ? $context["pageName"] : null) == "search")) {
            // line 15
            echo "\t\t\t\t\t<li>search</li>
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navObj"]) ? $context["navObj"] : null), "name", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "block/breadcrumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  50 => 15,  48 => 14,  44 => 13,  39 => 10,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
