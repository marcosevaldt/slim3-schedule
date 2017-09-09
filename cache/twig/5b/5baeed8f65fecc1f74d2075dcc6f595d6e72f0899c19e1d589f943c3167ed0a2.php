<?php

/* register/index.twig */
class __TwigTemplate_baa1e43c73365cd4b0053489914f5d090b210e19be5b38919f6561869955a2cf extends Twig_Template
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
        $this->loadTemplate("interface/librarycss.twig", "register/index.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("register/navbar.twig", "register/index.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"login-box\">
  ";
        // line 5
        $this->loadTemplate("error/error.twig", "register/index.twig", 5)->display($context);
        // line 6
        echo "  ";
        $this->loadTemplate("flash/danger.twig", "register/index.twig", 6)->display($context);
        // line 7
        echo "  <div class=\"login-box-body\">

    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register.store"), "html", null, true);
        echo "\" method=\"post\">

      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"senha\" class=\"form-control\" placeholder=\"Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"resenha\" class=\"form-control\" placeholder=\"Confirme a Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"row\">
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Registrar</button>
        </div>
        <!-- /.col -->
      </div>

    </form>

  </div>
  <!-- /.login-box-body -->

</div>

<!-- /.login-box -->
";
        // line 42
        $this->loadTemplate("interface/libraryjs.twig", "register/index.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "register/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  36 => 9,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'interface/librarycss.twig' %}
{% include 'register/navbar.twig' %}

<div class=\"login-box\">
  {% include 'error/error.twig' %}
  {% include 'flash/danger.twig' %}
  <div class=\"login-box-body\">

    <form action=\"{{ path_for('register.store')}}\" method=\"post\">

      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"senha\" class=\"form-control\" placeholder=\"Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"resenha\" class=\"form-control\" placeholder=\"Confirme a Senha\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>

      <div class=\"row\">
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Registrar</button>
        </div>
        <!-- /.col -->
      </div>

    </form>

  </div>
  <!-- /.login-box-body -->

</div>

<!-- /.login-box -->
{% include 'interface/libraryjs.twig' %}
", "register/index.twig", "/var/www/html/analista/app/templates/register/index.twig");
    }
}
