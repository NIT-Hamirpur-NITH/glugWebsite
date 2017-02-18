<?php

/* partials/release-toggle.html.twig */
class __TwigTemplate_c381c065053c843e9d314abac81dde06352967175bd4adc4e4e6105ef372f71c extends Twig_Template
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
        echo "<form id=\"gpm-release-toggle\">
    <div class=\"switch-toggle switch-grav\" data-url=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/ajax.json/task:gpmRelease\">
        <input type=\"radio\" value=\"stable\" id=\"stable\" name=\"channel-switch\" class=\"highlight\" ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "gpm", array()), "releases", array()) == "stable")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"stable\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STABLE"), "html", null, true);
        echo "</label>
        <input type=\"radio\" value=\"testing\" id=\"testing\" name=\"channel-switch\" class=\"highlight\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "gpm", array()), "releases", array()) == "testing")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"testing\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TESTING"), "html", null, true);
        echo "</label>
        <a></a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/release-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  36 => 5,  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form id="gpm-release-toggle">*/
/*     <div class="switch-toggle switch-grav" data-url="{{ base_url }}/ajax.json/task:gpmRelease">*/
/*         <input type="radio" value="stable" id="stable" name="channel-switch" class="highlight" {% if config.system.gpm.releases == 'stable' %} checked="checked"{% endif %}>*/
/*         <label for="stable">{{ "PLUGIN_ADMIN.STABLE"|tu }}</label>*/
/*         <input type="radio" value="testing" id="testing" name="channel-switch" class="highlight" {% if config.system.gpm.releases == 'testing' %} checked="checked"{% endif %}>*/
/*         <label for="testing">{{ "PLUGIN_ADMIN.TESTING"|tu }}</label>*/
/*         <a></a>*/
/*     </div>*/
/* </form>*/
/* */
