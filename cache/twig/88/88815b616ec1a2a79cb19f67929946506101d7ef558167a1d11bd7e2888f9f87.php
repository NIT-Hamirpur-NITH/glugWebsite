<?php

/* partials/plugins-list.html.twig */
class __TwigTemplate_1a6fc4c5e78cb8977f34395528a1549046554151e888b32a83b761f302732194 extends Twig_Template
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
        echo "<div class=\"grav-update plugins\"></div>
";
        // line 2
        if ((isset($context["installing"]) ? $context["installing"] : null)) {
            // line 3
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/plugins-list.html.twig", 3)->display($context);
        }
        // line 5
        $this->loadTemplate("partials/list-sort.html.twig", "partials/plugins-list.html.twig", 5)->display(array_merge($context, array("list_view" => "plugins")));
        // line 6
        echo "<h1>
    ";
        // line 7
        echo twig_escape_filter($this->env, (((isset($context["installing"]) ? $context["installing"] : null)) ? ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_PLUGINS")) : ($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_PLUGINS"))), "html", null, true);
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

<table>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"), "toArray", array())));
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
        foreach ($context['_seq'] as $context["slug"] => $context["plugin"]) {
            // line 17
            echo "        ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $context["slug"])), "method");
            // line 18
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isTestingRelease", array(0 => $context["slug"]), "method");
            // line 19
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["plugin"], "date", array())) ? ($this->getAttribute($context["plugin"], "date", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "findPackage", array(0 => $context["slug"]), "method"), "date", array())));
            // line 20
            echo "
        <tr data-gpm-plugin=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, (isset($context["releaseDate"]) ? $context["releaseDate"] : null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "author", array()), "name", array()), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["plugin"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array()), "isUpdatable", array(0 => $context["slug"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo (((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) ? ("1") : ("2"));
            echo "\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "icon", array()), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/plugins/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</a>
                ";
            // line 25
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["plugin"]), "method")) {
                // line 26
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 28
            echo "                ";
            if ($this->getAttribute($context["plugin"], "symlink", array())) {
                // line 29
                echo "                <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 33
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", array()), "html", null, true);
            echo "</span>
                ";
            // line 34
            if ((isset($context["isTestingRelease"]) ? $context["isTestingRelease"] : null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 35
            echo "            </td>
            <td class=\"gpm-actions\">
                ";
            // line 37
            if (( !(isset($context["installing"]) ? $context["installing"] : null) && (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", array()), "fields", array()), "tabs", array()), "fields", array()), "login", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden")))) {
                // line 38
                echo "                    <a class=\"";
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("disable") : ("enable"))), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 39
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 41
(isset($context["installing"]) ? $context["installing"] : null)) {
                // line 42
                echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "slug", array()), "html", null, true);
                echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                echo "</a>
                ";
            }
            // line 44
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 48
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 48)->display(array_merge($context, array("plugin" => $context["plugin"])));
            // line 49
            echo "                </div>
            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</table>

";
        // line 55
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-list.html.twig", 55)->display(array_merge($context, array("type" => "plugin")));
        // line 56
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-list.html.twig", 56)->display(array_merge($context, array("type" => "plugin")));
    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 56,  193 => 55,  189 => 53,  172 => 49,  170 => 48,  164 => 44,  156 => 42,  154 => 41,  149 => 39,  142 => 38,  140 => 37,  136 => 35,  132 => 34,  127 => 33,  119 => 29,  116 => 28,  110 => 26,  108 => 25,  100 => 24,  96 => 23,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  48 => 16,  40 => 11,  33 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grav-update plugins\"></div>
{% if installing %}
    {% include 'partials/release-toggle.html.twig' %}
{% endif %}
{% include 'partials/list-sort.html.twig' with { list_view: 'plugins' } %}
<h1>
    {{ installing ? \"PLUGIN_ADMIN.AVAILABLE_PLUGINS\"|tu : \"PLUGIN_ADMIN.INSTALLED_PLUGINS\"|tu }}
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu }}\" data-gpm-filter>
    </div>
</form>

<table>
    {% for slug, plugin in admin.plugins(not installing).toArray|ksort %}
        {% set data = admin.data('plugins/' ~ slug) %}
        {% set isTestingRelease = admin.gpm.isTestingRelease(slug) %}
        {% set releaseDate = plugin.date ?: admin.gpm.findPackage(slug).date %}

        <tr data-gpm-plugin=\"{{ slug|url_encode }}\" data-gpm-name=\"{{ plugin.name }}\" data-gpm-release-date=\"{{ releaseDate }}\" data-gpm-author=\"{{ plugin.author.name }}\" data-gpm-official=\"{{ admin.isTeamGrav(plugin) ? '1' : '2' }}\" data-gpm-updatable=\"{{ admin.gpm.isUpdatable(slug) ? '1' : '2' }}\" data-gpm-enabled=\"{{ data.get('enabled') ? '1' : '2' }}\" data-gpm-testing=\"{{ isTestingRelease ? '1' : '2' }}\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-{{ plugin.icon }}\"></i>
                <a href=\"{{ base_url_relative }}/plugins/{{ slug|url_encode }}\">{{ plugin.name }}</a>
                {% if admin.isTeamGrav(plugin) %}
                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|tu }}\"></i></span></small>
                {% endif %}
                {% if plugin.symlink %}
                <span class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|tu }}\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                {% endif %}
                <span class=\"gpm-version\">v{{ plugin.version }}</span>
                {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
            </td>
            <td class=\"gpm-actions\">
                {% if (not installing and (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden')) %}
                    <a class=\"{{ data.get('enabled') ? 'enabled' : 'disabled' }}\" href=\"{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ slug ~ '/task' ~ config.system.param_sep ~ (data.get('enabled') ? 'disable' : 'enable'), 'admin-form', 'admin-nonce') }}\">
                        <i class=\"fa fa-fw fa-toggle-{{ data.get('enabled') ? 'on' : 'off' }}\"></i>
                    </a>
                {% elseif (installing) %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|tu }}</a>
                {% endif %}
                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
                </div>
            </td>
        </tr>
    {% endfor %}
</table>

{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
", "partials/plugins-list.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/partials/plugins-list.html.twig");
    }
}
