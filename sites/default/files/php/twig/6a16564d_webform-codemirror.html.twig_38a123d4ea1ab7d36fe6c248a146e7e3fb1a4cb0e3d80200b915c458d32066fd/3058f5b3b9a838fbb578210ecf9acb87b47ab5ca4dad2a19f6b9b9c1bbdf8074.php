<?php

/* modules/webform/templates/webform-codemirror.html.twig */
class __TwigTemplate_ae1d0dfc41cc6dc053dd5ff92e00d3600827046e08bb9584b77446926725b038 extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array();
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 18
        if (((isset($context["type"]) ? $context["type"] : null) == "html")) {
            // line 19
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.codemirror.html"), "html", null, true));
            echo "
";
        } elseif ((        // line 20
(isset($context["type"]) ? $context["type"] : null) == "yaml")) {
            // line 21
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.codemirror.yaml"), "html", null, true));
            echo "
";
        } else {
            // line 23
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.codemirror.text"), "html", null, true));
            echo "
";
        }
        // line 25
        echo "<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true));
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  58 => 23,  52 => 21,  50 => 20,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation for 'CodeMirror' code.*/
/*  **/
/*  * Available variables*/
/*  * - code: The code.*/
/*  * - type: The type of code.*/
/*  * - mode: The CodeMirror mode used to format the code.*/
/*  **/
/*  * @see http://codemirror.net/doc/manual.html#option_mode*/
/*  * @see \Drupal\webform\Element\WebformCodeMirror()*/
/*  * @see template_preprocess_webform_codemirror()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if type == 'html' %}*/
/*   {{ attach_library('webform/webform.element.codemirror.html') }}*/
/* {% elseif type == 'yaml' %}*/
/*   {{ attach_library('webform/webform.element.codemirror.yaml') }}*/
/* {% else %}*/
/*   {{ attach_library('webform/webform.element.codemirror.text') }}*/
/* {% endif %}*/
/* <pre class="js-webform-codemirror-runmode webform-codemirror-runmode" data-webform-codemirror-mode="{{ mode }}">{{ code }}</pre>*/
/* */
