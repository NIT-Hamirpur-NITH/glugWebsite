<?php

/* partials/blueprints-new-folder.html.twig */
class __TwigTemplate_bd44134e65a50c22e99fa55b3ca301657dffd4c6f90d0264816b007df22c280d extends Twig_Template
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
        $context["form_id"] = (((isset($context["form_id"]) ? $context["form_id"] : null)) ? ((isset($context["form_id"]) ? $context["form_id"] : null)) : ("blueprints"));
        // line 2
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 3
        echo "
<form id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["form_id"]) ? $context["form_id"] : null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, (isset($context["form_id"]) ? $context["form_id"] : null), "html", null, true);
        echo "\" data-grav-keepalive=\"true\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 7
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 8
                echo "            <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
                ";
                // line 9
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints-new-folder.html.twig", 9)->display($context);
                // line 10
                echo "            </div>
        ";
            }
            // line 12
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    <input type=\"hidden\" name=\"task\" value=\"saveNewFolder\" />
    <div class=\"button-bar\">
        <button class=\"button primary\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 19
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-new-folder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  85 => 16,  80 => 13,  66 => 12,  62 => 10,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  32 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set form_id = form_id ? form_id : 'blueprints' %}*/
/* {% set scope = scope ?: 'data.' %}*/
/* */
/* <form id="{{ form_id }}" method="post" data-grav-form="{{ form_id }}" data-grav-keepalive="true">*/
/*     {% for field in blueprints.fields %}*/
/*         {% if field.type %}*/
/*             {% set value = data.value(field.name) %}*/
/*             <div class="block block-{{field.type}}">*/
/*                 {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <input type="hidden" name="task" value="saveNewFolder" />*/
/*     <div class="button-bar">*/
/*         <button class="button primary">{{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*     </div>*/
/* */
/*     {{ nonce_field('admin-form', 'admin-nonce')|raw }}*/
/* */
/* </form>*/
/* */
