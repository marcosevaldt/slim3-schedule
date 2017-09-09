<?php

/* interface/home.twig */
class __TwigTemplate_50fd02c154f67a27757ac1bbe7d2b182694ee3e00af8b77336101772ca2797f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>MEPanel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  ";
        // line 14
        $this->loadTemplate("interface/librarycss.twig", "interface/home.twig", 14)->display($context);
        // line 15
        echo "

</head>

<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  ";
        // line 22
        $this->loadTemplate("interface/header.twig", "interface/home.twig", 22)->display($context);
        // line 23
        echo "  ";
        $this->loadTemplate("interface/aside.twig", "interface/home.twig", 23)->display($context);
        // line 24
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "  ";
        $this->loadTemplate("interface/controlsidebar.twig", "interface/home.twig", 25)->display($context);
        // line 26
        echo "


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

";
        // line 35
        $this->loadTemplate("interface/libraryjs.twig", "interface/home.twig", 35)->display($context);
        // line 36
        echo "
</body>
</html>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "interface/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  70 => 36,  68 => 35,  57 => 26,  54 => 25,  51 => 24,  48 => 23,  46 => 22,  37 => 15,  35 => 14,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>MEPanel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  {% include 'interface/librarycss.twig' %}


</head>

<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  {% include 'interface/header.twig' %}
  {% include 'interface/aside.twig' %}
  {% block content %} {% endblock %}
  {% include 'interface/controlsidebar.twig' %}



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

{% include 'interface/libraryjs.twig' %}

</body>
</html>
", "interface/home.twig", "/var/www/html/analista/app/templates/interface/home.twig");
    }
}
