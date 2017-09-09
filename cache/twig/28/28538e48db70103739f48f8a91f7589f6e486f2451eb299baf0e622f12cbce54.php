<?php

/* home/index.twig */
class __TwigTemplate_146f43551c86e4ea700813bb845da8d97255606b597d00abbe8c1009cfde198a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("interface/home.twig", "home/index.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "interface/home.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Home Page
        <small>página inicial</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      ";
        // line 17
        $this->loadTemplate("error/error.twig", "home/index.twig", 17)->display($context);
        // line 18
        echo "      ";
        $this->loadTemplate("flash/flash.twig", "home/index.twig", 18)->display($context);
        // line 19
        echo "
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  48 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'interface/home.twig' %}
{% block content %}

<!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Home Page
        <small>página inicial</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      {% include 'error/error.twig' %}
      {% include 'flash/flash.twig' %}

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{% endblock %}
", "home/index.twig", "/var/www/html/slim3-skeleton/app/templates/home/index.twig");
    }
}
