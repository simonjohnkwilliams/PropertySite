<?php

/* modules/datatables/templates/views-view-datatables.html.twig */
class __TwigTemplate_7fb6f0b0a1de0fcdd2ed94e6e9b58e6088f26ebf97bbd6013640410fce13f763 extends Twig_Template
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
        $tags = array("include" => 35);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 35
        $this->loadTemplate("views-view-table.html.twig", "modules/datatables/templates/views-view-datatables.html.twig", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "modules/datatables/templates/views-view-datatables.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a view as a table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  *   - class: HTML classes that can be used to style contextually through CSS.*/
/*  * - title : The title of this group of rows.*/
/*  * - header: The table header columns.*/
/*  *   - attributes: Remaining HTML attributes for the element.*/
/*  *   - content: HTML classes to apply to each header cell, indexed by*/
/*  *   the header's key.*/
/*  *   - default_classes: A flag indicating whether default classes should be*/
/*  *     used.*/
/*  * - caption_needed: Is the caption tag needed.*/
/*  * - caption: The caption for this table.*/
/*  * - accessibility_description: Extended description for the table details.*/
/*  * - accessibility_summary: Summary for the table details.*/
/*  * - rows: Table row items. Rows are keyed by row number.*/
/*  *   - attributes: HTML classes to apply to each row.*/
/*  *   - columns: Row column items. Columns are keyed by column number.*/
/*  *     - attributes: HTML classes to apply to each column.*/
/*  *     - content: The column content.*/
/*  *   - default_classes: A flag indicating whether default classes should be*/
/*  *     used.*/
/*  * - responsive: A flag indicating whether table is responsive.*/
/*  * - sticky: A flag indicating whether table header is sticky.*/
/*  **/
/*  * @see template_preprocess_views_view_table()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% include 'views-view-table.html.twig' %}*/
