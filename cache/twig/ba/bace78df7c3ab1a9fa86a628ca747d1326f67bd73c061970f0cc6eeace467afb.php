<?php

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_ed7dbce2b9625ebb141b1e0a0b5182809c24ab64b05ab348675d2db032e6bf38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
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
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-textarea-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo "\">
        <textarea
            class=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "input")) : ("input")), "html", null, true);
        echo "\"

            ";
        // line 9
        echo "            name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
            ";
        // line 11
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 27
        echo "            >";
        echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html");
        echo "</textarea>
    </div>
";
    }

    // line 11
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 15
        echo "                ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 16
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 19
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 20
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array()), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            }
            echo "\"";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array(), "any", true, true)) {
            echo "rows=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array()), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array(), "any", true, true)) {
            echo "cols=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array()), "html", null, true);
            echo "\"";
        }
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 26,  147 => 25,  140 => 24,  129 => 23,  122 => 22,  117 => 21,  110 => 20,  105 => 19,  100 => 18,  95 => 17,  88 => 16,  83 => 15,  76 => 14,  69 => 13,  62 => 12,  59 => 11,  51 => 27,  48 => 11,  43 => 9,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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

{% block input %}
    <div class=\"form-textarea-wrapper {{ field.size }}\">
        <textarea
            class=\"{{ field.classes|default('input') }}\"

            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            {# input attribute structures #}
            {% block input_attributes %}
                {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                {% if field.validate.message %}title=\"{% if grav.twig.twig.filters['tu'] is defined %}{{ field.validate.message|tu|e }}{% else %}{{ field.validate.message|t|e }}{% endif %}\"{% endif %}
                {% if field.rows is defined %}rows=\"{{ field.rows }}\"{% endif %}
                {% if field.cols is defined %}cols=\"{{ field.cols }}\"{% endif %}
            {% endblock %}
            >{{ value|trim|e('html') }}</textarea>
    </div>
{% endblock %}
", "forms/fields/textarea/textarea.html.twig", "/home/ubuntu/workspace/user/plugins/form/templates/forms/fields/textarea/textarea.html.twig");
    }
}
