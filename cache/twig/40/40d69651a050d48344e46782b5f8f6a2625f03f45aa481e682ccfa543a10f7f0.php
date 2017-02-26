<?php

/* forms/fields/section/section.html.twig */
class __TwigTemplate_bc763d11113803d64c33d835ceafa410040f5aee960fdc4c7d1065b60e26654f extends Twig_Template
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
        if ((twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "security", array()))))) {
            // line 2
            echo "
    ";
            // line 3
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())) {
                // line 4
                echo "    <h1 ";
                if ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "underline", array())) {
                    echo "class=\"no_underline\"";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())), "html", null, true);
                }
                echo "</h1>
    ";
            }
            // line 6
            echo "
    ";
            // line 7
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())) {
                // line 8
                echo "    <p>";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array()));
                } else {
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array()));
                }
                echo "</p>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
                // line 12
                echo "        <div class=\"form-section\">
        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 14
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 15
                        echo "                ";
                        $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                        // line 16
                        echo "                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/section/section.html.twig", 16)->display($context);
                        // line 17
                        echo "            ";
                    }
                    // line 18
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </div>
    ";
            }
            // line 21
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  106 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  63 => 13,  60 => 12,  58 => 11,  55 => 10,  45 => 8,  43 => 7,  40 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field.security is empty or authorize(array(field.security)) %}

    {% if field.title %}
    <h1 {% if not field.underline %}class=\"no_underline\"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>
    {% endif %}

    {% if field.text %}
    <p>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu|raw }}{% else %}{{ field.text|t|raw }}{% endif %}</p>
    {% endif %}

    {% if field.fields %}
        <div class=\"form-section\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = data.value(field.name) %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endif %}
", "forms/fields/section/section.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/section/section.html.twig");
    }
}
