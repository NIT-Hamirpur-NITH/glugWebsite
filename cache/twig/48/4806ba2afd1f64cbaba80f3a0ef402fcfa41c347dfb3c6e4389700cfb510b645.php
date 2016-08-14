<?php

/* partials/javascript-config.html.twig */
class __TwigTemplate_26478489db19e9d02ef86a9e7213102e71c34c381ade5516fec4144c876aac78 extends Twig_Template
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
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.login", 1 => "admin.super"))) {
            // line 2
            echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        base_url_relative: '";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "',
        route: '";
            // line 6
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo "',
        param_sep: '";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
            echo "',
        ";
            // line 8
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                // line 9
                echo "        enable_auto_updates_check: '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "enable_auto_updates_check", array()), "html", null, true);
                echo "',
        ";
            }
            // line 11
            echo "        admin_timeout: '";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "session", array()), "timeout", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "session", array()), "timeout", array())) : (1800)), "html", null, true);
            echo "',
        admin_nonce: '";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getNonce", array()), "html", null, true);
            echo "',
        language: '";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array(), "any", false, true), "language", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array(), "any", false, true), "language", array()), "en")) : ("en")), "html", null, true);
            echo "',
        pro_enabled: '";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array()), "html", null, true);
            echo "',
        local_notifications: '";
            // line 15
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array(), "any", false, true), "local_notifications", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array(), "any", false, true), "local_notifications", array()), false)) : (false)), "html", null, true);
            echo "',
        site: {
            delimiter: '";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array(), "any", false, true), "summary", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array(), "any", false, true), "summary", array(), "any", false, true), "delimiter", array()), "===")) : ("===")), "html", null, true);
            echo "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "params", array(0 => null, 1 => true), "method"));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 23
                echo "        window.GravAdmin.uri_params.";
                echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                echo " = \"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["value"], array("\\" => "/")), "html", null, true);
                echo "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  80 => 23,  76 => 22,  68 => 17,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  46 => 11,  40 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if authorize(['admin.login', 'admin.super']) %}*/
/* <script type="text/javascript">*/
/*     window.GravAdmin = window.GravAdmin || {};*/
/*     window.GravAdmin.config = {*/
/*         base_url_relative: '{{ base_url_relative }}',*/
/*         route: '{{ admin.route|trim('/') }}',*/
/*         param_sep: '{{ config.system.param_sep }}',*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*         enable_auto_updates_check: '{{ config.plugins.admin.enable_auto_updates_check }}',*/
/*         {% endif %}*/
/*         admin_timeout: '{{ config.plugins.admin.session.timeout ?: 1800 }}',*/
/*         admin_nonce: '{{ admin.getNonce }}',*/
/*         language: '{{ grav.user.language|default('en') }}',*/
/*         pro_enabled: '{{ config.plugins["admin-pro"].enabled }}',*/
/*         local_notifications: '{{ config.system.local_notifications|default(false) }}',*/
/*         site: {*/
/*             delimiter: '{{ config.site.summary.delimiter|default('===') }}'*/
/*         }*/
/*     };*/
/*     window.GravAdmin.uri_params = {};*/
/* */
/*     {% for param, value in grav.uri.params(null, true) %}*/
/*         window.GravAdmin.uri_params.{{param}} = "{{value|replace({'\\': '/'})}}";*/
/*     {% endfor %}*/
/* </script>*/
/* {% endif %}*/
/* */
