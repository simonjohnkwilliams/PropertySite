<?php

/* modules/webform/templates/webform-submission-text.html.twig */
class __TwigTemplate_1a93f721a17ae9c4853cc07efe3b84ef977c5d2365352a4bc81b1ce534a99bf5 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 9
        echo "--------------------------------------------------------------------------------
";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission ID")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sid"]) ? $context["sid"] : null), "html", null, true));
        echo "
";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission UUID")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true));
        echo "
";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission URI")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["uri"]) ? $context["uri"] : null), "html", null, true));
        echo "
";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Created")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "
";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Completed")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["completed"]) ? $context["completed"] : null), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Changed")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["changed"]) ? $context["changed"] : null), "html", null, true));
        echo "
";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Is draft")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["is_draft"]) ? $context["is_draft"] : null), "html", null, true));
        echo "
";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Current page")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Remote IP address")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remote_addr"]) ? $context["remote_addr"] : null), "html", null, true));
        echo "
";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submitted by")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_by"]) ? $context["submitted_by"] : null), "html", null, true));
        echo "
";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Language")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true));
        echo "
";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Form")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submitted to")));
        echo ": ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_to"]) ? $context["submitted_to"] : null), "html", null, true));
        echo "
--------------------------------------------------------------------------------

";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submitted values are")));
        echo ":

";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-submission-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  126 => 25,  118 => 22,  112 => 21,  106 => 20,  100 => 19,  94 => 18,  88 => 17,  82 => 16,  76 => 15,  70 => 14,  64 => 13,  58 => 12,  52 => 11,  46 => 10,  43 => 9,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation from form submission as plain text.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* --------------------------------------------------------------------------------*/
/* {{ 'Submission ID'|t }}: {{ sid }}*/
/* {{ 'Submission UUID'|t }}: {{ uuid }}*/
/* {{ 'Submission URI'|t }}: {{ uri }}*/
/* {{ 'Created'|t }}: {{ created }}*/
/* {{ 'Completed'|t }}: {{ completed }}*/
/* {{ 'Changed'|t }}: {{ changed }}*/
/* {{ 'Is draft'|t }}: {{ is_draft }}*/
/* {{ 'Current page'|t }}: {{ current_page }}*/
/* {{ 'Remote IP address'|t }}: {{ remote_addr }}*/
/* {{ 'Submitted by'|t }}: {{ submitted_by }}*/
/* {{ 'Language'|t }}: {{ language }}*/
/* {{ 'Form'|t }}: {{ form }}*/
/* {{ 'Submitted to'|t }}: {{ submitted_to }}*/
/* --------------------------------------------------------------------------------*/
/* */
/* {{ 'Submitted values are'|t }}:*/
/* */
/* {{ data }}*/
/* */
