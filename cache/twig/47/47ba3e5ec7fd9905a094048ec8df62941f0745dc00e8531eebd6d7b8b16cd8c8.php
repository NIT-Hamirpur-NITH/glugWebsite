<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_0e84e2ceda8bbe36816768985616918985f32674c28ae780adf41634cbb37ddc extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["exists"]) ? $context["exists"] : null)) {
            // line 4
            echo "<div class=\"form-field grid vertical\">
    <div class=\"form-label\">
        <label>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        <div id=\"grav-dropzone\" class=\"dropzone\"></div>
        <span>";
            // line 10
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html", null, true);
            echo "</span>
    </div>
</div>
";
        } else {
            // line 14
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            <span class=\"note\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
            </span>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  45 => 14,  37 => 10,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* */
/* {% if exists %}*/
/* <div class="form-field grid vertical">*/
/*     <div class="form-label">*/
/*         <label>{{ field.label|tu }}</label>*/
/*     </div>*/
/*     <div class="form-data form-uploads-wrapper">*/
/*         <div id="grav-dropzone" class="dropzone"></div>*/
/*         <span>{{ value|join("\n") }}</span>*/
/*     </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="form-tab">*/
/*     <div class="form-field">*/
/*         <div class="form-label">*/
/*             <span class="note">*/
/*                 {{ "PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"|tu }}*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
