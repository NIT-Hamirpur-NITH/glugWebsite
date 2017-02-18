<?php

/* modular/features.html.twig */
class __TwigTemplate_21a8b95d66a7584f44b2fc8ca48a3fc68363f49cc9db6af912540185de0e04fe extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    <div class=\"container\">
        ";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <div class=\"feature-items\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 6
            echo "               <div class=\"feature\">
                ";
            // line 7
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 8
                echo "                <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
                <div class=\"feature-content push\">
                ";
            } else {
                // line 11
                echo "                <div class=\"feature-content\">
                ";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 14
                echo "                <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
                ";
            }
            // line 16
            echo "                ";
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 17
                echo "                <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
                ";
            }
            // line 19
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  68 => 19,  62 => 17,  59 => 16,  53 => 14,  50 => 13,  46 => 11,  39 => 8,  37 => 7,  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row features {{ page.header.class}}\">
    <div class=\"container\">
        {{ content }}
        <div class=\"feature-items\">
        {% for feature in page.header.features %}
               <div class=\"feature\">
                {% if feature.icon %}
                <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
                <div class=\"feature-content push\">
                {% else %}
                <div class=\"feature-content\">
                {% endif %}
                {% if feature.header %}
                <h4>{{ feature.header }}</h4>
                {% endif %}
                {% if feature.text %}
                <p>{{ feature.text }}</p>
                {% endif %}
                </div>
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "modular/features.html.twig", "/home/ubuntu/workspace/user/themes/bootstrap/templates/modular/features.html.twig");
    }
}
