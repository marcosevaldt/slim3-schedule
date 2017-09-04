<?php

/* interface/libraryjs.twig */
class __TwigTemplate_93a5181cc3dd5561a6805b9c19c894bc1f34439ef9a894e527151b8e2726bf27 extends Twig_Template
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

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/bootstrap/js/bootstrap.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/dist/js/app.min.js\"></script>
<!-- ChartJS 1.0.1 -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/chartjs/Chart.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>

<script src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>

<script src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>

<!-- Select2 -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.full.min.js\"></script>
<!-- iCheck 1.0.1 -->
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/icheck.min.js\"></script>
<!-- Datepicker -->
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- Nossos Scripts-->
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/scripts/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "interface/libraryjs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  65 => 27,  60 => 25,  55 => 23,  41 => 12,  36 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=\"{{base_url()}}/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{base_url()}}/bootstrap/js/bootstrap.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"{{base_url()}}/dist/js/app.min.js\"></script>
<!-- ChartJS 1.0.1 -->
<script src=\"{{base_url()}}/plugins/chartjs/Chart.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>

<script src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>

<script src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>

<!-- Select2 -->
<script src=\"{{base_url()}}/plugins/select2/select2.full.min.js\"></script>
<!-- iCheck 1.0.1 -->
<script src=\"{{base_url()}}/plugins/iCheck/icheck.min.js\"></script>
<!-- Datepicker -->
<script src=\"{{base_url()}}/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- Nossos Scripts-->
<script src=\"{{base_url()}}/plugins/scripts/main.js\"></script>
", "interface/libraryjs.twig", "/var/www/html/slim3-skeleton/app/templates/interface/libraryjs.twig");
    }
}
