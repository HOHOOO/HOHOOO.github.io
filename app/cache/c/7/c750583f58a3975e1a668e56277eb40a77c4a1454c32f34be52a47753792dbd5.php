<?php

/* block/comments.html */
class __TwigTemplate_c750583f58a3975e1a668e56277eb40a77c4a1454c32f34be52a47753792dbd5 extends Twig_Template
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
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array())) {
            // line 2
            echo "<div id=\"comments\" class=\"clearfix\">
\t<div id=\"respond\" class=\"comment-respond\">
\t\t<div id=\"disqus_thread\"></div>
\t\t<script>
\t\t   var disqus_config = function () {
\t\t   this.page.url = location.href;
\t\t   this.page.identifier = '";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "blogId", array()), "html", null, true);
            echo "';
\t\t   };
\t\t(function() {
\t\t\tvar d = document, s = d.createElement('script');
\t\t\ts.src = '//";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array()), "html", null, true);
            echo ".disqus.com/embed.js';
\t\t\ts.setAttribute('data-timestamp', +new Date());
\t\t\t(d.head || d.body).appendChild(s);
\t\t})();
\t\t</script>
\t\t<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
\t</div><!-- #respond -->
</div>
";
        } elseif ($this->getAttribute(        // line 20
(isset($context["site"]) ? $context["site"] : null), "youyan", array())) {
            // line 21
            echo "<!-- UY BEGIN -->
<div id=\"uyan_frame\"></div>
<script type=\"text/javascript\" src=\"http://v2.uyan.cc/code/uyan.js?uid=";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "youyan", array()), "html", null, true);
            echo "\"></script>
<!-- UY END -->
";
        }
    }

    public function getTemplateName()
    {
        return "block/comments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  49 => 21,  47 => 20,  36 => 12,  29 => 8,  21 => 2,  19 => 1,);
    }
}
