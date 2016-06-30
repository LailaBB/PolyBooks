<?php

/* admin/index.html.twig */
class __TwigTemplate_c06117fb1ffd7b87a12608a7422b017e56299f5faca5a387d925373da38c3ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <!-- Small boxes (Stat box) -->
        <div class=\"row\">
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {%  extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <!-- Content Header (Page header) -->*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             Dashboard*/
/*             <small>Control panel</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li class="active">Dashboard</li>*/
/*         </ol>*/
/*     </section>*/
/* */
/*     <!-- Main content -->*/
/*     <section class="content">*/
/*         <!-- Small boxes (Stat box) -->*/
/*         <div class="row">*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*     </section>*/
/*     <!-- /.content -->*/
/* {% endblock %}*/
