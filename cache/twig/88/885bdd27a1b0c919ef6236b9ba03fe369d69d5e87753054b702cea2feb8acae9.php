<?php

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_6e33282c0907209846b56cc0352d9bfb0518974001391775f5ee8e943e6f73f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
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
        $context["originalValue"] = (isset($context["value"]) ? $context["value"] : null);
        // line 4
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys") && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) {
            // line 6
            $context["value"] = twig_array_merge($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()), (isset($context["value"]) ? $context["value"] : null));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 11
        echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_input($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "
        ";
            // line 18
            $context["id"] = (((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "-") . $context["key"]);
            // line 19
            echo "        ";
            $context["name"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ($context["key"]) : ((isset($context["id"]) ? $context["id"] : null)));
            // line 20
            echo "        ";
            $context["val"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ("1") : ($context["key"]));
            // line 21
            echo "        ";
            $context["checked"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["key"], array(), "array")) : (twig_in_filter($context["key"], (isset($context["value"]) ? $context["value"] : null))));
            // line 22
            echo "        ";
            $context["help"] = ((twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help_options", array())))) ? ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help_options", array()), $context["key"], array(), "array")) : (false));
            // line 23
            echo "
        <span class=\"checkboxes\">
            <input type=\"checkbox\"
                   id=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null));
            echo "\"
                   value=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null));
            echo "\"
                   name=\"";
            // line 28
            echo twig_escape_filter($this->env, ((($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "[") . (isset($context["name"]) ? $context["name"] : null)) . "]"), "html", null, true);
            echo "\"
                   ";
            // line 29
            if ((isset($context["checked"]) ? $context["checked"] : null)) {
                echo "checked=\"checked\"";
            }
            // line 30
            echo "                   ";
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 31
            echo "                   ";
            if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array())) {
                echo "required=\"required\"";
            }
            // line 32
            echo "            >
            <label style=\"display: inline\" for=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null));
            echo "\">
                ";
            // line 34
            if ((isset($context["help"]) ? $context["help"] : null)) {
                // line 35
                echo "                    <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate((isset($context["help"]) ? $context["help"] : null)), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate($context["text"]));
                echo "</span>
                ";
            } else {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate($context["text"]));
                echo "
                ";
            }
            // line 39
            echo "            </label>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  130 => 37,  122 => 35,  120 => 34,  116 => 33,  113 => 32,  108 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  60 => 16,  57 => 15,  51 => 12,  47 => 11,  42 => 10,  39 => 9,  35 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set originalValue = value %}*/
/* {% set value = (value is null ? field.default : value) %}*/
/* {% if field.use == 'keys' and field.default %}*/
/*     {% set value = field.default|merge(value) %}*/
/* {% endif %}*/
/* */
/* {% block global_attributes %}*/
/*     {{ parent() }}*/
/*     data-grav-keys="{{ field.use == 'keys' ? 'true' : 'false' }}"*/
/*     data-grav-field-name="{{ (scope ~ field.name)|fieldName }}"*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     {% for key, text in field.options %}*/
/* */
/*         {% set id = field.id|default(field.name) ~ '-' ~ key %}*/
/*         {% set name = field.use == 'keys' ? key : id %}*/
/*         {% set val = field.use == 'keys' ? '1' : key %}*/
/*         {% set checked = (field.use == 'keys' ? value[key] : key in value) %}*/
/*         {% set help = (key in field.help_options|keys ? field.help_options[key] : false) %}*/
/* */
/*         <span class="checkboxes">*/
/*             <input type="checkbox"*/
/*                    id="{{ id|e }}"*/
/*                    value="{{ val|e }}"*/
/*                    name="{{ (scope ~ field.name)|fieldName ~ '[' ~ name ~ ']' }}"*/
/*                    {% if checked %}checked="checked"{% endif %}*/
/*                    {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                    {% if field.validate.required %}required="required"{% endif %}*/
/*             >*/
/*             <label style="display: inline" for="{{ id|e }}">*/
/*                 {% if help %}*/
/*                     <span class="hint--bottom" data-hint="{{ help|t|e('html_attr') }}">{{ text|t|e }}</span>*/
/*                 {% else %}*/
/*                     {{ text|t|e }}*/
/*                 {% endif %}*/
/*             </label>*/
/*         </span>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
