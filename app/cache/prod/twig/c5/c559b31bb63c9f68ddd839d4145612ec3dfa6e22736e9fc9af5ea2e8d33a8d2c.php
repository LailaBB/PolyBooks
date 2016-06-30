<?php

/* admin/sidebar.html.twig */
class __TwigTemplate_9de90d368afdba78d6ccda69937de3184f55d32a082238939ea544413aea1b1b extends Twig_Template
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
        // line 1
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                ";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "image", array(), "any", false, true), "fileName", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))) {
            // line 8
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/files/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                ";
        } else {
            // line 10
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/image/user-bleu.png"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                ";
        }
        // line 12
        echo "            </div>
            <div class=\"pull-left info\">
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullName", array()), "html", null, true);
        echo "</p>
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                 <a  target=\"_blank\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-home\"></i> Accueil</a>     
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 23
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user_index");
            echo "\"><i class=\"fa fa-user\"></i> <span>Uilisateurs</span></a></li>
              <li><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("admin_module_index");
            echo "\"><i class=\"fa fa-archive\"></i> <span>Modules</span></a></li>
              <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("admin_document_logs");
            echo "\"><i class=\"fa fa-archive\"></i> <span>Journal</span></a></li>
            ";
        }
        // line 27
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_document_index");
        echo "\"><i class=\"fa fa-book\"></i> <span>Documents</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
";
    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  70 => 25,  66 => 24,  61 => 23,  59 => 22,  50 => 16,  45 => 14,  41 => 12,  35 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*                 {%if app.user.image.fileName is defined and  app.user.image.fileName %}*/
/*                     <img src="{{ asset('uploads/files/' ~ app.user.image.fileName)  }}" class="img-circle" alt="User Image">*/
/*                 {% else %}*/
/*                     <img src="{{ asset('assets/admin/image/user-bleu.png')  }}" class="img-circle" alt="User Image">*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*                 <p>{{ app.user.fullName }}</p>*/
/*                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*                  <a  target="_blank" href="{{ path('homepage') }}"><i class="fa fa-home"></i> Accueil</a>     */
/*             </div>*/
/*         </div>*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             {% if app.user.role == 'ROLE_ADMIN' %}*/
/*               <li><a href="{{ path('admin_user_index') }}"><i class="fa fa-user"></i> <span>Uilisateurs</span></a></li>*/
/*               <li><a href="{{ path('admin_module_index') }}"><i class="fa fa-archive"></i> <span>Modules</span></a></li>*/
/*               <li><a href="{{ path('admin_document_logs') }}"><i class="fa fa-archive"></i> <span>Journal</span></a></li>*/
/*             {% endif %}*/
/*             <li><a href="{{ path('admin_document_index') }}"><i class="fa fa-book"></i> <span>Documents</span></a></li>*/
/*         </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* </aside>*/
/* */
