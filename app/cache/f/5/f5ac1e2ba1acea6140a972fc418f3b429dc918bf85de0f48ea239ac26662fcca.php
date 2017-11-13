<?php

/* detail.html */
class __TwigTemplate_f5ac1e2ba1acea6140a972fc418f3b429dc918bf85de0f48ea239ac26662fcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block/base.html", "detail.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo "|";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "keywords", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(strtr($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "summary", array()), array("
" => ""))), 0, 140), "html", null, true);
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("block/header.html", "detail.html", 10)->display($context);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("block/content.html", "detail.html", 14)->display($context);
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("block/footer.html", "detail.html", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  72 => 18,  67 => 14,  64 => 13,  59 => 10,  56 => 9,  49 => 7,  41 => 5,  33 => 3,  11 => 1,);
    }
}
