<?php

/* __string_template__d130e296fe951aeffb618fe84c288cca00327cc77fed88c8d360beb2013418a2 */
class __TwigTemplate_ffc3514fc35b4740eb2abe96d7ac2ca8dd60c4c47cbd400d9ebaccf36ab5235f extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tax", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__d130e296fe951aeffb618fe84c288cca00327cc77fed88c8d360beb2013418a2";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.tax }}</strong></p>*/
