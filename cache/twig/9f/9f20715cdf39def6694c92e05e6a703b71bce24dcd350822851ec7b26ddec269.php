<?php

/* partials/dashboard-feed.html.twig */
class __TwigTemplate_5e679e7739bf13a8ee5a15fd887f9eeb7ca2795f5fc7ce7d9d03720e3c051a2f extends Twig_Template
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
        echo "<div id=\"news-feed\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEWS_FEED"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"feed\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
    <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"news-feed\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        {{ \"PLUGIN_ADMIN.NEWS_FEED\"|tu }}
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"feed\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
    <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>

", "partials/dashboard-feed.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/partials/dashboard-feed.html.twig");
    }
}
