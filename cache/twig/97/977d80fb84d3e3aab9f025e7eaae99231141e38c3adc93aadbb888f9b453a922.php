<?php

/* login/index.twig */
class __TwigTemplate_79c5fbb1375ac84f63428ae61e34d8cd0cf2aeb5b19df1af32164d7f30fdfb9d extends Twig_Template
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
        $this->loadTemplate("interface/librarycss.twig", "login/index.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("register/navbar.twig", "login/index.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"login-box\">
  ";
        // line 5
        $this->loadTemplate("error/error.twig", "login/index.twig", 5)->display($context);
        // line 6
        echo "  ";
        $this->loadTemplate("flash/danger.twig", "login/index.twig", 6)->display($context);
        // line 7
        echo "  <div class=\"login-box-body\">

    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login.store"), "html", null, true);
        echo "\" method=\"post\">

      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"senha\" class=\"form-control\" placeholder=\"Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"row\">
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Acessar</button>
        </div>
        <!-- /.col -->
      </div>

    </form>

  </div>
  <!-- /.login-box-body -->

</div>

<!-- /.login-box -->
";
        // line 37
        $this->loadTemplate("interface/libraryjs.twig", "login/index.twig", 37)->display($context);
    }

    public function getTemplateName()
    {
        return "login/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 37,  36 => 9,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'interface/librarycss.twig' %}
{% include 'register/navbar.twig' %}

<div class=\"login-box\">
  {% include 'error/error.twig' %}
  {% include 'flash/danger.twig' %}
  <div class=\"login-box-body\">

    <form action=\"{{ path_for('login.store')}}\" method=\"post\">

      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"senha\" class=\"form-control\" placeholder=\"Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"row\">
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Acessar</button>
        </div>
        <!-- /.col -->
      </div>

    </form>

  </div>
  <!-- /.login-box-body -->

</div>

<!-- /.login-box -->
{% include 'interface/libraryjs.twig' %}
", "login/index.twig", "/var/www/html/analista/app/templates/login/index.twig");
    }
}
