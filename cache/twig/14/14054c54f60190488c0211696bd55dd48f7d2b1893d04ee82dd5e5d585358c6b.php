<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_a6a30a3ee532bfe089fbd483ac1030d51626a01e5de4605af72754fb21732c18 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        ";
            // line 9
            $context["uploadLimit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024);
            // line 10
            echo "        ";
            $context["dropzoneSettings"] = array("maxFileSize" => (isset($context["uploadLimit"]) ? $context["uploadLimit"] : null));
            // line 11
            echo "        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo ".json\"
             data-media-local=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo "\"
             data-dropzone-options=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["dropzoneSettings"]) ? $context["dropzoneSettings"] : null)), "html_attr");
            echo "\"></div>
        <span>";
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html", null, true);
            echo "</span>
    </div>
</div>
";
        } else {
            // line 20
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
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
        return array (  74 => 23,  69 => 20,  61 => 16,  57 => 15,  51 => 14,  45 => 13,  41 => 11,  38 => 10,  36 => 9,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}

{% if exists %}
<div class=\"form-field grid vertical\">
    <div class=\"form-label\">
        <label>{{ field.label|tu }}</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        {% set uploadLimit = grav.config.system.media.upload_limit / 1024 / 1024 %}
        {% set dropzoneSettings = { maxFileSize: uploadLimit } %}
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"
             data-media-local=\"{{ base_url_relative_frontend|rtrim('/') }}/{{ admin.route|trim('/') }}\"
             data-dropzone-options=\"{{ dropzoneSettings|json_encode|e('html_attr') }}\"></div>
        <span>{{ value|join(\"\\n\") }}</span>
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|tu }}
        </div>
    </div>
</div>
{% endif %}
", "forms/fields/pagemedia/pagemedia.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/pagemedia/pagemedia.html.twig");
    }
}
