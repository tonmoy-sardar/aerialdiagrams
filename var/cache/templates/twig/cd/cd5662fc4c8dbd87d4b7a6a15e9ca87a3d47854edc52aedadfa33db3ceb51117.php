<?php

/* __string_template__b8b5c1d75c90b113f29a495ef6afbb3e19002a24f9ca703216b84bfc4f7e94b5 */
class __TwigTemplate_1a603bc5e5f1daa133eb0bcbc2a1d53c6f42ad620befdc5c6d3652f66006ea17 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "display_subtotal", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__b8b5c1d75c90b113f29a495ef6afbb3e19002a24f9ca703216b84bfc4f7e94b5";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.display_subtotal }}</strong></p>*/
