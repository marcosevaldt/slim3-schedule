<?php

/* login/index.twig */
class __TwigTemplate_9d231af411edf84aec8cd32f4e3a92e666601d7a6235274d5a7586cb2dab7ab4 extends Twig_Template
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
  <div>
  ";
        // line 7
        $this->loadTemplate("error/error.twig", "login/index.twig", 7)->display($context);
        // line 8
        echo "  ";
        $this->loadTemplate("flash/flash.twig", "login/index.twig", 8)->display($context);
        // line 9
        echo "  </div>
  <div class=\"login-box-body\">

    <form action=\"";
        // line 12
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
        // line 40
        $this->loadTemplate("interface/libraryjs.twig", "login/index.twig", 40)->display($context);
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
        return array (  70 => 40,  39 => 12,  34 => 9,  31 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'interface/librarycss.twig' %}
{% include 'register/navbar.twig' %}


<div class=\"login-box\">
  <div>
  {% include 'error/error.twig' %}
  {% include 'flash/flash.twig' %}
  </div>
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
", "login/index.twig", "/var/www/html/slim3-skeleton/app/templates/login/index.twig");
    }
}
