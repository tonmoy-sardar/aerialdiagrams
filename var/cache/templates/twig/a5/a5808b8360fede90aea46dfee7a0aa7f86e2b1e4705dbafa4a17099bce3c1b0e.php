<?php

/* __string_template__752ab71992beb1d1d2e094ba96fb162b7f4f03ac2090d3cd6c37a3ec424bd026 */
class __TwigTemplate_8187a5d8f88f7a1d62beb1a17f4448ca29f8e582a7f7f5492cc94a650283121e extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "amount", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__752ab71992beb1d1d2e094ba96fb162b7f4f03ac2090d3cd6c37a3ec424bd026";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.amount }}</strong></p>*/
