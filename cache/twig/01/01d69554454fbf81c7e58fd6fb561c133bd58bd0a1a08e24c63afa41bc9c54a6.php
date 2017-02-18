<?php

/* forms/fields/order/order.html.twig */
class __TwigTemplate_7d22c815a1a5da4498b08253a83355509491bafcc4efa43258ba8d4a188a59f5 extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["siblings"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parent", array()), "children", array()), "visible", array());
        // line 3
        echo "
<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            ";
        // line 7
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 8
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 12
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo "\">
            ";
        // line 17
        $context["canReorder"] = ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parent", array()), "header", array()), "content", array()), "items", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "visible", array()));
        // line 18
        echo "            <input
                type=\"hidden\"
                data-order
                ";
        // line 21
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 22
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
                value=\"";
        // line 23
        echo twig_escape_filter($this->env, (((isset($context["canReorder"]) ? $context["canReorder"] : null)) ? ((isset($context["value"]) ? $context["value"] : null)) : ("")), "html", null, true);
        echo "\" />
            ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parent", array()), "header", array()), "content", array()), "items", array())) {
            // line 25
            echo "                <span class=\"note\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PARENT_SETTING_ORDER"), "html", null, true);
            echo "</span>
            ";
        } elseif ( !$this->getAttribute(        // line 26
(isset($context["data"]) ? $context["data"] : null), "visible", array())) {
            // line 27
            echo "                <span class=\"note\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NOT_VISIBLE"), "html", null, true);
            echo "</span>
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : null)) < 200)) {
            // line 31
            echo "\t\t\t\t<ul id=\"ordering\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
            echo "\">
\t\t\t    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["siblings"]) ? $context["siblings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "\t\t\t\t\t<li class=\"";
                if ((($this->getAttribute($context["page"], "order", array()) == (isset($context["value"]) ? $context["value"] : null)) && (isset($context["canReorder"]) ? $context["canReorder"] : null))) {
                    echo "drag-handle";
                } else {
                    echo "ignore";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</ul>
\t\t\t";
        } else {
            // line 37
            echo "                <span class=\"note\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 39
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  127 => 37,  123 => 35,  106 => 33,  102 => 32,  97 => 31,  95 => 30,  92 => 29,  86 => 27,  84 => 26,  79 => 25,  77 => 24,  73 => 23,  68 => 22,  64 => 21,  59 => 18,  57 => 17,  53 => 16,  45 => 12,  39 => 10,  31 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}
{% set siblings = data.parent.children.visible %}

<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper {{ field.size }}\">
            {% set canReorder = not data.parent.header.content.items and data.visible %}
            <input
                type=\"hidden\"
                data-order
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"{{ canReorder ? value : '' }}\" />
            {% if data.parent.header.content.items %}
                <span class=\"note\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PARENT_SETTING_ORDER\"|tu }}</span>
            {% elseif not data.visible %}
                <span class=\"note\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NOT_VISIBLE\"|tu }}</span>
            {% endif %}

            {% if siblings|length < 200 %}
\t\t\t\t<ul id=\"ordering\" class=\"{{ field.classes }}\">
\t\t\t    {% for page in siblings %}
\t\t\t\t\t<li class=\"{% if page.order  == value and canReorder %}drag-handle{% else %}ignore{% endif %}\" data-id=\"{{ page.slug }}\">{{ page.title|e }}</li>
                {% endfor %}
\t\t\t\t</ul>
\t\t\t{% else %}
                <span class=\"note\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</span>
\t\t\t{% endif %}
        </div>
    </div>
</div>
", "forms/fields/order/order.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/order/order.html.twig");
    }
}
