<?php

/* user/edit.html.twig */
class __TwigTemplate_de57f62f91d6f4dbb8204f1bd65b79854568f7d2eb786863905bce95a668166a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "user/edit.html.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            user
            <small>Editer</small>
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
                <div class=\"box box-success\">
                    <div class=\"box-header with-border\">

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
                        <input type=\"hidden\" name=\"_method\" value=\"POST\" />
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "_token", array()), 'widget');
        echo "
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Pseudo</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Image</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Nom</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Prénom</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Role</label>

                                <div class=\"col-sm-10\">
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class=\"box-footer\">
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("admin_user_index");
        echo "\"> <button type=\"button\" class=\"btn btn-default\">Annuler</button></a>
                            <button type=\"submit\" class=\"btn btn-info pull-right\">Editer</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  123 => 68,  113 => 61,  103 => 54,  93 => 47,  83 => 40,  73 => 33,  64 => 27,  57 => 25,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {%  extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             user*/
/*             <small>Editer</small>*/
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
/*                 <div class="box box-success">*/
/*                     <div class="box-header with-border">*/
/* */
/*                     </div>*/
/*                     <!-- /.box-header -->*/
/*                     <!-- form start -->*/
/*                     <form action="{{ path('admin_user_edit', { 'id': user.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*                         <input type="hidden" name="_method" value="POST" />*/
/*                         {{ form_widget(edit_form._token) }}*/
/*                         <div class="box-body">*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Pseudo</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.username,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Image</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.image,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.firstname,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Prénom</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.lastname,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.email,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail3" class="col-sm-2 control-label">Role</label>*/
/* */
/*                                 <div class="col-sm-10">*/
/*                                     {{ form_widget(edit_form.role,{'attr': {'class': 'form-control' }} )}}<br>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                         <div class="box-footer">*/
/*                             <a href="{{ path('admin_user_index') }}"> <button type="button" class="btn btn-default">Annuler</button></a>*/
/*                             <button type="submit" class="btn btn-info pull-right">Editer</button>*/
/*                         </div>*/
/*                         <!-- /.box-footer -->*/
/*                     </form>*/
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
/* */
