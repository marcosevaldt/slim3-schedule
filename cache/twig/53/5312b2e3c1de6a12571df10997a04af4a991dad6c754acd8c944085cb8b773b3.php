<?php

/* interface/librarycss.twig */
class __TwigTemplate_50db4fec8c93d5028d6f880c808ba9a9f01c86a4f667cf72e0572e800d4d4e72 extends Twig_Template
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

<!-- Bootstrap 3.3.6 -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
<!-- Responsive Bootstrap -->
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
<!-- Select2 -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.min.css\">
<!-- iCheck for checkboxes and radio inputs -->
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/all.css\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/dist/css/AdminLTE.min.css\">
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect.-->
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/dist/css/skins/skin-blue.min.css\">
<!-- DatePicker -->
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
";
    }

    public function getTemplateName()
    {
        return "interface/librarycss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  54 => 22,  47 => 18,  42 => 16,  37 => 14,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<!-- Bootstrap 3.3.6 -->
<link rel=\"stylesheet\" href=\"{{base_url()}}/bootstrap/css/bootstrap.min.css\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
<!-- Responsive Bootstrap -->
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
<!-- Select2 -->
<link rel=\"stylesheet\" href=\"{{base_url()}}/plugins/select2/select2.min.css\">
<!-- iCheck for checkboxes and radio inputs -->
<link rel=\"stylesheet\" href=\"{{base_url()}}/plugins/iCheck/all.css\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"{{base_url()}}/dist/css/AdminLTE.min.css\">
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect.-->
<link rel=\"stylesheet\" href=\"{{base_url()}}/dist/css/skins/skin-blue.min.css\">
<!-- DatePicker -->
<link rel=\"stylesheet\" href=\"{{base_url()}}/plugins/datepicker/datepicker3.css\">
", "interface/librarycss.twig", "/var/www/html/slim3-skeleton/app/templates/interface/librarycss.twig");
    }
}
