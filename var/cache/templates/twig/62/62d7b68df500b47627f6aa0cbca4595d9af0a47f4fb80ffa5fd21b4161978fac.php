<?php

/* __string_template__771a6f53bd3bd7622bf32a0a1b9294bd616aaa27ebede344b2642e023aafaa1b */
class __TwigTemplate_51bbffaba704bb52b47a8a99f15abf1b9a61b9f67aa37f20178e5911bd86e08e extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_o_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__771a6f53bd3bd7622bf32a0a1b9294bd616aaa27ebede344b2642e023aafaa1b";
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
/* {{ company_name }}: {{ __("change_order_status_o_subj", {"[order]": order_info.order_id}) }}*/
