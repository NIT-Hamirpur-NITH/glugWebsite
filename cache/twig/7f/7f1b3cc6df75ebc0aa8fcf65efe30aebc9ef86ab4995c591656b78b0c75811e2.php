<?php

/* forms/fields/list/list.html.twig */
class __TwigTemplate_cdaf2d265f6f21fb17883236dbaddf2454df8263c7759457ef104eba4239a15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            '__internal_8ded9aca808868f6146241713830070eab0e722e8df87d8375dd3330b9eedc86' => array($this, 'block___internal_8ded9aca808868f6146241713830070eab0e722e8df87d8375dd3330b9eedc86'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["name"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
        // line 5
        $context["btnLabel"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnLabel", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnLabel", array())) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnSortLabel", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "btnSortLabel", array())) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "controls", array()), "bottom")) : ("bottom"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-label";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
            echo "\"
                       ";
            // line 15
            if ((isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if ((isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        <label";
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . "\"")) : (""));
        echo ">
            ";
        // line 23
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 24
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 31
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo "\" data-type=\"collection\">
            ";
        // line 40
        if (twig_in_filter((isset($context["fieldControls"]) ? $context["fieldControls"] : null), array(0 => "top", 1 => "both"))) {
            // line 41
            echo "                <div class=\"collection-actions";
            echo (( !twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) ? (" hidden") : (""));
            echo "\">
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
            // line 43
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
            echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
            // line 45
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
            echo "</button>
                    ";
            // line 46
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array())) {
                // line 47
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 48
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, (isset($context["btnSortLabel"]) ? $context["btnSortLabel"] : null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array()), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 50
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"top\"
                            ";
            // line 51
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : null))), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 54
        echo "            <ul data-collection-holder=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
                ";
        // line 55
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()) === false)) {
            // line 56
            echo "                    data-collection-nosort
                ";
        }
        // line 57
        echo ">
                ";
        // line 58
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 60
                echo "                    ";
                $context["itemName"] = (((isset($context["name"]) ? $context["name"] : null)) ? ((((isset($context["name"]) ? $context["name"] : null) . ".") . $context["key"])) : ($context["key"]));
                // line 61
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, (isset($context["itemName"]) ? $context["itemName"] : null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"";
                echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsed", array())) ? ("collection-collapsed") : (""));
                echo "\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 64
                    echo "                            ";
                    if ((is_string($__internal_329c4424dff0b064ef063f7841b8f77841d08024b3bd6c460a74e92c8619cea8 = $context["childName"]) && is_string($__internal_7dfa7a9d5da4d568cd355351a671d6bf8e5637cbbc332b9e4177de663dc6e0bc = ".") && ('' === $__internal_7dfa7a9d5da4d568cd355351a671d6bf8e5637cbbc332b9e4177de663dc6e0bc || 0 === strpos($__internal_329c4424dff0b064ef063f7841b8f77841d08024b3bd6c460a74e92c8619cea8, $__internal_7dfa7a9d5da4d568cd355351a671d6bf8e5637cbbc332b9e4177de663dc6e0bc)))) {
                        // line 65
                        echo "                                ";
                        $context["childKey"] = trim($context["childName"], ".");
                        // line 66
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute($context["val"], twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                        // line 67
                        echo "                                ";
                        $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                        // line 68
                        echo "                            ";
                    } else {
                        // line 69
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 70
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"])), "method");
                        // line 71
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], array("*" => $context["key"]));
                        // line 72
                        echo "                            ";
                    }
                    // line 73
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                    // line 74
                    echo "
                            ";
                    // line 75
                    if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                        // line 76
                        echo "                                ";
                        // line 77
                        $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 77)->display(array_merge($context, array("field" =>                         // line 78
$context["child"], "value" => $context["key"])));
                        // line 80
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", array())) {
                        // line 81
                        echo "                                ";
                        $context["originalValue"] = (isset($context["childValue"]) ? $context["childValue"] : null);
                        // line 82
                        echo "                                ";
                        // line 83
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 84
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 83)->display(array_merge($context, array("field" =>                         // line 86
$context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null))));
                        // line 88
                        echo "                            ";
                    }
                    // line 89
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                        <div class=\"item-actions\">
                            <i class=\"fa fa-chevron-circle-";
                // line 91
                echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsed", array())) ? ("right") : ("down"));
                echo "\" data-action=\"";
                echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsed", array())) ? ("expand") : ("collapse"));
                echo "\"></i>
                            <br />
                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                ";
        }
        // line 98
        echo "            </ul>
            ";
        // line 99
        if (twig_in_filter((isset($context["fieldControls"]) ? $context["fieldControls"] : null), array(0 => "bottom", 1 => "both"))) {
            // line 100
            echo "            <div class=\"collection-actions\">
                <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                        ";
            // line 102
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
            echo "</button>
                <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                        ";
            // line 104
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
            echo "</button>
                ";
            // line 105
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array())) {
                // line 106
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 107
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, (isset($context["btnSortLabel"]) ? $context["btnSortLabel"] : null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortby", array()), "html", null, true);
                echo "'</button>
                ";
            }
            // line 109
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        ";
            // line 110
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : null))), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 114
        $context["itemName"] = (((isset($context["name"]) ? $context["name"] : null)) ? (((isset($context["name"]) ? $context["name"] : null) . ".*")) : ("*"));
        // line 115
        echo "<div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(        $this->renderBlock("__internal_8ded9aca808868f6146241713830070eab0e722e8df87d8375dd3330b9eedc86", $context, $blocks), array("   " => " ", "
