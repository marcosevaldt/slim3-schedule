<?php

/* interface/header.twig */
class __TwigTemplate_ab8c6541268264b8d456a5d88cbfb8fa71aaba1d34a0a922810d7c957fbb6514 extends Twig_Template
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
        echo "<!DOCTYPE html>

<!-- Main Header -->
<header class=\"main-header\">

  <!-- Logo -->
  <a href=\"#\" class=\"logo\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><b>M</b>P</span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg\"><b>ME</b>Panel</span>
  </a>

  <!-- Header Navbar -->
  <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">

        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marcos <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login.destroy"), "html", null, true);
        echo "\">Sair</a></li>
            </ul>
          </li>
        </ul>

      </ul>
    </div>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "interface/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<!-- Main Header -->
<header class=\"main-header\">

  <!-- Logo -->
  <a href=\"#\" class=\"logo\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><b>M</b>P</span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg\"><b>ME</b>Panel</span>
  </a>

  <!-- Header Navbar -->
  <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">

        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marcos <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"{{path_for('login.destroy')}}\">Sair</a></li>
            </ul>
          </li>
        </ul>

      </ul>
    </div>
  </nav>
</header>
", "interface/header.twig", "/var/www/html/analista/app/templates/interface/header.twig");
    }
}
