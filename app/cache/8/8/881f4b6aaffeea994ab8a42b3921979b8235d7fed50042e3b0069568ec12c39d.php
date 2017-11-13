<?php

/* widget/recent.html */
class __TwigTemplate_881f4b6aaffeea994ab8a42b3921979b8235d7fed50042e3b0069568ec12c39d extends Twig_Template
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
        if ($this->getAttribute((isset($context["recentBlogList"]) ? $context["recentBlogList"] : null), 0)) {
            // line 2
            echo "<aside class=\"widget widget_recent_entries sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">近期文章</h3>
\t<ul>
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentBlogList"]) ? $context["recentBlogList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 6
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "siteURL", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/recent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
