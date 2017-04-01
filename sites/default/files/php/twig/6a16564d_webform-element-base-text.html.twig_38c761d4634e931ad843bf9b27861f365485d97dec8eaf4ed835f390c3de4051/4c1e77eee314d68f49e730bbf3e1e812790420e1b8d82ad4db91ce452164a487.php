<?php

/* modules/webform/templates/webform-element-base-text.html.twig */
class __TwigTemplate_ea5f683c04c3ef43f0d22e7b80ef01c3dc47c80de2753cf6fd982dd9bcb62d4b extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiline", array())) {
                echo ":
";
            } else {
                // line 20
                echo ": ";
            }
        }
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "
";
        // line 21
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiline", array()) &&  !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "last", array()))) {
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-element-base-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  57 => 21,  50 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a webform base element as text.*/
/*  **/
/*  * Available variables:*/
/*  * - element: The webform element.*/
/*  * - title: The label for the element.*/
/*  * - value: The content for the element.*/
/*  * - options Associative array of options for element.*/
/*  *   - email: Flag to determine if element is for an email.*/
/*  *   - multiline: Flag to determine if value spans multiple lines.*/
/*  *   - first: Flag to determine if the element is that first element in its container.*/
/*  *   - last: Flag to determine if the element is that last element in its container.*/
/*  **/
/*  * @see \Drupal\webform\WebformSubmissionViewBuilder::buildElements*/
/*  *//* */
/* #}*/
/* {% if title %}{{ title }}{% if options.multiline %}:*/
/* {% else %}: {% endif %}{% endif %}{{ value }}*/
/* {% if options.multiline and not options.last %}*/
/* */
/* {% endif %}*/
/* */
