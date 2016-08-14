<?php

/* partials/nav.html.twig */
class __TwigTemplate_fb38596be4f01f7d41ea88b10fa0e25cba33677ea3bf5885f8ab25472e29f528 extends Twig_Template
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
            echo "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "activate", array()) == "hover")) ? ("true") : ("false"));
            echo "\" data-quickopen-delay=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "hover_delay", array()), "html", null, true);
            echo "\">
        ";
            // line 3
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "activate", array()) != "hover")) {
                // line 4
                echo "        <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-double-right\"></i></div>
        ";
            }
            // line 6
            echo "        <div id=\"admin-logo\">
            ";
            // line 7
            $this->loadTemplate("partials/logo.html.twig", "partials/nav.html.twig", 7)->display($context);
            // line 8
            echo "        </div>

        ";
            // line 11
            echo "        <div id=\"admin-user-details\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/user/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array()));
            echo "\">
                <img src=\"https://www.gravatar.com/avatar/";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "email", array())), "html", null, true);
            echo "?s=47\" />

                <div class=\"admin-user-names\">
                    <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "fullname", array()));
            echo "</h4>
                    <h5>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "title", array()));
            echo "</h5>
                </div>
            </a>
        </div>
        ";
            // line 22
            echo "
        <div class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                <li class=\"";
            // line 25
            echo ((((isset($context["location"]) ? $context["location"] : null) == "dashboard")) ? ("selected") : (""));
            echo "\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-th\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
            echo "</em></a>
                </li>
                ";
            // line 28
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration", 1 => "admin.super"))) {
                // line 29
                echo "                    <li class=\"";
                echo ((((((isset($context["location"]) ? $context["location"] : null) == "system") || ((isset($context["location"]) ? $context["location"] : null) == "site")) || ((isset($context["location"]) ? $context["location"] : null) == "config"))) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/config/system\"><i class=\"fa fa-fw fa-wrench\"></i><em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
                echo "</em></a>
                    </li>
                ";
            }
            // line 33
            echo "                ";
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
                // line 34
                echo "                    <li class=\"";
                echo ((((isset($context["location"]) ? $context["location"] : null) == "pages")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/pages\">
                            <i class=\"fa fa-fw fa-file-text-o\"></i>
                            <em>";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"), "html", null, true);
                echo "</em>
                        <span class=\"badges\">
                            <span class=\"badge count\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "pagesCount", array()), "html", null, true);
                echo "</span>
                        </span>
                        </a>
                    </li>
                ";
            }
            // line 44
            echo "                ";
            if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array())) {
                // line 45
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array()));
                foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                    // line 46
                    echo "                        ";
                    if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => ("admin." . $this->getAttribute($context["item"], "route", array())), 1 => "admin.super"))) {
                        // line 47
                        echo "                            <li class=\"";
                        echo ((((isset($context["location"]) ? $context["location"] : null) == $this->getAttribute($context["item"], "route", array()))) ? ("selected") : (""));
                        echo "\">
                                <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "route", array()), "html", null, true);
                        echo "\">
                                    <i class=\"fa fa-fw ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
                                    <em>";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($context["label"]), "html", null, true);
                        echo "</em>
                                </a>
                            </li>
                        ";
                    }
                    // line 54
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                ";
            }
            // line 56
            echo "                ";
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.plugins", 1 => "admin.super"))) {
                // line 57
                echo "                    <li class=\"";
                echo ((((isset($context["location"]) ? $context["location"] : null) == "plugins")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/plugins\">
                            <i class=\"fa fa-fw fa-plug\"></i>
                            <em>";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS"), "html", null, true);
                echo "</em>
                        <span class=\"badges\">
                                <span class=\"badge updates\"></span>
                                <span class=\"badge count\">";
                // line 63
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array())), "html", null, true);
                echo "</span>
                            </span>
                        </a>
                    </li>
                ";
            }
            // line 68
            echo "                ";
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.themes", 1 => "admin.super"))) {
                // line 69
                echo "                    <li class=\"";
                echo ((((isset($context["location"]) ? $context["location"] : null) == "themes")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes\">
                            <i class=\"fa fa-fw fa-tint\"></i>
                            <em>";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES"), "html", null, true);
                echo "</em>
                        <span class=\"badges\">
                            <span class=\"badge updates\"></span>
                            <span class=\"badge count\">";
                // line 75
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array())), "html", null, true);
                echo "</span>
                        </span>
                        </a>
                    </li>
                ";
            }
            // line 80
            echo "
                ";
            // line 81
            try {
                $this->loadTemplate("nav-pro.html.twig", "partials/nav.html.twig", 81)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 82
            echo "
                <li>
                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</em></a>
                </li>
            </ul>
        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 84,  232 => 82,  225 => 81,  222 => 80,  214 => 75,  208 => 72,  203 => 70,  198 => 69,  195 => 68,  187 => 63,  181 => 60,  176 => 58,  171 => 57,  168 => 56,  165 => 55,  159 => 54,  152 => 50,  148 => 49,  142 => 48,  137 => 47,  134 => 46,  129 => 45,  126 => 44,  118 => 39,  113 => 37,  108 => 35,  103 => 34,  100 => 33,  92 => 30,  87 => 29,  85 => 28,  78 => 26,  74 => 25,  69 => 22,  62 => 17,  58 => 16,  52 => 13,  46 => 12,  43 => 11,  39 => 8,  37 => 7,  34 => 6,  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if authorize(['admin.login', 'admin.super']) %}*/
