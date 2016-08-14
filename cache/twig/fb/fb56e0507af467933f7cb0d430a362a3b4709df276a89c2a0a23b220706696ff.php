<?php

/* forms/fields/taxonomy/taxonomy.html.twig */
class __TwigTemplate_17680bf65313e7fe64d51e89fe68c89019db7ae73a6e7eb65d319050ed8a5cf3 extends Twig_Template
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
        $context["taxonomies"] = (((null === (isset($context["taxonomies"]) ? $context["taxonomies"] : null))) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => "config/site"), "method"), "taxonomies", array())) : ((isset($context["taxonomies"]) ? $context["taxonomies"] : null)));
        // line 2
        $context["parentname"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxonomies"]) ? $context["taxonomies"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 5
            echo "
    ";
            // line 6
            $context["value"] = $this->env->getExtension('GravTwigExtension')->arrayFunc((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => ("header.taxonomy." . $context["name"])), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => ("header.taxonomy." . $context["name"])), "method"), array())) : (array())));
            // line 7
            echo "    ";
            $context["sub_taxonomies"] = twig_get_array_keys_filter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "taxonomy", array(), "any", false, true), "taxonomy", array(), "any", false, true), $context["name"], array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "taxonomy", array(), "any", false, true), "taxonomy", array(), "any", false, true), $context["name"]), array())) : (array())));
            // line 8
            echo "    ";
            $context["list"] = array_unique(twig_array_merge(twig_array_merge(array(), (isset($context["sub_taxonomies"]) ? $context["sub_taxonomies"] : null)), (isset($context["value"]) ? $context["value"] : null)));
            // line 9
            echo "
    ";
            // line 10
            $context["field"] = array("type" => "select", "classes" => "fancy create", "label" => twig_capitalize_string_filter($this->env,             // line 13
$context["name"]), "name" => ((            // line 14
(isset($context["parentname"]) ? $context["parentname"] : null) . ".") . $context["name"]), "multiple" => true, "options" =>             // line 16
(isset($context["list"]) ? $context["list"] : null), "selectize" => array("create" => true));
            // line 21
            echo "
    ";
            // line 22
            $this->loadTemplate(array(0 => "forms/fields/select/select.html.twig"), "forms/fields/taxonomy/taxonomy.html.twig", 22)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/taxonomy/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  62 => 21,  60 => 16,  59 => 14,  58 => 13,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set taxonomies = (taxonomies is null ? admin.data('config/site').taxonomies : taxonomies) %}*/
/* {% set parentname = field.name %}*/
/* */
/* {% for name in taxonomies %}*/
/* */
/*     {% set value = array(data.value('header.taxonomy.' ~ name)|default([])) %}*/
/*     {% set sub_taxonomies = attribute(grav.taxonomy.taxonomy, name)|default([])|keys %}*/
/*     {% set list = []|merge(sub_taxonomies)|merge(value)|array_unique %}*/
/* */
/*     {% set field = {*/
/*         type: 'select',*/
/*         classes: 'fancy create',*/
/*         label: name|capitalize,*/
/*         name: parentname ~ '.' ~ name,*/
/*         multiple: true,*/
/*         options: list,*/
/*         selectize: {*/
/*             create: true*/
/*         }*/
/*     } %}*/
/* */
/*     {% include ['forms/fields/select/select.html.twig'] %}*/
/* {% endfor %}*/
/* */
