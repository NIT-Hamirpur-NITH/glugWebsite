<?php

/* partials/login.html.twig */
class __TwigTemplate_d81118c205655a85458566d9bf56ba92d58454f28874c08c954e26251f9c1609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/login.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
            'instructions' => array($this, 'block_instructions'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
        echo "\">
        <h1>
            ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
        </h1>

        ";
        // line 12
        $this->loadTemplate("partials/messages.html.twig", "partials/login.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('instructions', $context, $blocks);
        // line 15
        echo "
        <form method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
        echo "\">
            <div class=\"padding\">
                ";
        // line 18
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "url", array()), "html", null, true);
        echo "\" />
                ";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
            </div>
        </form>
    </section>
</body>
";
    }

    // line 14
    public function block_instructions($context, array $blocks = array())
    {
    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  88 => 14,  78 => 20,  73 => 19,  71 => 18,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set scope = scope ?: 'data.' %}
{% block messages %}{% endblock %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow {{ classes }}\">
        <h1>
            {{ title }}
        </h1>

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        <form method=\"post\" action=\"{{ base_url_relative }}\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ uri.url }}\" />
                {{ nonce_field('admin-form', 'admin-nonce')|raw }}
            </div>
        </form>
    </section>
</body>
{% endblock %}
", "partials/login.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/partials/login.html.twig");
    }
}
