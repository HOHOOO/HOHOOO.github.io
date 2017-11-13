<?php

/* blog/header.html */
class __TwigTemplate_a03a4cfb2bc18540aab97a5d2b06ed25ecfcca0c724b96dae7284f5ecf87285f extends Twig_Template
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
        echo "<header class=\"entry-header\">
\t<h1 class=\"post-title\"><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "siteURL", array()), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "top", array()) != 0)) {
            echo "<span class=\"top\">[置顶]</span>";
        }
        echo "</a></h1>
\t<div class=\"entry-meta\">
\t\t<time class=\"post-date\"><i class=\"fa fa-clock-o\"></i>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date", array()), "html", null, true);
        echo "</time>
\t\t";
        // line 5
        if ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array())) {
            // line 6
            echo "\t\t<span class=\"seperator\">/</span>
\t    <span><i class=\"fa fa-user\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array()), "html", null, true);
            echo "</span>
\t    ";
        }
        // line 9
        echo "\t</div><!-- .entry-meta -->
</header><!-- .entry-header -->
";
    }

    public function getTemplateName()
    {
        return "blog/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  42 => 7,  39 => 6,  37 => 5,  33 => 4,  22 => 2,  19 => 1,);
    }
}
