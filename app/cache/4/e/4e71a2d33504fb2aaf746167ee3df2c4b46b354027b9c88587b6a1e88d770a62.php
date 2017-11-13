<?php

/* blog/content.html */
class __TwigTemplate_4e71a2d33504fb2aaf746167ee3df2c4b46b354027b9c88587b6a1e88d770a62 extends Twig_Template
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
        echo "<div class=\"entry-content\">
\t";
        // line 2
        if (((isset($context["pageName"]) ? $context["pageName"] : null) == "blog")) {
            // line 3
            echo "\t";
            echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "content", array());
            echo "
\t";
        } else {
            // line 5
            echo "\t";
            echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "summary", array());
            echo "
\t";
        }
        // line 7
        echo "</div><!-- .entry-content -->";
    }

    public function getTemplateName()
    {
        return "blog/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
