<?php

/* BartSiteBundle:Default:indexValues.html.twig */
class __TwigTemplate_cac2c001bb9c364b0fd831d16d2e208045eb0ac4ff7f394f52ef561b9f2f9ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BartSiteBundle:Default:css_js.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BartSiteBundle:Default:css_js.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["topbar"]) ? $context["topbar"] : $this->getContext($context, "topbar")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BartSiteBundle:Default:indexValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  25 => 4,  20 => 1,);
    }
}
