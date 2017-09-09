<?php

/* empresas/index.twig */
class __TwigTemplate_0215b671c3b47c247ac4241053f03b974b852a4b0e3eb9659d8f614312c04c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("interface/home.twig", "empresas/index.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Todas Empresas
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Empresa</a></li>
        <li class=\"active\">Index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      ";
        // line 19
        $this->loadTemplate("error/error.twig", "empresas/index.twig", 19)->display($context);
        // line 20
        echo "      ";
        $this->loadTemplate("flash/danger.twig", "empresas/index.twig", 20)->display($context);
        // line 21
        echo "    <div class=\"col-md-4\">
      <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Adicionar Projeto</h3>
        </div>
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("empresas.store"), "html", null, true);
        echo "\" method=\"POST\">
          <div class=\"box-body\">
            <div class=\"form-group\">
                <label>Data Inicial:</label>
                <div class=\"input-group date\">
                  <div class=\"input-group-addon\">
                    <i class=\"fa fa-calendar\"></i>
                  </div>
                  <input class=\"form-control pull-right datepicker\" name=\"dataInicial\" type=\"text\">
                </div>
            </div>
            <div class=\"form-group\">
              <label>Data Final:</label>
              <div class=\"input-group date\">
                <div class=\"input-group-addon\">
                  <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control pull-right datepicker\" name=\"dataFinal\" type=\"text\">
              </div>
            </div>
            <div class=\"form-group\">
            <label>Valor</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\">\$</span>
                <input class=\"form-control\" type=\"text\" name=\"valor\">
            </div>
            <div class=\"form-group\">
              <label>Empresa</label>
              <select class=\"form-control\" name=\"empresa\" style=\"width: 100%;\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todasEmpresas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 56
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "nome", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "empresas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  97 => 56,  93 => 55,  61 => 26,  54 => 21,  51 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'interface/home.twig' %}
{% block content %}

<!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Todas Empresas
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Empresa</a></li>
        <li class=\"active\">Index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      {% include 'error/error.twig' %}
      {% include 'flash/danger.twig' %}
    <div class=\"col-md-4\">
      <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Adicionar Projeto</h3>
        </div>
        <form action=\"{{ path_for('empresas.store') }}\" method=\"POST\">
          <div class=\"box-body\">
            <div class=\"form-group\">
                <label>Data Inicial:</label>
                <div class=\"input-group date\">
                  <div class=\"input-group-addon\">
                    <i class=\"fa fa-calendar\"></i>
                  </div>
                  <input class=\"form-control pull-right datepicker\" name=\"dataInicial\" type=\"text\">
                </div>
            </div>
            <div class=\"form-group\">
              <label>Data Final:</label>
              <div class=\"input-group date\">
                <div class=\"input-group-addon\">
                  <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control pull-right datepicker\" name=\"dataFinal\" type=\"text\">
              </div>
            </div>
            <div class=\"form-group\">
            <label>Valor</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\">\$</span>
                <input class=\"form-control\" type=\"text\" name=\"valor\">
            </div>
            <div class=\"form-group\">
              <label>Empresa</label>
              <select class=\"form-control\" name=\"empresa\" style=\"width: 100%;\">
                {% for empresa in todasEmpresas %}
                <option value=\"{{empresa.id}}\">{{empresa.nome}}</option>
                {% endfor %}
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{% endblock %}
", "empresas/index.twig", "/var/www/html/analista/app/templates/empresas/index.twig");
    }
}
