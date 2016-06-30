<?php

/* user/index.html.twig */
class __TwigTemplate_2125532c0604a7497bc8a950cf00489088f0440bdc9f0049daa1fe20c3f565e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layoutdata.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
            user
            <small>liste des users</small>
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
                                <th class=\"text-center\">Nom et Prénom</th>
                                <th class=\"text-center\">Image</th>
                                <th class=\"text-center\">Pseudo</th>
                                <th class=\"text-center\">Email</th>
                                <th class=\"text-center\">Active</th>
                                <th class=\"text-center\">Role</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                                <tr>
                                    <td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">
                                        ";
            // line 39
            if (($this->getAttribute($this->getAttribute($context["user"], "image", array(), "any", false, true), "fileName", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["user"], "image", array()), "fileName", array()))) {
                // line 40
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/files/" . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "fileName", array()))), "html", null, true);
                echo "\">
                                                <img width=\"50\"  src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/files/" . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "fileName", array()))), "html", null, true);
                echo "\">
                                            </a>
                                        ";
            } else {
                // line 44
                echo "                                            <img alt=\"avatar\" class=\"img-circle\" width=\"50\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/image/user-bleu.png"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 46
            echo "                                    </td>
                                    <td class=\"text-center\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_enabled", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                        ";
            // line 51
            if (($this->getAttribute($context["user"], "enabled", array()) == 1)) {
                // line 52
                echo "                                            <i class=\"fa fa-unlock fa-2x text-success animation-hatch\"></i>
                                        ";
            } else {
                // line 54
                echo "                                            <i class=\"fa fa-unlock-alt fa-2x text-danger animation-hatch\"></i>
                                        ";
            }
            // line 56
            echo "                                            </a>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 59
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 60
                echo "                                            <span class=\"label label-info\">Admin</span>
                                        ";
            } elseif (($this->getAttribute(            // line 61
$context["user"], "role", array()) == "ROLE_PROFESSOR")) {
                // line 62
                echo "                                            <span class=\"label label-warning\">Professeur</span>
                                        ";
            }
            // line 64
            echo "                                    </td>
                                    <td class=\"text-center\">
                                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Modifier\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Suprimer\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-times\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            </tbody>
                        </table>

                        <ul style=\"margin-top: 10px;\">
                            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\">
                                <button class=\"btn-sm btn-success\"><i class=\"fa fa-plus\"></i>Ajouter un utilisateur</button>
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

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 75,  158 => 71,  148 => 67,  144 => 66,  140 => 64,  136 => 62,  134 => 61,  131 => 60,  129 => 59,  124 => 56,  120 => 54,  116 => 52,  114 => 51,  110 => 50,  105 => 48,  101 => 47,  98 => 46,  92 => 44,  86 => 41,  81 => 40,  79 => 39,  74 => 37,  71 => 36,  67 => 35,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {%  extends "admin/layoutdata.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             user*/
/*             <small>liste des users</small>*/
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
/*                                 <th class="text-center">Nom et Prénom</th>*/
/*                                 <th class="text-center">Image</th>*/
/*                                 <th class="text-center">Pseudo</th>*/
/*                                 <th class="text-center">Email</th>*/
/*                                 <th class="text-center">Active</th>*/
/*                                 <th class="text-center">Role</th>*/
/*                                 <th class="text-center">Actions</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for user in users %}*/
/*                                 <tr>*/
/*                                     <td class="text-center">{{ user.fullname }}</td>*/
/*                                     <td class="text-center">*/
/*                                         {%if user.image.fileName is defined and  user.image.fileName %}*/
/*                                             <a href="{{ asset ('uploads/files/' ~ user.image.fileName) }}">*/
/*                                                 <img width="50"  src="{{ asset('uploads/files/' ~ user.image.fileName)  }}">*/
/*                                             </a>*/
/*                                         {% else %}*/
/*                                             <img alt="avatar" class="img-circle" width="50"  src="{{ asset ('assets/admin/image/user-bleu.png') }}">*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td class="text-center">{{ user.username}}</td>*/
/*                                     <td class="text-center">{{ user.email }}</td>*/
/*                                     <td class="text-center">*/
/*                                         <a href="{{ path('user_enabled', { 'id': user.id }) }}">*/
/*                                         {%if user.enabled == 1%}*/
/*                                             <i class="fa fa-unlock fa-2x text-success animation-hatch"></i>*/
/*                                         {% else %}*/
/*                                             <i class="fa fa-unlock-alt fa-2x text-danger animation-hatch"></i>*/
/*                                         {% endif %}*/
/*                                             </a>*/
/*                                     </td>*/
/*                                     <td class="text-center">*/
/*                                         {%if user.role == 'ROLE_ADMIN'%}*/
/*                                             <span class="label label-info">Admin</span>*/
/*                                         {% elseif user.role == 'ROLE_PROFESSOR' %}*/
/*                                             <span class="label label-warning">Professeur</span>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td class="text-center">*/
/*                                         <a href="{{ path('admin_user_edit', { 'id': user.id }) }}" data-toggle="tooltip" title="Modifier" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>*/
/*                                         <a href="{{ path('admin_user_delete', { 'id': user.id }) }}" data-toggle="tooltip" title="Suprimer" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                         <ul style="margin-top: 10px;">*/
/*                             <a href="{{ path('admin_user_new') }}">*/
/*                                 <button class="btn-sm btn-success"><i class="fa fa-plus"></i>Ajouter un utilisateur</button>*/
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
