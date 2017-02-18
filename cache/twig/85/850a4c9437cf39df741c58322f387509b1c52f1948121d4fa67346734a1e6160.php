<?php

/* dashboard.html.twig */
class __TwigTemplate_be02c125c7c0e68b8cfd91fbcec30610d9c8511cb6dde234c697e8c4095dca40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'widgets' => array($this, 'block_widgets'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"button-bar\">
        ";
        // line 9
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 10
            echo "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "all"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "tmp-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>

            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            echo "</button>
        ";
        }
        // line 26
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        echo "</h1>
";
    }

    // line 30
    public function block_widgets($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "notifications", array()), "dashboard", array())) {
            // line 32
            echo "    <div class=\"dashboard-notifications-container\"></div>
    ";
        }
        // line 34
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array())) {
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 38
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 39
                    echo "                    <div class=\"dashboard-item-flex\">
                        ";
                    // line 40
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 40)->display($context);
                    // line 41
                    echo "                    </div>
                ";
                }
                // line 43
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        // line 45
        echo "    </div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array())) {
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 51
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 52
                    echo "                ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 52)->display($context);
                    // line 53
                    echo "            ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 58
    public function block_content_bottom($context, array $blocks = array())
    {
        // line 59
        echo "    <div id=\"admin-dashboard\">";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array())) {
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 62
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 63
                    echo "                    ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 63)->display($context);
                    // line 64
                    echo "                ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 67,  246 => 64,  243 => 63,  241 => 62,  224 => 61,  222 => 60,  220 => 59,  217 => 58,  199 => 53,  196 => 52,  194 => 51,  177 => 50,  175 => 49,  172 => 48,  167 => 45,  164 => 44,  150 => 43,  146 => 41,  144 => 40,  141 => 39,  138 => 38,  120 => 37,  118 => 36,  114 => 34,  110 => 32,  107 => 31,  104 => 30,  98 => 27,  95 => 26,  90 => 24,  81 => 20,  75 => 19,  69 => 18,  63 => 17,  57 => 16,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.DASHBOARD"|tu %}*/
/* */
/* {% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div class="button-group">*/
/*                 <button data-clear-cache-type="" data-clear-cache="{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}" class="button"><i class="fa fa-trash"></i> {{ "PLUGIN_ADMIN.CLEAR_CACHE"|tu }}</button>*/
/*                 <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a data-clear-cache-type="all" data-clear-cache="{{  uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="assets-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="images-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="cache-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="tmp-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'tmp-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"|tu }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*         {% endif %}*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block widgets %}*/
/*     {% if config.plugins.admin.notifications.dashboard %}*/
/*     <div class="dashboard-notifications-container"></div>*/
/*     {% endif %}*/
/* */
/*     <div id="admin-dashboard">*/
/*         {% if grav.twig.plugins_hooked_dashboard_widgets_top %}*/
/*             {% for widget in grav.twig.plugins_hooked_dashboard_widgets_top %}*/
/*                 {% if attribute(config.plugins.admin.widgets, widget.template) == true %}*/
/*                     <div class="dashboard-item-flex">*/
/*                         {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {%- if grav.twig.plugins_hooked_dashboard_widgets_main -%}*/
/*         {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_main -%}*/
/*             {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}*/
/*                 {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*             {% endif -%}*/
/*         {%- endfor -%}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
/* {% block content_bottom %}*/
/*     <div id="admin-dashboard">*/
/*         {%- if grav.twig.plugins_hooked_dashboard_widgets_bottom -%}*/
/*             {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_bottom -%}*/
/*                 {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}*/
/*                     {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*                 {% endif -%}*/
/*             {%- endfor -%}*/
/*         {%- endif -%}*/
/*     </div>*/
/* {% endblock %}*/
/* */
