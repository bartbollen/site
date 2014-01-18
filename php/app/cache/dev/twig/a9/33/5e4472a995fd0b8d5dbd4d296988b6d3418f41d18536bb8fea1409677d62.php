<?php

/* BartSiteBundle:Default:index.html.twig */
class __TwigTemplate_a9335e4472a995fd0b8d5dbd4d296988b6d3418f41d18536bb8fea1409677d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
\t<head>
\t\t<!-- Designed by Bart Bollen -->
\t\t
\t\t<meta charset=\"utf-8\" />

\t\t<meta name=\"viewport\" content=\"width=device-width\" />

                ";
        // line 10
        $this->displayBlock('headTitle', $context, $blocks);
        // line 12
        echo "                
                ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "\t\t
\t</head>
        <body>
            ";
        // line 26
        echo (isset($context["topbar"]) ? $context["topbar"] : $this->getContext($context, "topbar"));
        echo "             
            <br>
            <div class=\"row\">
                <div class=\"large-12 columns\">
                    ";
        // line 30
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
                </div>
            </div>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/js/foundation.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script>
            \$(document).foundation();
            </script>

        </body>
</html>";
    }

    // line 10
    public function block_headTitle($context, array $blocks = array())
    {
        // line 11
        echo "                ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "                    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/css/foundation.css"), "html", null, true);
        echo "\" />
                    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/css/foundation.min.css"), "html", null, true);
        echo "\" />
                    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/css/normalize.css"), "html", null, true);
        echo "\" />
                ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BartSite/js/modernizr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                ";
    }

    public function getTemplateName()
    {
        return "BartSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  102 => 20,  99 => 19,  93 => 16,  89 => 15,  84 => 14,  81 => 13,  77 => 11,  74 => 10,  63 => 33,  57 => 30,  50 => 26,  45 => 23,  43 => 19,  40 => 18,  38 => 13,  35 => 12,  33 => 10,  22 => 1,);
    }
}
