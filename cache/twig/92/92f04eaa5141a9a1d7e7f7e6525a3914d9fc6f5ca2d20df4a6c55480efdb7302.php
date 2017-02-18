<?php

/* plugins.html.twig */
class __TwigTemplate_ca18ef0bb40ad612bd2780a59fb6c5b8d5e27b2370b127e728b4b886a6829290 extends Twig_Template
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
            $context["installing"] = (is_string($__internal_563dd55078080bf365354733d755aaca09c59ce9b6bb2d70d7303d59e5a77e71 = (isset($context["plugin_slug"]) ? $context["plugin_slug"] : null)) && is_string($__internal_2d9b6ec3725b47dcf45e1ded8f1e311c923979566d1ac49d830326ff3a7d2ab0 = "install") && ('' === $__internal_2d9b6ec3725b47dcf45e1ded8f1e311c923979566d1ac49d830326ff3a7d2ab0 || 0 === strpos($__internal_563dd55078080bf365354733d755aaca09c59ce9b6bb2d70d7303d59e5a77e71, $__internal_2d9b6ec3725b47dcf45e1ded8f1e311c923979566d1ac49d830326ff3a7d2ab0)));
            // line 8
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 9
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
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
                $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
            }
        } else {
            // line 24
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
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
        echo "
    ";
        // line 40
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 41
            echo "        <div class=\"button-bar\">
        ";
            // line 42
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 43
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 45
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 47
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 48
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 50
                echo "        ";
            }
            // line 51
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 54
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 55
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
            ";
                // line 57
                try {
                    $this->loadTemplate((("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) . "-buttons.html.twig"), "plugins.html.twig", 57)->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 58
                echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 61
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 65
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 71
    public function block_messages($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
     ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "notifications", array()), "plugins", array())) {
            // line 74
            echo "    <div class=\"plugins-notifications-container hidden\"></div>
    ";
        }
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        // line 79
        echo "    <div class=\"gpm gpm-plugins\">
        ";
        // line 80
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 81
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 81)->display($context);
            // line 82
            echo "        ";
        } else {
            // line 83
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 83)->display($context);
            // line 84
            echo "        ";
        }
        // line 85
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
        return array (  229 => 85,  226 => 84,  223 => 83,  220 => 82,  217 => 81,  215 => 80,  212 => 79,  209 => 78,  203 => 74,  201 => 73,  196 => 72,  193 => 71,  183 => 66,  180 => 65,  172 => 62,  169 => 61,  162 => 58,  155 => 57,  149 => 56,  146 => 55,  143 => 54,  138 => 52,  135 => 51,  132 => 50,  126 => 48,  124 => 47,  118 => 46,  111 => 45,  103 => 43,  101 => 42,  98 => 41,  96 => 40,  93 => 39,  90 => 38,  83 => 34,  80 => 33,  73 => 30,  70 => 29,  67 => 28,  63 => 1,  60 => 27,  57 => 24,  53 => 21,  51 => 20,  48 => 17,  46 => 16,  44 => 15,  42 => 14,  40 => 11,  37 => 9,  35 => 8,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set plugin_slug = admin.route %}*/
/* */
/* {% if plugin_slug %}*/
/*     {% set installing = plugin_slug starts with 'install' %}*/
/* */
/*     {% if installing %}*/
/*         {% set title = "PLUGIN_ADMIN.PLUGINS"|tu %}*/
/*     {% else %}*/
/*         {% set installed = true %}*/
/* */
/*         {# Try installed packages first, then remote #}*/
/*         {% set package = admin.plugins(true)[admin.route] %}*/
/*         {% if (not package) %}*/
/*             {% set package = admin.plugins(false)[admin.route] %}*/
/*             {% set installed = false %}*/
/*         {% endif %}*/
/* */
/*         {% set plugin = package.toArray() %}*/
/*         {% set title = "PLUGIN_ADMIN.PLUGIN"|tu ~ ": " ~ plugin.name|e %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGINS"|tu %}*/
/* {% endif %}*/
/* */
/* {% if admin.route or installing %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/* */
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*             {% include 'plugins/'~admin.route~'-buttons.html.twig' ignore missing %}*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGIN"|tu }}: {{ plugin.name|e }}</h1>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block messages %}*/
/*     {{ parent() }}*/
/*      {% if config.plugins.admin.notifications.plugins %}*/
/*     <div class="plugins-notifications-container hidden"></div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="gpm gpm-plugins">*/
/*         {% if not admin.route or installing %}*/
/*             {% include 'partials/plugins-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/plugins-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
