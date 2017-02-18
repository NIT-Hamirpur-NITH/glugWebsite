<?php

/* partials/register.html.twig */
class __TwigTemplate_1fb682c121a5931291e3db3554eb23e17917be9fd943058414c767a9b92aad4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/register.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
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

    // line 4
    public function block_page($context, array $blocks = array())
    {
        // line 5
        echo "    <section id=\"admin-login\" class=\"default-glow-shadow ";
        echo twig_escape_filter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
        echo "\">
        <h1>
            ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
        </h1>

        ";
        // line 10
        $this->loadTemplate("partials/messages.html.twig", "partials/register.html.twig", 10)->display($context);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('instructions', $context, $blocks);
        // line 13
        echo "
        <form method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
        echo "\">
            <div class=\"padding\">
            ";
        // line 16
        $this->displayBlock('form', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
            </div>
        </form>
    </section>
";
    }

    // line 12
    public function block_instructions($context, array $blocks = array())
    {
    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  77 => 12,  68 => 18,  65 => 17,  63 => 16,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  42 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% set scope = scope ?: 'data.' %}*/
/* */
/* {% block page %}*/
/*     <section id="admin-login" class="default-glow-shadow {{ classes }}">*/
/*         <h1>*/
/*             {{ title }}*/
/*         </h1>*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% block instructions %}{% endblock %}*/
/* */
/*         <form method="post" action="{{ base_url_relative }}">*/
/*             <div class="padding">*/
/*             {% block form %}{% endblock %}*/
/* */
/*             {{ nonce_field('form', 'form-nonce')|raw }}*/
/*             </div>*/
/*         </form>*/
/*     </section>*/
/* {% endblock %}*/
