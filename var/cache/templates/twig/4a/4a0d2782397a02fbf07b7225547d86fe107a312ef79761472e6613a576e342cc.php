<?php

/* __string_template__27068c838112d45414490f6f1bdb8de3f8e31873a790e2239ea0dbc339832f6e */
class __TwigTemplate_b828bab8c2ba0a7024905638000843f1aa9edc36203448dc3aa2fd5638b4d7d2 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_c_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())))));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
        echo " ";
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())) {
            echo $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array());
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        echo ",
    <br />
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_text", array("[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__27068c838112d45414490f6f1bdb8de3f8e31873a790e2239ea0dbc339832f6e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 6,  37 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("change_order_status_c_subj", {"[order]": order_info.order_id}) } ) }}*/
/*     {{ __("dear") }} {% if order_info.firstname %}{{ order_info.firstname }} {% else %} {{ __("customer") }} {% endif %},*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
