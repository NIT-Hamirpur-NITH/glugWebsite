<?php

/* partials/themes-list.html.twig */
class __TwigTemplate_f23f17e9088fdba3621188e3c8a13babe688d3ec2ad1ff0feab7b6535378c9d4 extends Twig_Template
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
        echo "<div class=\"grav-update themes\"></div>
";
        // line 2
        if ((isset($context["installing"]) ? $context["installing"] : null)) {
            // line 3
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/themes-list.html.twig", 3)->display($context);
        }
        // line 5
        $this->loadTemplate("partials/list-sort.html.twig", "partials/themes-list.html.twig", 5)->display(array_merge($context, array("list_view" => "themes")));
        // line 6
        echo "<h1>
    ";
        // line 7
        echo twig_escape_filter($this->env, (((isset($context["installing"]) ? $context["installing"] : null)) ? ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_THEMES")) : ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_THEMES"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"), "toArray", array())));
        foreach ($context['_seq'] as $context["slug"] => $context["theme"]) {
            // line 17
            echo "        ";
            $context["state"] = "inactive";
            // line 18
            echo "        ";
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                $context["state"] = "installing";
            }
            // line 19
            echo "        ";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "system.pages.theme"), "method") == $context["slug"])) {
                $context["state"] = "active";
            }
            // line 20
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isTestingRelease", array(0 => $context["slug"]), "method");
            // line 21
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["theme"], "date", array())) ? ($this->getAttribute($context["theme"], "date", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "findPackage", array(0 => $context["slug"]), "method"), "date", array())));
            // line 22
            echo "
        <div class=\"theme card-item pure-u-1-3 ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["state"]) ? $context["state"] : null), "html", null, true);
            echo "-theme\" data-gpm-theme=\"";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, (isset($context["releaseDate"]) ? $context["releaseDate"] : null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "author", array()), "name", array()), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["theme"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isUpdatable", array(0 => $context["slug"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo (((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) ? ("1") : ("2"));
            echo "\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "icon", array()), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/themes/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</a>
                ";
            // line 27
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["theme"]), "method")) {
                // line 28
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 30
            echo "                ";
            if ($this->getAttribute($context["theme"], "symlink", array())) {
                // line 31
                echo "                    <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 35
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</span>
                ";
            // line 36
            if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 37
            echo "            </div>
            <div class=\"gpm-screenshot\">
                ";
            // line 39
            $context["thumb"] = (((isset($context["installing"]) ? $context["installing"] : null)) ? (("//getgrav.org/images/" . $this->getAttribute($context["theme"], "screenshot", array()))) : ($this->getAttribute($context["theme"], "thumbnail", array())));
            // line 40
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/themes/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb"]) ? $context["thumb"] : null), "html", null, true);
            echo "\" /></a>
            </div>
            ";
            // line 42
            if (((isset($context["state"]) ? $context["state"] : null) == "installing")) {
                // line 43
                echo "                <div class=\"gpm-actions\">
                    <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                // line 44
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                echo "</a>
                </div>
            ";
            } elseif ((            // line 46
(isset($context["state"]) ? $context["state"] : null) == "active")) {
                // line 47
                echo "                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVE_THEME"), "html", null, true);
                echo "
                </div>
            ";
            } else {
                // line 51
                echo "                <a data-remodal-target=\"theme-switch-warn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/themes/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "activate"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"gpm-actions\">
                    ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 55
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO"), "html", null, true);
        echo " <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION"), "html", null, true);
        echo "
        </p>
        <p class=\"bigger\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION"), "html", null, true);
        echo " <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
        </div>
    </form>
</div>

