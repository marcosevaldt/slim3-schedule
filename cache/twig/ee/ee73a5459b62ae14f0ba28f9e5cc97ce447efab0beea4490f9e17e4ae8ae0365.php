<?php

/* flash/flash.twig */
class __TwigTemplate_723b541d322ab867c301c75d69f6108a5acf0045d31779b0a09247b588ce13d5 extends Twig_Template
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
        if (($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages() > 0)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages());
            foreach ($context['_seq'] as $context["tipo"] => $context["mensagens"]) {
                // line 3
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
                echo " alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
      ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["mensagens"]);
                foreach ($context['_seq'] as $context["_key"] => $context["mensagem"]) {
                    // line 6
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["mensagem"], "html", null, true);
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensagem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tipo'], $context['mensagens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "flash/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  36 => 6,  32 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flash() > 0 %}
  {% for tipo,mensagens in flash() %}
    <div class=\"alert alert-{{tipo}} alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
      {% for mensagem in mensagens %}
        {{ mensagem }}
      {% endfor %}
    </div>
  {% endfor %}
{% endif %}
", "flash/flash.twig", "/var/www/html/slim3-skeleton/app/templates/flash/flash.twig");
    }
}
