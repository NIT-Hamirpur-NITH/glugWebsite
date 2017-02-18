<?php

/* partials/plugins-details.html.twig */
class __TwigTemplate_13551bbe03705c85dfb42019fae9c098967046284ecd5af532571187c7556997 extends Twig_Template
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
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 2
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isPluginInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isTestingRelease", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())), "method");
        // line 4
        echo "
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
        echo "
    ";
        // line 10
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["plugin"]) ? $context["plugin"] : null)), "method")) {
            // line 11
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "symlink", array())) {
            // line 14
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 18
        echo "    <small>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())))) : ("")), "html", null, true);
        echo "</small>
    ";
        // line 19
        if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 20
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "icon", array()), "html", null, true);
        echo "\"></i>
    ";
        // line 23
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 23)->display(array_merge($context, array("plugin" => (isset($context["plugin"]) ? $context["plugin"] : null))));
        // line 24
        echo "</div>

";
        // line 26
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 27
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 28
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 28)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 29
            echo "
    ";
            // line 30
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "tabs", array()), "fields", array()), "login", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden"))) {
                // line 31
                echo "        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_PLUGIN"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 36
            echo "
";
        } else {
            // line 38
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array()), "html", null, true);
            echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_PLUGIN"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 42
        echo "
";
        // line 43
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/plugins-details.html.twig", 43)->display($context);
        // line 44
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-details.html.twig", 44)->display(array_merge($context, array("type" => "plugin")));
        // line 45
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-details.html.twig", 45)->display(array_merge($context, array("type" => "plugin")));
        // line 46
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/plugins-details.html.twig", 46)->display(array_merge($context, array("type" => "plugin", "package" => (isset($context["plugin"]) ? $context["plugin"] : null))));
    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  126 => 45,  124 => 44,  122 => 43,  119 => 42,  111 => 39,  108 => 38,  104 => 36,  98 => 33,  94 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  81 => 26,  77 => 24,  75 => 23,  71 => 22,  67 => 20,  63 => 19,  58 => 18,  50 => 14,  47 => 13,  41 => 11,  39 => 10,  35 => 9,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set gpm = admin.gpm() %}*/
/* {% set installed = gpm.isPluginInstalled(admin.route) %}*/
/* {% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}*/
/* */
/* <div class="grav-update plugin" data-gpm-plugin="{{ admin.route }}">*/
/* </div>*/
/* */
/* <h1>*/
/*     {{ plugin.name|e }}*/
/*     {% if admin.isTeamGrav(plugin) %}*/
/*         <small><span class="info-reverse"><i class="fa fa-check-circle" title="{{ "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"|tu }}"></i></span></small>*/
/*     {% endif %}*/
/*     {% if plugin.symlink %}*/
/*     <small class="hint--bottom" data-hint="{{ "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"|tu }}">*/
/*         <i class="fa fa-fw fa-link"></i>*/
/*     </small>*/
/*     {% endif %}*/
/*     <small>{{ plugin.version ? 'v' ~ plugin.version|e }}</small>*/
/*     {% if isTestingRelease %}<span class="gpm-testing">test release</span>{% endif %}*/
/* </h1>*/
/* <div class="gpm-item-info">*/
/*     <i class="gpm-item-icon fa fa-fw fa-{{ plugin.icon }}"></i>*/
/*     {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}*/
/* </div>*/
/* */
/* {% if (installed) %}*/
/*     {% set data = admin.data('plugins/' ~ admin.route) %}*/
/*     {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}*/
/* */
/*     {% if (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden') %}*/
/*         <div class="button-bar danger">*/
/*             <span class="danger-zone"></span>*/
/*             <a class="button" href="#" data-remodal-target="remove-package"><i class="fa fa-fw fa-warning"></i> {{ "PLUGIN_ADMIN.REMOVE_PLUGIN"|tu }}</a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% else %}*/
/*     <div class="button-bar success">*/
/*         <a class="button" href="#" data-remodal-target="add-package" data-packages-slugs="{{ plugin.slug }}" data-plugin-action="start-package-installation"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.INSTALL_PLUGIN"|tu }}</a>*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% include 'partials/modal-changes-detected.html.twig' %}*/
/* {% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}*/
/* {% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}*/
/* {% include 'partials/modal-remove-package.html.twig' with { type: 'plugin', package: plugin } %}*/
/* */
