<?php

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_a310667c2f3d7ae3725c2c0fecfcf62cc9718d4c92a9fd2f082e2da11a8c4732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["value"] = ((((isset($context["value"]) ? $context["value"] : null) === false)) ? (0) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 6
        $context["has_hidden"] = false;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            if (twig_test_empty($context["key"])) {
                // line 9
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
";
    }

    // line 23
    public function block_input($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"switch-toggle switch-grav ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array())), "html", null, true);
        echo "\">
        ";
        // line 26
        $context["maxLen"] = 0;
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 28
            echo "            ";
            $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"])));
            // line 29
            echo "            ";
            $context["maxLen"] = max(twig_length_filter($this->env, (isset($context["translation"]) ? $context["translation"] : null)), (isset($context["maxLen"]) ? $context["maxLen"] : null));
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 33
            echo "            ";
            $context["id"] = (("toggle_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . $context["key"]);
            // line 34
            echo "            ";
            $context["translation"] = trim((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]))));
            // line 35
            echo "
            <input type=\"radio\"
                value=\"";
            // line 37
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                id=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
                name=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"
                ";
            // line 40
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array(), "any", true, true)) {
                // line 41
                echo "                class=\"";
                echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array()) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                ";
            }
            // line 43
            echo "                ";
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 44
            echo "                ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
                // line 45
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    // line 46
                    echo "                        checked=\"checked\"
                    ";
                } elseif ((                // line 47
array_key_exists("value", $context) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    // line 48
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 50
                echo "                ";
            } else {
                // line 51
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    // line 52
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 54
                echo "                ";
            }
            // line 55
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 56
            echo "            />
            <label for=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo trim($this->getAttribute($this, "spanToggle", array(0 => (isset($context["translation"]) ? $context["translation"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method"));
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <a></a>
    </div>
";
    }

    // line 18
    public function getspanToggle($__input__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2));
            // line 20
            echo "    ";
            echo (((isset($context["space"]) ? $context["space"] : null) . (isset($context["input"]) ? $context["input"] : null)) . (isset($context["space"]) ? $context["space"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 20,  201 => 19,  188 => 18,  182 => 59,  172 => 57,  169 => 56,  164 => 55,  161 => 54,  157 => 52,  154 => 51,  151 => 50,  147 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  131 => 43,  125 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 35,  104 => 34,  101 => 33,  97 => 32,  94 => 31,  88 => 30,  85 => 29,  82 => 28,  77 => 27,  75 => 26,  69 => 25,  66 => 24,  63 => 23,  57 => 15,  52 => 14,  49 => 13,  45 => 1,  38 => 9,  36 => 8,  32 => 7,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set value = (value is same as(false) ? 0 : value) %}

{% set has_hidden = false %}
{% for key, text in field.options %}
    {% if key is empty %}
      {% set has_hidden = true %}
    {% endif %}
{% endfor %}

{% block global_attributes %}
    {{ parent() }}
    data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% block input %}

    <div class=\"switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }}\">
        {% set maxLen = 0 %}
        {% for text in field.options %}
            {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
            {% set maxLen = max(translation|length, maxLen) %}
        {% endfor %}

        {% for key, text in field.options %}
            {% set id = \"toggle_\" ~ field.name ~ key %}
            {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}

            <input type=\"radio\"
                value=\"{{ key }}\"
                id=\"{{ id }}\"
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                {% if field.highlight is defined %}
                class=\"{{ field.highlight == '' ~ key ? 'highlight' : '' }}\"
                {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.toggleable %}
                    {% if '' ~ key == '' ~ value %}
                        checked=\"checked\"
                    {% elseif value is defined and (key == 1 or key == '1') %}
                        checked=\"checked\"
                    {% endif %}
                {% else %}
                    {% if '' ~ key == '' ~ value %}
                        checked=\"checked\"
                    {% endif %}
                {% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
            />
            <label for=\"{{ id }}\">{{ (_self.spanToggle(translation, maxLen)|trim)|raw }}</label>
        {% endfor %}
        <a></a>
    </div>
{% endblock %}
", "forms/fields/toggle/toggle.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/toggle/toggle.html.twig");
    }
}
