<?php

/* plugins.html.twig */
class __TwigTemplate_e65b6c5ae88ba7a04460fa5fdb85bc76da5c6c57c7c9d45e2cc19f620655ae5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["plugin_slug"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array());
        // line 5
        if ((isset($context["plugin_slug"]) ? $context["plugin_slug"] : null)) {
            // line 6
            $context["installing"] = (is_string($__internal_7e537e01af0dbf5e0f08d208dd1416354d0c337a2b0556e7e72429caec2e0308 = (isset($context["plugin_slug"]) ? $context["plugin_slug"] : null)) && is_string($__internal_09843e279e02d8902a30b7c67e1e572511a6fb8eded4c818f819794ec84e1ef4 = "install") && ('' === $__internal_09843e279e02d8902a30b7c67e1e572511a6fb8eded4c818f819794ec84e1ef4 || 0 === strpos($__internal_7e537e01af0dbf5e0f08d208dd1416354d0c337a2b0556e7e72429caec2e0308, $__internal_09843e279e02d8902a30b7c67e1e572511a6fb8eded4c818f819794ec84e1ef4)));
            // line 8
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 9
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            } else {
                // line 11
                $context["installed"] = true;
                // line 14
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 15
                if ( !(isset($context["package"]) ? $context["package"] : null)) {
                    // line 16
                    $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                    // line 17
                    $context["installed"] = false;
                }
                // line 20
                $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
                // line 21
                $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
            }
        } else {
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
        }
        // line 27
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 30
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 38
    public function block_titlebar($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 40
            echo "        <div class=\"button-bar\">
        ";
            // line 41
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 42
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 44
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 46
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 47
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 49
                echo "        ";
            }
            // line 50
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 53
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 54
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
            ";
                // line 56
                try {
                    $this->loadTemplate((("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) . "-buttons.html.twig"), "plugins.html.twig", 56)->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 57
                echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 60
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 64
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 69
    public function block_messages($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
    ";
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "notifications", array()), "plugins", array())) {
            // line 72
            echo "        <div class=\"plugins-notifications-container hidden\"></div>
    ";
        }
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        // line 77
        echo "    <div class=\"gpm gpm-plugins\">
        ";
        // line 78
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 79
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 79)->display($context);
            // line 80
            echo "        ";
        } else {
            // line 81
            echo "            ";
            if ((null === (isset($context["plugin"]) ? $context["plugin"] : null))) {
                // line 82
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->redirectFunc(((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/404")), "html", null, true);
                echo "
            ";
            }
            // line 84
            echo "
            ";
            // line 85
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 85)->display($context);
            // line 86
            echo "        ";
        }
        // line 87
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 87,  234 => 86,  232 => 85,  229 => 84,  223 => 82,  220 => 81,  217 => 80,  214 => 79,  212 => 78,  209 => 77,  206 => 76,  200 => 72,  198 => 71,  193 => 70,  190 => 69,  181 => 65,  178 => 64,  170 => 61,  167 => 60,  160 => 57,  153 => 56,  147 => 55,  144 => 54,  141 => 53,  136 => 51,  133 => 50,  130 => 49,  124 => 47,  122 => 46,  116 => 45,  109 => 44,  101 => 42,  99 => 41,  96 => 40,  93 => 39,  90 => 38,  83 => 34,  80 => 33,  73 => 30,  70 => 29,  67 => 28,  63 => 1,  60 => 27,  57 => 24,  53 => 21,  51 => 20,  48 => 17,  46 => 16,  44 => 15,  42 => 14,  40 => 11,  37 => 9,  35 => 8,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set plugin_slug = admin.route %}

{% if plugin_slug %}
    {% set installing = plugin_slug starts with 'install' %}

    {% if installing %}
        {% set title = \"PLUGIN_ADMIN.PLUGINS\"|tu %}
    {% else %}
        {% set installed = true %}

        {# Try installed packages first, then remote #}
        {% set package = admin.plugins(true)[admin.route] %}
        {% if (not package) %}
            {% set package = admin.plugins(false)[admin.route] %}
            {% set installed = false %}
        {% endif %}

        {% set plugin = package.toArray() %}
        {% set title = \"PLUGIN_ADMIN.PLUGIN\"|tu ~ \": \" ~ plugin.name|e %}
    {% endif %}
{% else %}
    {% set title = \"PLUGIN_ADMIN.PLUGINS\"|tu %}
{% endif %}

{% if admin.route or installing %}
    {% block stylesheets %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
        {{ parent() }}
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}
{% endif %}

{% block titlebar %}
    {% if not admin.route or installing %}
        <div class=\"button-bar\">
        {% if (installing) %}
            <a class=\"button\" href=\"{{ base_url_relative }}/plugins\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <a class=\"button\" href=\"{{ base_url_relative }}/plugins/install\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
            {% if authorize(['admin.maintenance', 'admin.super']) %}
                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|tu }}</button>
            {% endif %}
        {% endif %}
        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> {{ \"PLUGIN_ADMIN.PLUGINS\"|tu }}</h1>
    {% else %}
        {% if (installed) %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url_relative }}/plugins\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|tu }}</a>
            {% include 'plugins/'~admin.route~'-buttons.html.twig' ignore missing %}
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        </div>
        {% else %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url_relative }}/plugins/install\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|tu }}</a>
        </div>
        {% endif %}

        <h1><i class=\"fa fa-fw fa-plug\"></i> {{ \"PLUGIN_ADMIN.PLUGIN\"|tu }}: {{ plugin.name|e }}</h1>
    {% endif %}
{% endblock %}

{% block messages %}
    {{ parent() }}
    {% if config.plugins.admin.notifications.plugins %}
        <div class=\"plugins-notifications-container hidden\"></div>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"gpm gpm-plugins\">
        {% if not admin.route or installing %}
            {% include 'partials/plugins-list.html.twig' %}
        {% else %}
            {% if plugin is null %}
                {{redirect_me(base_url_relative ~ '/404')}}
            {% endif %}

            {% include 'partials/plugins-details.html.twig' %}
        {% endif %}
    </div>
{% endblock %}
", "plugins.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/plugins.html.twig");
    }
}