/*     <nav id="admin-sidebar" data-quickopen="{{ config.plugins.admin.sidebar.activate == 'hover' ? 'true' : 'false' }}" data-quickopen-delay="{{ config.plugins.admin.sidebar.hover_delay }}">*/
/*         {% if config.plugins.admin.sidebar.activate != 'hover' %}*/
/*         <div id="open-handle" data-sidebar-toggle><i class="fa fa-angle-double-right"></i></div>*/
/*         {% endif %}*/
/*         <div id="admin-logo">*/
/*             {% include 'partials/logo.html.twig' %}*/
/*         </div>*/
/* */
/*         {#{% if admin.authorize %}#}*/
/*         <div id="admin-user-details">*/
/*             <a href="{{ base_url_relative }}/user/{{ admin.user.username|e }}">*/
/*                 <img src="https://www.gravatar.com/avatar/{{ admin.user.email|md5 }}?s=47" />*/
/* */
/*                 <div class="admin-user-names">*/
/*                     <h4>{{ admin.user.fullname|e }}</h4>*/
/*                     <h5>{{ admin.user.title|e }}</h5>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*         {#{% endif %}#}*/
/* */
/*         <div class="admin-menu-wrapper">*/
/*             <ul id="admin-menu">*/
/*                 <li class="{{ (location == 'dashboard') ? 'selected' : '' }}">*/
/*                     <a href="{{ base_url_relative }}"><i class="fa fa-fw fa-th"></i><em>{{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</em></a>*/
/*                 </li>*/
/*                 {% if authorize(['admin.configuration', 'admin.super']) %}*/
/*                     <li class="{{ (location == 'system' or location == 'site' or location == 'config') ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/config/system"><i class="fa fa-fw fa-wrench"></i><em>{{ "PLUGIN_ADMIN.CONFIGURATION"|tu }}</em></a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if authorize(['admin.pages', 'admin.super']) %}*/
/*                     <li class="{{ (location == 'pages') ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/pages">*/
/*                             <i class="fa fa-fw fa-file-text-o"></i>*/
/*                             <em>{{ "PLUGIN_ADMIN.PAGES"|tu }}</em>*/
/*                         <span class="badges">*/
/*                             <span class="badge count">{{ admin.pagesCount }}</span>*/
/*                         </span>*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if grav.twig.plugins_hooked_nav %}*/
/*                     {% for label, item in grav.twig.plugins_hooked_nav %}*/
/*                         {% if authorize(['admin.' ~ item.route, 'admin.super']) %}*/
/*                             <li class="{{ (location == item.route) ? 'selected' : '' }}">*/
/*                                 <a href="{{ base_url_relative }}/{{ item.route }}">*/
/*                                     <i class="fa fa-fw {{ item.icon }}"></i>*/
/*                                     <em>{{ label|tu }}</em>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if authorize(['admin.plugins', 'admin.super']) %}*/
/*                     <li class="{{ (location == 'plugins') ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/plugins">*/
/*                             <i class="fa fa-fw fa-plug"></i>*/
/*                             <em>{{ "PLUGIN_ADMIN.PLUGINS"|tu }}</em>*/
/*                         <span class="badges">*/
/*                                 <span class="badge updates"></span>*/
/*                                 <span class="badge count">{{ admin.plugins|length }}</span>*/
/*                             </span>*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if authorize(['admin.themes', 'admin.super']) %}*/
/*                     <li class="{{ (location == 'themes') ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/themes">*/
/*                             <i class="fa fa-fw fa-tint"></i>*/
/*                             <em>{{ "PLUGIN_ADMIN.THEMES"|tu }}</em>*/
/*                         <span class="badges">*/
/*                             <span class="badge updates"></span>*/
/*                             <span class="badge count">{{ admin.themes|length }}</span>*/
/*                         </span>*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*                 {% include 'nav-pro.html.twig' ignore missing %}*/
/* */
/*                 <li>*/
/*                     <a href="{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}"><i class="fa fa-fw fa-sign-out"></i><em>{{ "PLUGIN_ADMIN.LOGOUT"|tu }}</em></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* {% endif %}*/
/* */
