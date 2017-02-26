<?php

/* forms/fields/array/array.html.twig */
class __TwigTemplate_1581f5e532f0e5b7dfb558c91e4030622d2e698a510aa7e0ce485839b44ef8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
        echo "\"
    ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_input($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["array_field"] = $this;
        // line 42
        echo "    <div data-grav-array-type=\"container\"";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo (((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 43
        if (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 45
                if ( !twig_test_iterable($context["text"])) {
                    // line 46
                    echo "                    ";
                    echo $context["array_field"]->getrenderer($context["key"], $context["text"], (isset($context["field"]) ? $context["field"] : null), (isset($context["scope"]) ? $context["scope"] : null));
                    echo "
                ";
                } else {
                    // line 48
                    echo "                    ";
                    // line 49
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 50
                        echo $context["array_field"]->getrenderer((($context["key"] . ":") . $context["subkey"]), $context["subtext"], (isset($context["field"]) ? $context["field"] : null), (isset($context["scope"]) ? $context["scope"] : null));
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "                ";
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 56
            echo "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                ";
            // line 58
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array()) != true)) {
                // line 59
                echo "                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    ";
                // line 62
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 63
                echo "                    placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
                echo "\" />
                ";
            }
            // line 65
            echo "                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"
                    ";
            // line 69
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 70
            echo "                    placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
            echo "\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 75
        echo "    </div>
";
    }

    // line 10
    public function getrenderer($__key__ = null, $__text__ = null, $__field__ = null, $__scope__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "text" => $__text__,
            "field" => $__field__,
            "scope" => $__scope__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <div class=\"form-row";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
                echo " array-field-value_only";
            }
            echo "\"
         data-grav-array-type=\"row\">
        <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
        ";
            // line 14
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array()) != true)) {
                // line 15
                echo "            ";
                if ((((isset($context["key"]) ? $context["key"] : null) == "0") && ((isset($context["text"]) ? $context["text"] : null) == ""))) {
                    // line 16
                    echo "                ";
                    $context["key"] = "";
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "            ";
                $context["key"] = twig_replace_filter((isset($context["key"]) ? $context["key"] : null), array("%5B" => "[", "%5D" => "]"));
                // line 19
                echo "
            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
                ";
                // line 23
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 24
                echo "                placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "
        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"";
            // line 30
            echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "[") . (isset($context["key"]) ? $context["key"] : null)) . "]"), "html", null, true);
            echo "\"
            placeholder=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
            echo "\"
            ";
            // line 32
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 33
            echo "            value=";
            if (((isset($context["text"]) ? $context["text"] : null) == "true")) {
                echo "true";
            } elseif (((isset($context["text"]) ? $context["text"] : null) == "false")) {
                echo "false";
            } else {
                echo "\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["text"]) ? $context["text"] : null), ", "));
                echo "\"";
            }
            echo " />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
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
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 33,  223 => 32,  219 => 31,  215 => 30,  209 => 26,  203 => 24,  199 => 23,  195 => 22,  190 => 19,  187 => 18,  184 => 17,  181 => 16,  178 => 15,  176 => 14,  167 => 11,  152 => 10,  147 => 75,  139 => 70,  135 => 69,  131 => 68,  126 => 65,  120 => 63,  116 => 62,  111 => 59,  109 => 58,  105 => 56,  98 => 53,  95 => 52,  87 => 50,  82 => 49,  80 => 48,  74 => 46,  72 => 45,  67 => 44,  65 => 43,  57 => 42,  54 => 41,  51 => 40,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block global_attributes %}
    data-grav-array-name=\"{{ (scope ~ field.name)|fieldName }}\"
    data-grav-array-keyname=\"{{ field.placeholder_key|e|tu }}\"
    data-grav-array-valuename=\"{{ field.placeholder_value|e|tu }}\"
    {{ parent() }}
{% endblock %}

{% macro renderer(key, text, field, scope) %}
    <div class=\"form-row{% if field.value_only %} array-field-value_only{% endif %}\"
         data-grav-array-type=\"row\">
        <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
        {% if field.value_only != true %}
            {% if key == '0' and text == '' %}
                {% set key = '' %}
            {% endif %}
            {% set key = key|replace({'%5B': '[', '%5D': ']'}) %}

            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"{{ key }}\"
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                placeholder=\"{{ field.placeholder_key|e|tu }}\" />
        {% endif %}

        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"{{ ((scope ~ field.name)|fieldName) ~ '[' ~ key ~ ']' }}\"
            placeholder=\"{{ field.placeholder_value|e|tu }}\"
            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
            value={% if text == 'true' %}true{% elseif text == 'false' %}false{% else %}\"{{ text|join(', ')|e }}\"{% endif %} />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
{% endmacro %}

{% block input %}
    {% import _self as array_field %}
    <div data-grav-array-type=\"container\"{% if field.value_only %} data-grav-array-mode=\"value_only\"{% endif %}{{ value|length <= 1 ? ' class=\"one-child\"' : '' }}>
        {% if value|length %}
            {% for key, text in value -%}
                {% if text is not iterable %}
                    {{ array_field.renderer(key, text, field, scope) }}
                {% else %}
                    {# Backward compatibility for nested arrays (metas) which are not supported anymore #}
                    {% for subkey, subtext in text -%}
                        {{ array_field.renderer(key ~ ':' ~ subkey, subtext, field, scope) }}
                    {% endfor %}
                {% endif %}
            {% endfor %}
        {%- else -%}
            {# Empty value, mock the entry field#}
            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                {% if field.value_only != true %}
                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    placeholder=\"{{ field.placeholder_key|e|tu }}\" />
                {% endif %}
                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"{{ (scope ~ field.name)|fieldName }}\"
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    placeholder=\"{{ field.placeholder_value|e|tu }}\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>
        {%- endif %}
    </div>
{% endblock %}
", "forms/fields/array/array.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/array/array.html.twig");
    }
}