" => " ")), "html_attr");
        // line 152
        echo "\"></div>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
        ";
    }

    // line 115
    public function block___internal_8ded9aca808868f6146241713830070eab0e722e8df87d8375dd3330b9eedc86($context, array $blocks = array())
    {
        // line 116
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, (isset($context["itemName"]) ? $context["itemName"] : null), "html", null, true);
        echo "\">
                    ";
        // line 117
        if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()) === false)) {
            // line 118
            echo "                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 120
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 122
                if ((is_string($__internal_7b0db0473fd37a18ea3f516bda34157616b5a4ddd1b674e0ef8c9a56b85f6105 = $context["childName"]) && is_string($__internal_1144d506b85e021c29d019fc9b0df3e49549dab54dd593e8349d168c0ad11163 = ".") && ('' === $__internal_1144d506b85e021c29d019fc9b0df3e49549dab54dd593e8349d168c0ad11163 || 0 === strpos($__internal_7b0db0473fd37a18ea3f516bda34157616b5a4ddd1b674e0ef8c9a56b85f6105, $__internal_1144d506b85e021c29d019fc9b0df3e49549dab54dd593e8349d168c0ad11163)))) {
                    // line 123
                    $context["childKey"] = trim($context["childName"], ".");
                    // line 124
                    $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                } else {
                    // line 126
                    $context["childKey"] = $context["childName"];
                    // line 127
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                }
                // line 129
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 131
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 133
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 133)->display(array_merge($context, array("field" =>                     // line 134
$context["child"], "value" => null)));
                } elseif ($this->getAttribute(                // line 136
$context["child"], "type", array())) {
                    // line 138
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 139
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 138)->display(array_merge($context, array("field" =>                     // line 141
$context["child"], "value" => null)));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                    <div class=\"item-actions\">
                        <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                        <br />
                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>";
        }
        // line 151
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 151,  522 => 145,  507 => 141,  506 => 139,  505 => 138,  503 => 136,  501 => 134,  500 => 133,  498 => 131,  496 => 129,  493 => 127,  491 => 126,  488 => 124,  486 => 123,  484 => 122,  467 => 121,  465 => 120,  461 => 118,  459 => 117,  454 => 116,  451 => 115,  445 => 35,  441 => 34,  436 => 33,  433 => 32,  425 => 154,  421 => 152,  417 => 115,  415 => 114,  405 => 110,  402 => 109,  389 => 107,  380 => 106,  378 => 105,  370 => 104,  361 => 102,  357 => 100,  355 => 99,  352 => 98,  349 => 97,  327 => 91,  324 => 90,  310 => 89,  307 => 88,  305 => 86,  304 => 84,  303 => 83,  301 => 82,  298 => 81,  295 => 80,  293 => 78,  292 => 77,  290 => 76,  288 => 75,  285 => 74,  282 => 73,  279 => 72,  276 => 71,  273 => 70,  270 => 69,  267 => 68,  264 => 67,  261 => 66,  258 => 65,  255 => 64,  238 => 63,  228 => 61,  225 => 60,  207 => 59,  205 => 58,  202 => 57,  198 => 56,  196 => 55,  191 => 54,  181 => 51,  178 => 50,  165 => 48,  156 => 47,  154 => 46,  146 => 45,  137 => 43,  131 => 41,  129 => 40,  125 => 39,  121 => 37,  119 => 32,  113 => 31,  106 => 28,  100 => 26,  92 => 24,  90 => 23,  85 => 22,  79 => 19,  76 => 18,  72 => 17,  67 => 16,  63 => 15,  59 => 14,  53 => 12,  51 => 11,  44 => 10,  41 => 9,  37 => 1,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set name = field.name %}
{% set btnLabel = field.btnLabel is defined ? field.btnLabel : \"PLUGIN_ADMIN.ADD_ITEM\" %}
{% set btnSortLabel = field.btnSortLabel is defined ? field.btnSortLabel : \"PLUGIN_ADMIN.SORT_BY\" %}
{% set fieldControls = field.controls|default('bottom') %}

{% block contents %}
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        {% if field.toggleable %}
            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\">
                <input type=\"checkbox\"
                       id=\"toggleable_{{ field.name }}\"
                       {% if toggleableChecked %}value=\"1\"{% endif %}
                       name=\"toggleable_{{ (scope ~ field.name)|fieldName }}\"
                       {% if toggleableChecked %}checked=\"checked\"{% endif %}
                >
                <label for=\"toggleable_{{ field.name }}\"></label>
            </span>
        {% endif %}
        <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\"
        {% block global_attributes %}
        data-grav-field=\"{{ field.type }}\"
        data-grav-disabled=\"{{ toggleableChecked }}\"
        data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
        {% endblock %}
    >

        <div class=\"form-list-wrapper {{ field.size }}\" data-type=\"collection\">
            {% if fieldControls in ['top', 'both'] %}
                <div class=\"collection-actions{{ not value|length ? ' hidden' : '' }}\">
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                    {% if field.sortby %}
                        <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                    {% endif %}
                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"top\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
                </div>
            {% endif %}
            <ul data-collection-holder=\"{{ name }}\"
                {% if field.sort is same as(false) %}
                    data-collection-nosort
                {% endif %}>
                {% if field.fields %}
                {% for key, val in value %}
                    {% set itemName = name ? name ~ '.' ~ key : key %}
                    <li data-collection-item=\"{{ itemName }}\" data-collection-key=\"{{ key }}\" class=\"{{ field.collapsed ? 'collection-collapsed' : '' }}\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        {% for childName, child in field.fields %}
                            {% if childName starts with '.' %}
                                {% set childKey = childName|trim('.') %}
                                {% set childValue = val[childName[1:]] %}
                                {% set childName = itemName ~ childName %}
                            {% else %}
                                {% set childKey = childName %}
                                {% set childValue = data.value(scope ~ childName) %}
                                {% set childName = childName|replace({'*': key}) %}
                            {% endif %}
                            {% set child = child|merge({ name: childName }) %}

                            {% if child.type == 'key' %}
                                {%
                                    include 'forms/fields/key/key.html.twig'
                                    with { field: child, value: key }
                                %}
                            {% elseif child.type %}
                                {% set originalValue = childValue %}
                                {%
                                    include [
                                        \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                        'forms/fields/text/text.html.twig'
                                    ] with { field: child, value: childValue }
                                %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"item-actions\">
                            <i class=\"fa fa-chevron-circle-{{ field.collapsed ? 'right' : 'down' }}\" data-action=\"{{ field.collapsed ? 'expand' : 'collapse' }}\"></i>
                            <br />
                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                {% endfor %}
                {% endif %}
            </ul>
            {% if fieldControls in ['bottom', 'both'] %}
            <div class=\"collection-actions\">
                <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                {% if field.sortby %}
                    <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                {% endif %}
                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
            </div>
            {% endif %}

            {%- set itemName = name ? name ~ '.*' : '*' -%}
            <div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"{%- filter replace({'   ': ' ', '\\n': ' '})|e('html_attr') -%}
                <li data-collection-item=\"{{ itemName }}\">
                    {% if field.sort is not same as(false) %}
                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    {% endif %}
                    {%- if field.fields -%}
                    {%- for childName, child in field.fields -%}
                        {%- if childName starts with '.' -%}
                            {%- set childKey = childName|trim('.') -%}
                            {%- set childName = itemName ~ childName -%}
                        {%- else %}
                            {%- set childKey = childName -%}
                            {%- set childName = childName|replace({'*': key}) -%}
                        {%- endif %}
                        {%- set child = child|merge({ name: childName }) -%}

                        {%- if child.type == 'key' -%}
                            {%-
                                include 'forms/fields/key/key.html.twig'
                                with { field: child, value: null }
                            -%}
                        {%- elseif child.type -%}
                            {%-
                                include [
                                    \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                    'forms/fields/text/text.html.twig'
                                ] with { field: child, value: null }
                            -%}
                        {%- endif -%}
                    {%- endfor %}
                    <div class=\"item-actions\">
                        <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                        <br />
                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>
                    {%- endif -%}
                </li>
            {%- endfilter -%}\"></div>

            <div style=\"display: none;\" data-collection-config=\"{{ name }}\"></div>
        </div>
    </div>
{% endblock %}

", "forms/fields/list/list.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
