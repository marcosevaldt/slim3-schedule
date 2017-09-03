<?php

/* home/index.twig */
class __TwigTemplate_0cc74eab17935d79f273f17665663a041b8ec9d2bcb84d26733d497cd59f4c19 extends Twig_Template
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
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
        <li class=\"active\">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

      

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
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
        <li class=\"active\">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{% endblock %}
", "home/index.twig", "/var/www/html/consult/app/templates/home/index.twig");
    }
}
