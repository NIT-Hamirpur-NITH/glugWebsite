<?php

/* @Page:/home/ubuntu/workspace/user/plugins/error/pages */
class __TwigTemplate_8b1be8f8b7df7c533ba2db77a16a7a1820bc11547307d2e639aafe922b42384b extends Twig_Template
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
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/home/ubuntu/workspace/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}*/
/* */
/* */
