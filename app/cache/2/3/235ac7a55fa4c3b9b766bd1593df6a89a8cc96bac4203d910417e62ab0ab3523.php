<?php

/* widget/text.html */
class __TwigTemplate_235ac7a55fa4c3b9b766bd1593df6a89a8cc96bac4203d910417e62ab0ab3523 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "text", array()), "intro")) {
            // line 2
            echo "<aside class=\"widget widget_text sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "text", array()), "title", array()), "html", null, true);
            echo "</h3>
\t<div class=\"textwidget\">
\t\t<p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "text", array()), "intro", array()), "html", null, true);
            echo "</p>
\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/text.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
