<?php

/* __string_template__aef3bb2e86ae46b415e69be36129421c9e1bfe8c7491dcc37382e043454c12da */
class __TwigTemplate_5917fc13eb5a72dacac69f580f011688f81d0a31071c912f6758bfce14d2c8ad extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_c_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__aef3bb2e86ae46b415e69be36129421c9e1bfe8c7491dcc37382e043454c12da";
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
/* {{ company_name }}: {{ __("change_order_status_c_subj", {"[order]": order_info.order_id}) }}*/
