<?php

/* error/error.twig */
class __TwigTemplate_35fd8590f77f562ec656c7a9596c519b305fe5dcad0602acce82f1a1cec49420 extends Twig_Template
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
        if ($this->env->getExtension('Awurth\SlimValidation\ValidatorExtension')->hasErrors()) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["e"]) {
                // line 5
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["e"]);
                foreach ($context['_seq'] as $context["_key"] => $context["motivo"]) {
                    // line 6
                    echo "      ";
                    echo twig_escape_filter($this->env, $context["motivo"], "html", null, true);
                    echo "<br>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motivo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "error/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  34 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if has_errors() %}
<div class=\"alert alert-danger alert-dismissible\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
{% for key, e in errors %}
    {% for motivo in e %}
      {{ motivo }}<br>
    {% endfor %}
{% endfor %}
</div>
{% endif %}
", "error/error.twig", "/var/www/html/slim3-skeleton/app/templates/error/error.twig");
    }
}