";
        // line 76
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-list.html.twig", 76)->display(array_merge($context, array("type" => "theme")));
        // line 77
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-list.html.twig", 77)->display(array_merge($context, array("type" => "theme")));
    }

    public function getTemplateName()
    {
        return "partials/themes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 77,  228 => 76,  220 => 71,  216 => 70,  209 => 66,  203 => 63,  198 => 61,  192 => 57,  185 => 55,  179 => 52,  174 => 51,  168 => 48,  165 => 47,  163 => 46,  156 => 44,  153 => 43,  151 => 42,  141 => 40,  139 => 39,  135 => 37,  131 => 36,  126 => 35,  118 => 31,  115 => 30,  109 => 28,  107 => 27,  99 => 26,  95 => 25,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  60 => 19,  55 => 18,  52 => 17,  48 => 16,  40 => 11,  33 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grav-update themes\"></div>
{% if installing %}
    {% include 'partials/release-toggle.html.twig' %}
{% endif %}
{% include 'partials/list-sort.html.twig' with { list_view: 'themes' } %}
<h1>
    {{ installing ? \"PLUGIN_ADMIN.AVAILABLE_THEMES\"|tu : \"PLUGIN_ADMIN.INSTALLED_THEMES\"|tu }}
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu }}\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    {% for slug, theme in admin.themes(not installing).toArray|ksort %}
        {% set state = 'inactive' %}
        {% if (installing) %}{% set state = 'installing' %}{% endif %}
        {% if (config.get('system.pages.theme') == slug) %}{% set state = 'active' %}{% endif %}
        {% set isTestingRelease = admin.gpm.isTestingRelease(slug) %}
        {% set releaseDate = theme.date ?: admin.gpm.findPackage(slug).date %}

        <div class=\"theme card-item pure-u-1-3 {{ state }}-theme\" data-gpm-theme=\"{{ slug|url_encode }}\" data-gpm-name=\"{{ theme.name }}\" data-gpm-release-date=\"{{ releaseDate }}\" data-gpm-author=\"{{ theme.author.name }}\" data-gpm-official=\"{{ admin.isTeamGrav(theme) ? '1' : '2' }}\" data-gpm-updatable=\"{{ admin.gpm.isUpdatable(slug) ? '1' : '2' }}\" data-gpm-enabled=\"{{ data.get('enabled') ? '1' : '2' }}\" data-gpm-testing=\"{{ isTestingRelease ? '1' : '2' }}\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-{{ theme.icon }}\"></i>
                <a href=\"{{ base_url_relative }}/themes/{{ slug|url_encode }}\">{{ theme.name }}</a>
                {% if admin.isTeamGrav(theme) %}
                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|tu }}\"></i></span></small>
                {% endif %}
                {% if theme.symlink %}
                    <span class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                {% endif %}
                <span class=\"gpm-version\">v{{ theme.version }}</span>
                {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
            </div>
            <div class=\"gpm-screenshot\">
                {% set thumb = installing ? '//getgrav.org/images/' ~ theme.screenshot : theme.thumbnail %}
                <a href=\"{{ base_url_relative }}/themes/{{ slug|url_encode }}\"><img src=\"{{ thumb }}\" /></a>
            </div>
            {% if (state == 'installing') %}
                <div class=\"gpm-actions\">
                    <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|tu }}</a>
                </div>
            {% elseif state == 'active' %}
                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> {{ \"PLUGIN_ADMIN.ACTIVE_THEME\"|tu }}
                </div>
            {% else %}
                <a data-remodal-target=\"theme-switch-warn\" href=\"{{ uri.addNonce(base_url_relative ~ '/themes/' ~ slug ~ '/task' ~ config.system.param_sep ~ 'activate', 'admin-form', 'admin-nonce') }}\" class=\"gpm-actions\">
                    {{ \"PLUGIN_ADMIN.ACTIVATE\"|tu }}
                </a>
            {% endif %}
        </div>
    {% endfor %}
</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>{{ \"PLUGIN_ADMIN.SWITCHING_TO\"|tu }} <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            {{ \"PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION\"|tu }}
        </p>
        <p class=\"bigger\">
            {{ \"PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION\"|tu }} <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
        </div>
    </form>
</div>

{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
", "partials/themes-list.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/partials/themes-list.html.twig");
    }
}
