<?php

/* block/base.html */
class __TwigTemplate_c734d3b003a667d22059d9c685b2a1107b4836d170ac951f3f59d10f963cce65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"home blog wide\">
\t<div id=\"page\" class=\"hfeed site\">
\t\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t\t";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "\t</div><!-- #page -->
\t<a href=\"#0\" class=\"cd-top\"><i class=\"fa fa-angle-up\"></i></a>

<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/wow/wow.js?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/js/quest.js?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\"></script>
\t
";
        // line 48
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "highlight", array())) {
            // line 49
            echo "<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/highlight.js/8.6/styles/default.min.css\">
<script src=\"//cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 53
        echo "
";
        // line 54
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "katex", array())) {
            // line 55
            echo "<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.css\">
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.js\"></script>
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/contrib/auto-render.min.js\"></script>
<script type=\"text/javascript\">
render_option = {
\tdelimiters: [
\t\t// 段落模式 \$\$...\$\$ \\[...\\]
\t\t{left: \"\$\$\", right: \"\$\$\", display: true},
\t\t{left: \"\\\\[\", right: \"\\\\]\", display: true},
\t\t// 行内模式 \$...\$ \\(...\\)
\t\t{left: \"\$\", right: \"\$\", display: false},
\t\t{left: \"\\\\(\", right: \"\\\\)\", display: false}
\t],
\tignoredTags: [\"script\", \"noscript\", \"style\", \"textarea\", \"pre\", \"code\"]
}
renderMathInElement(document.body, render_option);
</script>
";
        } elseif ($this->getAttribute(        // line 72
(isset($context["site"]) ? $context["site"] : null), "mathjax", array())) {
            // line 73
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"//cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 76
        echo "
</body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/css/style.css?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "theme/quest/css/customizer.css?ver=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "feed.xml\" />
\t
\t";
        // line 18
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "keywords", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html", null, true);
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "block/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 36,  234 => 35,  228 => 34,  222 => 9,  214 => 8,  208 => 7,  197 => 22,  190 => 18,  183 => 16,  177 => 15,  171 => 14,  164 => 12,  158 => 11,  153 => 9,  149 => 8,  145 => 7,  140 => 4,  137 => 3,  130 => 76,  125 => 73,  123 => 72,  104 => 55,  102 => 54,  99 => 53,  93 => 49,  91 => 48,  84 => 46,  78 => 45,  72 => 44,  66 => 43,  62 => 42,  58 => 41,  52 => 40,  47 => 37,  44 => 36,  41 => 35,  39 => 34,  32 => 29,  30 => 3,  26 => 1,);
    }
}
