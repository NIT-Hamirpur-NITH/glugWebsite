<?php

/* partials/page-legend.html.twig */
class __TwigTemplate_9e3a03bf7548bd5bce4dcd43e9fd93e13a4501a4b8aa6cebd85a0a868b7b4c2b extends Twig_Template
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
        $context["legend"] = array("VISIBLE" => "", "NON_ROUTABLE" => "not-routable", "NON_VISIBLE" => "not-visible", "MODULAR" => "modular");
        // line 2
        echo "<div id=\"pages-legend\">
    <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LEGEND"), "html", null, true);
        echo ":</strong>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["legend"]) ? $context["legend"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["class"]) {
            // line 6
            echo "        <li><i class=\"page-icon fa fa-fw fa-circle-o ";
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . $context["key"])), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "partials/page-legend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set legend = {'VISIBLE':'', 'NON_ROUTABLE':'not-routable', 'NON_VISIBLE':'not-visible', 'MODULAR':'modular'} %}*/
/* <div id="pages-legend">*/
/*     <strong>{{ 'PLUGIN_ADMIN.LEGEND'|tu }}:</strong>*/
/*     <ul>*/
/*         {% for key, class in legend %}*/
/*         <li><i class="page-icon fa fa-fw fa-circle-o {{ class }}"></i> {{ ('PLUGIN_ADMIN.'~key)|tu }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* */
/* */
