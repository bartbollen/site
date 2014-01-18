<?php

/* BartSiteBundle:Default:staticValues.html.twig */
class __TwigTemplate_7a0949a7c0aaf6748f1851a1875d3b8daff94b15b5f14f3ee78857051d5dbedc extends Twig_Template
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
        echo "<nav class=\"top-bar\" data-topbar>
    <ul class=\"title-area\">
      <li class=\"name\">
        <h1><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["homepage_url"]) ? $context["homepage_url"] : $this->getContext($context, "homepage_url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["topbarTitle"]) ? $context["topbarTitle"] : $this->getContext($context, "topbarTitle")), "html", null, true);
        echo "</a></h1>
      </li>
    </ul>

    <section class=\"top-bar-section\">
      <!-- Right Nav Section -->
      <ul class=\"right\">
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["addmovie_url"]) ? $context["addmovie_url"] : $this->getContext($context, "addmovie_url")), "html", null, true);
        echo "\">Add movie</a></li>
        <li class=\"has-dropdown\">
          <a href=\"#\">Movies</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["addmovie_url"]) ? $context["addmovie_url"] : $this->getContext($context, "addmovie_url")), "html", null, true);
        echo "\">Add a movie</a></li>
            <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["addmovie_url"]) ? $context["addmovie_url"] : $this->getContext($context, "addmovie_url")), "html", null, true);
        echo "\">Add a genre</a></li>
          </ul>
        </li>
      </ul>

      <!-- Left Nav Section -->
      <ul class=\"left\">
        <li><a href=\"#\">Left Nav Button</a></li>
      </ul>
    </section>
</nav>";
    }

    public function getTemplateName()
    {
        return "BartSiteBundle:Default:staticValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  43 => 15,  36 => 11,  24 => 4,  19 => 1,);
    }
}
