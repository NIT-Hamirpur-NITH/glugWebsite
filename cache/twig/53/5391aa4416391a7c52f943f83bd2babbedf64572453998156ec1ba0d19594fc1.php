<?php

/* partials/base.html.twig */
class __TwigTemplate_fd3b273fe1e57290f23ff6834239dde06c15f5d25dd1b37a231ba94ff35e3ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "    </head>

      <body class=\"";
        // line 32
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 42
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
        ";
        // line 48
        $this->displayBlock('bottom', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 99), "method");
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css-compiled/theme.css", 1 => 98), "method");
        // line 14
        echo "        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 19
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 20
        echo "
            ";
        // line 21
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 23
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 24
            echo "            ";
        }
        // line 25
        echo "
        ";
    }

    // line 32
    public function block_body_classes($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
    }

    // line 36
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 37
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "        ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 48
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 48,  183 => 41,  178 => 40,  174 => 38,  171 => 37,  168 => 36,  162 => 32,  157 => 25,  154 => 24,  151 => 23,  148 => 22,  146 => 21,  143 => 20,  140 => 19,  137 => 18,  134 => 17,  130 => 14,  127 => 13,  124 => 12,  121 => 11,  113 => 27,  111 => 17,  105 => 15,  103 => 11,  99 => 10,  90 => 9,  88 => 8,  83 => 5,  80 => 4,  74 => 49,  72 => 48,  64 => 42,  61 => 41,  59 => 40,  56 => 39,  53 => 36,  50 => 35,  47 => 34,  45 => 33,  41 => 32,  37 => 30,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        {% include 'partials/metadata.html.twig' %}
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
        {% block stylesheets %}
            {% do assets.add('theme://css/font-awesome.min.css',99) %}
            {% do assets.add('theme://css-compiled/theme.css',98) %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery', 101) %}
            {% do assets.add('theme://js/modernizr.custom.71422.js', 100) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}

        {% endblock %}
        {{ assets.js() }}

        {% endblock head%}
    </head>

      <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
        {% block bottom %}{% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/home/ubuntu/workspace/user/themes/bootstrap/templates/partials/base.html.twig");
    }
}
