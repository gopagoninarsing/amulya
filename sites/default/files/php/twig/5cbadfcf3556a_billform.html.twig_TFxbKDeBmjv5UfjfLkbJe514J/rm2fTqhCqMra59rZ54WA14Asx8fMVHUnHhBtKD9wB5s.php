<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/amulya_billing/templates/billform.html.twig */
class __TwigTemplate_e52c9d0862fb3a3f6c9ed9d9f6cc429a1912b46da6c38b083ce2f945aeae0292 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["without" => 138];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>

  .date-label {
    float: left;
    padding-top: 20px;
    margin-right: 30px;
  }

  .field--name-field-bill-date {
    float: left;
  }
  
  .form-title input {
    border: none;
    background: none;
    width: 100px;    
  }
  .form-title label {
    width: 100px;
    float: left;
    padding-top: 5px;
  }
  
  .form-date {
    margin-right:13%;
  }

  .form-date h4{
    display:none;
  }
  
  .form-left {
     float:left;
  }
  
  .form-wrapper .age {
    width: 100px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .form-wrapper .mobile {
    width: 150px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .form-wrapper .patient-name {
    width: 150px;
     margin-right: 5px;
  }

   .form-wrapper .coming-from {
    width: 150px;
     margin-left: 5px;
  }

  .node-form .form-wrapper {
    margin-bottom: 0em !important;
  }
  
  .js-form-type-vertical-tabs {
    display:none;
  }

  .field--name-field-service {
    width: 20%;
    float: left;
    margin-right: 5px;
  }
  
  .field--name-field-price,
  .field--name-field-quantity {
    float: left;
    margin-right: 5px;
  }

  .paragraph-type-top .paragraphs-dropbutton-wrapper {
  text-align: right;
  width: 5%;
  position: absolute;
  padding-top: 26px;
  clear: both;
  right:35%;
  }

  .paragraph-type-title,
  .tabledrag-toggle-weight {
  display:none;
  }
  #field-payments-values .field--type-datetime {
  float: left;
  width: 15%;
  }

  .js .field--widget-entity-reference-paragraphs .field-multiple-table {
  margin-bottom: 10px;
  width: 75%;
  }
  
  
</style>
<div class=\"form-wrapper\">
  

  <div class=\"form-details-wrapper\">
    <div class=\"form-date form-left\">
      <span class=\"date-label\" >Bill Date :</span> ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_bill_date", [])), "html", null, true);
        echo "
    </div>
    
    <div class=\"form-title form-left\">
      ";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "title", [])), "html", null, true);
        echo "
    </div>
    <div style=\"clear:both\"></div>
  </div>
    
  
  <div class=\"form-details-wrapper\">
    <div class=\"form-left patient-name\">
    ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_patient_name", [])), "html", null, true);
        echo "
    </div>
    
    <div class=\"form-left mobile\">
      ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_mobile", [])), "html", null, true);
        echo "
    </div>

    <div class=\"form-left age\">
      ";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_age", [])), "html", null, true);
        echo "
    </div>
    
    <div class=\"form-left coming-from\">
      ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_coming_from", [])), "html", null, true);
        echo "
    </div>

    <div style=\"clear:both\"></div>
  </div>

  ";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "title", "field_bill_date", "field_mobile", "field_patient_name", "field_coming_from", "field_age", "field_balance_amount", "field_bill_status"), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/amulya_billing/templates/billform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 138,  203 => 132,  196 => 128,  189 => 124,  182 => 120,  171 => 112,  164 => 108,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>

  .date-label {
    float: left;
    padding-top: 20px;
    margin-right: 30px;
  }

  .field--name-field-bill-date {
    float: left;
  }
  
  .form-title input {
    border: none;
    background: none;
    width: 100px;    
  }
  .form-title label {
    width: 100px;
    float: left;
    padding-top: 5px;
  }
  
  .form-date {
    margin-right:13%;
  }

  .form-date h4{
    display:none;
  }
  
  .form-left {
     float:left;
  }
  
  .form-wrapper .age {
    width: 100px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .form-wrapper .mobile {
    width: 150px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .form-wrapper .patient-name {
    width: 150px;
     margin-right: 5px;
  }

   .form-wrapper .coming-from {
    width: 150px;
     margin-left: 5px;
  }

  .node-form .form-wrapper {
    margin-bottom: 0em !important;
  }
  
  .js-form-type-vertical-tabs {
    display:none;
  }

  .field--name-field-service {
    width: 20%;
    float: left;
    margin-right: 5px;
  }
  
  .field--name-field-price,
  .field--name-field-quantity {
    float: left;
    margin-right: 5px;
  }

  .paragraph-type-top .paragraphs-dropbutton-wrapper {
  text-align: right;
  width: 5%;
  position: absolute;
  padding-top: 26px;
  clear: both;
  right:35%;
  }

  .paragraph-type-title,
  .tabledrag-toggle-weight {
  display:none;
  }
  #field-payments-values .field--type-datetime {
  float: left;
  width: 15%;
  }

  .js .field--widget-entity-reference-paragraphs .field-multiple-table {
  margin-bottom: 10px;
  width: 75%;
  }
  
  
</style>
<div class=\"form-wrapper\">
  

  <div class=\"form-details-wrapper\">
    <div class=\"form-date form-left\">
      <span class=\"date-label\" >Bill Date :</span> {{ form.field_bill_date }}
    </div>
    
    <div class=\"form-title form-left\">
      {{ form.title }}
    </div>
    <div style=\"clear:both\"></div>
  </div>
    
  
  <div class=\"form-details-wrapper\">
    <div class=\"form-left patient-name\">
    {{ form.field_patient_name }}
    </div>
    
    <div class=\"form-left mobile\">
      {{ form.field_mobile }}
    </div>

    <div class=\"form-left age\">
      {{ form.field_age }}
    </div>
    
    <div class=\"form-left coming-from\">
      {{ form.field_coming_from }}
    </div>

    <div style=\"clear:both\"></div>
  </div>

  {{ form | without('title', 'field_bill_date',  'field_mobile', 'field_patient_name', 'field_coming_from', 'field_age', 'field_balance_amount', 'field_bill_status') }}
</div>

", "modules/custom/amulya_billing/templates/billform.html.twig", "/app/modules/custom/amulya_billing/templates/billform.html.twig");
    }
}
