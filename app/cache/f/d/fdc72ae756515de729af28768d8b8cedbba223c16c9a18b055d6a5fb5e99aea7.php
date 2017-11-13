<?php

/* block/content.html */
class __TwigTemplate_fdc72ae756515de729af28768d8b8cedbba223c16c9a18b055d6a5fb5e99aea7 extends Twig_Template
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
        echo "<div id=\"content\">
\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area single col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t";
        // line 7
        $this->loadTemplate("blog/blog.html", "block/content.html", 7)->display($context);
        // line 8
        echo "            \t\t\t";
        $this->loadTemplate("block/comments.html", "block/content.html", 8)->display($context);
        // line 9
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t<!-- #primary -->
\t\t\t\t";
        // line 13
        $this->loadTemplate("block/secondary.html", "block/content.html", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div>";
    }

    public function getTemplateName()
    {
        return "block/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  38 => 13,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
