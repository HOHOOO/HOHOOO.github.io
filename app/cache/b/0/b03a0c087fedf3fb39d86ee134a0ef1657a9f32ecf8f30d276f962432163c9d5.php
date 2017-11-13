<?php

/* widget/search.html */
class __TwigTemplate_b03a0c087fedf3fb39d86ee134a0ef1657a9f32ecf8f30d276f962432163c9d5 extends Twig_Template
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
        echo "<aside class=\"widget widget_search sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">搜索</h3>
\t<form class=\"search\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "search\" method=\"get\">
\t\t<fieldset>
\t\t\t<div class=\"text\">
\t\t\t\t<input name=\"keyword\" id=\"keyword\" type=\"text\" placeholder=\"Search ...\"/>
\t\t\t\t<button class=\"fa fa-search\">Search</button>
\t\t\t</div>
\t\t</fieldset>
\t</form>
</aside>
";
    }

    public function getTemplateName()
    {
        return "widget/search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
