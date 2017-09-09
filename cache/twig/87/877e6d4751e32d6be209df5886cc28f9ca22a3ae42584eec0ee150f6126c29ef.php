<?php

/* interface/aside.twig */
class __TwigTemplate_24aff52ba57ff1fc1c8c8b859b40b095547e3d181c96882a1c7463c5ea532c67 extends Twig_Template
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

<!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">Menu</li>

        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-circle\"></i> <span>Menu 1</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\">Submenu 1</a></li>
            <li><a href=\"#\">Submenu 2</a></li>
            <li><a href=\"#\">Submenu 3</a></li>
          </ul>
        </li>

        <li class=\"active\"><a href=\"#\"><i class=\"fa fa-circle\"></i> <span>Menu 2</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
";
    }

    public function getTemplateName()
    {
        return "interface/aside.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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

<!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">Menu</li>

        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-circle\"></i> <span>Menu 1</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\">Submenu 1</a></li>
            <li><a href=\"#\">Submenu 2</a></li>
            <li><a href=\"#\">Submenu 3</a></li>
          </ul>
        </li>

        <li class=\"active\"><a href=\"#\"><i class=\"fa fa-circle\"></i> <span>Menu 2</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
", "interface/aside.twig", "/var/www/html/analista/app/templates/interface/aside.twig");
    }
}
