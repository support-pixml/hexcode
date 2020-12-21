<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/journal3/module/flyout_menu.twig */
class __TwigTemplate_a391eb3054d4dccb5bd43f340d3d021c8e5c9626d26c9ede5b75a25979391522 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("journal3/template/journal3/module/main_menu.twig", "journal3/template/journal3/module/flyout_menu.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/flyout_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/flyout_menu.twig", "");
    }
}
