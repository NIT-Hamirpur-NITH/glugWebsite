<?php

/* partials/dashboard-pages.html.twig */
class __TwigTemplate_c8a9f7857d8e427aa5df95c60d10fbcfee2fbf911a8380846d9dd32d1c7d7ea1 extends Twig_Template
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
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
            // line 2
            echo "    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method"), "html", null, true);
            echo "/pages\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</a>
        </div>
        <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LATEST_PAGE_UPDATES"), "html", null, true);
            echo "</h1>
        <table>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array())) {
                    // line 9
                    echo "            <tr>
                <td class=\"triple page-title\">
                    <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                    echo "/pages/";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["latest"], "route", array()), "/"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "title", array()));
                    echo "</a></td>
                <td class=\"triple page-route\">";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "route", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->adminNicetimeFilter($this->getAttribute($context["latest"], "modified", array())), "html", null, true);
                    echo "</td>
            </tr>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </table>
    </div>
";
        } else {
            // line 18
            echo "    <div class=\"padding\">You don't have sufficient access to view the dashboard...</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/dashboard-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 15,  54 => 12,  46 => 11,  42 => 9,  37 => 8,  32 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if authorize(['admin.pages', 'admin.super']) %}*/
/*     <div id="latest">*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ uri.route(true) }}/pages"><i class="fa fa-fw fa-file-text-o"></i>{{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</a>*/
/*         </div>*/
/*         <h1>{{ "PLUGIN_ADMIN.LATEST_PAGE_UPDATES"|tu }}</h1>*/
/*         <table>*/
/*         {% for latest in admin.latestPages if admin.latestPages %}*/
/*             <tr>*/
/*                 <td class="triple page-title">*/
/*                     <a href="{{ base_url }}/pages/{{ latest.route|trim('/') }}"><i class="fa fa-fw fa-file-text-o"></i> {{ latest.title|e }}</a></td>*/
/*                 <td class="triple page-route">{{ latest.route }}</td><td>{{ latest.modified|adminNicetime }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% else %}*/
/*     <div class="padding">You don't have sufficient access to view the dashboard...</div>*/
/* {% endif %}*/
/* */
