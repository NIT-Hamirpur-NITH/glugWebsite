<?php

/* partials/themes-details.html.twig */
class __TwigTemplate_bd1013acc7aeb48f8b2fa8d8c092be876591173adb45051eae1cf58cd37f3016 extends Twig_Template
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
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isThemeInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isTestingRelease", array(0 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())), "method");
        // line 4
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
        echo "
    ";
        // line 10
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["theme"]) ? $context["theme"] : null)), "method")) {
            // line 11
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Theme\"></i></span></small>
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "symlink", array())) {
            // line 14
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 18
        echo "    <small>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())))) : ("")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "icon", array()), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 24
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) {
            // line 25
            echo "        <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 30
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array())) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 34
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array())) {
                // line 35
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 37
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 39
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array())) {
                // line 40
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 42
            echo "                </td>
            </tr>
        ";
        }
        // line 45
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array())) {
            // line 46
            echo "        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 51
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array())) {
            // line 52
            echo "        <tr>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 57
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array())) {
            // line 58
            echo "            <tr>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 63
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array())) {
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 67
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array()), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 71
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array())) {
            // line 72
            echo "            <tr>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 77
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description", array())) {
            // line 78
            echo "            <tr>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 80
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description_html", array());
            echo "</td>
            </tr>
        ";
        }
        // line 83
        echo "
        ";
        // line 84
        if (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array()) || $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()))) {
            // line 85
            echo "            ";
            $context["readme_link"] = (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) ? ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) : (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()) . "/blob/master/README.md")));
            // line 86
            echo "            <tr>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["readme_link"]) ? $context["readme_link"] : null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["readme_link"]) ? $context["readme_link"] : null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 91
        echo "    </table>
</div>

";
        // line 94
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 95
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("themes/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 96
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 96)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 97
            echo "
    ";
            // line 98
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "system.pages.theme"), "method") != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))) {
                // line 99
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 105
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array()), "html", null, true);
            echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 109
        echo "
";
        // line 110
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 110)->display($context);
        // line 111
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 111)->display(array_merge($context, array("type" => "theme", "package" => (isset($context["theme"]) ? $context["theme"] : null))));
        // line 112
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 112)->display(array_merge($context, array("type" => "theme")));
        // line 113
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 113)->display(array_merge($context, array("type" => "theme")));
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 113,  306 => 112,  304 => 111,  302 => 110,  299 => 109,  291 => 106,  288 => 105,  281 => 101,  277 => 99,  275 => 98,  272 => 97,  269 => 96,  266 => 95,  264 => 94,  259 => 91,  251 => 88,  247 => 87,  244 => 86,  241 => 85,  239 => 84,  236 => 83,  230 => 80,  226 => 79,  223 => 78,  220 => 77,  214 => 74,  210 => 73,  207 => 72,  204 => 71,  197 => 67,  192 => 65,  189 => 64,  186 => 63,  178 => 60,  174 => 59,  171 => 58,  168 => 57,  160 => 54,  156 => 53,  153 => 52,  150 => 51,  142 => 48,  138 => 47,  135 => 46,  132 => 45,  127 => 42,  119 => 40,  116 => 39,  110 => 37,  102 => 35,  100 => 34,  95 => 32,  92 => 31,  89 => 30,  83 => 27,  79 => 26,  76 => 25,  74 => 24,  69 => 22,  65 => 20,  61 => 19,  56 => 18,  48 => 14,  45 => 13,  41 => 11,  39 => 10,  35 => 9,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name|e }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Theme\"></i></span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|tu }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
                <td class=\"double\">{{ theme.license }}</td>
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.homepage ~ '/blob/master/README.md' %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.README\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}
    </table>
</div>

{% if (installed) %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (config.get('system.pages.theme') != admin.route) %}
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|tu }}</a>
    </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|tu }}</a>
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
", "partials/themes-details.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/partials/themes-details.html.twig");
    }
}
