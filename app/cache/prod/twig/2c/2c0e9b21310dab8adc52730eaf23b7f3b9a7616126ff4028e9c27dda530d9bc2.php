<?php

/* module/index.html.twig */
class __TwigTemplate_e57933aeafa81619555463b741ce490f6d74decd86c36e9e5b69631c5d466eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layoutdata.html.twig", "module/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'JS' => array($this, 'block_JS'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layoutdata.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Module
            <small>liste des modules</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("index_admin_page");
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <!-- /.box-header -->
                    <div class=\"box-body\">
                        <table id=\"example2\" class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 31
            echo "                                <tr>
                                    <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_module_edit", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Modifier\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_module_delete", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Suprimer\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-times\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </tbody>
                        </table>

                        <ul style=\"margin-top: 10px;\">
                            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_module_new");
        echo "\">
                                <button class=\"btn-sm btn-success\"><i class=\"fa fa-plus\"></i>Ajouter un module</button>
                            </a>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

";
    }

    // line 59
    public function block_JS($context, array $blocks = array())
    {
        // line 60
        echo "    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
        \$( document ).ready(function() {
            var locale = getUrlParameter('locale');
            if(typeof locale !== \"undefined\"){
                \$('#locale option[value='+locale+']').prop('selected', true);
            }
            \$( \"#locale\" ).change(function() {
                if(typeof locale === \"undefined\"){
                    window.location.replace(document.URL +\"?locale=\" + \$( this ).val());
                }else{
                    var url = document.URL.replace(\"?locale=\" +locale, \"?locale=\" + \$( this ).val());
                    window.location.replace(url);
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "module/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 60,  114 => 59,  95 => 43,  89 => 39,  79 => 35,  75 => 34,  70 => 32,  67 => 31,  63 => 30,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {%  extends "admin/layoutdata.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             Module*/
/*             <small>liste des modules</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{ path('index_admin_page') }}"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li class="active">Dashboard</li>*/
/*         </ol>*/
/*     </section>*/
/* */
/*     <!-- Main content -->*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <table id="example2" class="table table-bordered table-hover">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th class="text-center">Nom</th>*/
/*                                 <th class="text-center">Actions</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for module in modules %}*/
/*                                 <tr>*/
/*                                     <td class="text-center">{{ module.name }}</td>*/
/*                                     <td class="text-center">*/
/*                                         <a href="{{ path('admin_module_edit', { 'id': module.id }) }}" data-toggle="tooltip" title="Modifier" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>*/
/*                                         <a href="{{ path('admin_module_delete', { 'id': module.id }) }}" data-toggle="tooltip" title="Suprimer" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                         <ul style="margin-top: 10px;">*/
/*                             <a href="{{ path('admin_module_new') }}">*/
/*                                 <button class="btn-sm btn-success"><i class="fa fa-plus"></i>Ajouter un module</button>*/
/*                             </a>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.box-body -->*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </section>*/
/*     <!-- /.content -->*/
/* */
/* {% endblock %}*/
/* */
/* {% block JS %}*/
/*     <script>*/
/*         var getUrlParameter = function getUrlParameter(sParam) {*/
/*             var sPageURL = decodeURIComponent(window.location.search.substring(1)),*/
/*                     sURLVariables = sPageURL.split('&'),*/
/*                     sParameterName,*/
/*                     i;*/
/* */
/*             for (i = 0; i < sURLVariables.length; i++) {*/
/*                 sParameterName = sURLVariables[i].split('=');*/
/* */
/*                 if (sParameterName[0] === sParam) {*/
/*                     return sParameterName[1] === undefined ? true : sParameterName[1];*/
/*                 }*/
/*             }*/
/*         };*/
/*         $( document ).ready(function() {*/
/*             var locale = getUrlParameter('locale');*/
/*             if(typeof locale !== "undefined"){*/
/*                 $('#locale option[value='+locale+']').prop('selected', true);*/
/*             }*/
/*             $( "#locale" ).change(function() {*/
/*                 if(typeof locale === "undefined"){*/
/*                     window.location.replace(document.URL +"?locale=" + $( this ).val());*/
/*                 }else{*/
/*                     var url = document.URL.replace("?locale=" +locale, "?locale=" + $( this ).val());*/
/*                     window.location.replace(url);*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
