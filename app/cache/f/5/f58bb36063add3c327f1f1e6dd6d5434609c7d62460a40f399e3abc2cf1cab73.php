<?php

/* block/footer.html */
class __TwigTemplate_f58bb36063add3c327f1f1e6dd6d5434609c7d62460a40f399e3abc2cf1cab73 extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"copyright quest-row\" role=\"contentinfo\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 copyright-text\">
\t\t\t\t<a href=\"https://github.com/jockchou/gitblog\">Proudly powered by Gitblog</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 social-icon-container clearfix\">
\t\t\t\t<ul></ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- end row -->
\t</div>
\t<!-- end container -->
</footer>";
    }

    public function getTemplateName()
    {
        return "block/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
