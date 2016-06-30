<?php

/* admin/header.html.twig */
class __TwigTemplate_769413e3129d1d3080b123a5dbdf61372d532203ec4fd5de444483baa5237159 extends Twig_Template
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
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("index_admin_page");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>Poly</b>B</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>Poly</b>Books</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "image", array(), "any", false, true), "fileName", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))) {
            // line 22
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/files/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                        ";
        } else {
            // line 24
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/image/user-bleu.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                        ";
        }
        // line 26
        echo "                        <span class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullName", array()), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "image", array(), "any", false, true), "fileName", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))) {
            // line 32
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/files/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "fileName", array()))), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                            ";
        } else {
            // line 34
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/image/user-bleu.png"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                            ";
        }
        // line 36
        echo "                            <p>
                                ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullName", array()), "html", null, true);
        echo " <br>
                                ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("logout_admin");
        echo "\" class=\"btn btn-default btn-flat\">Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "admin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  88 => 38,  84 => 37,  81 => 36,  75 => 34,  69 => 32,  67 => 31,  58 => 26,  52 => 24,  46 => 22,  44 => 21,  23 => 3,  19 => 1,);
    }
}
/* <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="{{ path('index_admin_page') }}" class="logo">*/
/*         <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*         <span class="logo-mini"><b>Poly</b>B</span>*/
/*         <!-- logo for regular state and mobile devices -->*/
/*         <span class="logo-lg"><b>Poly</b>Books</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top">*/
/*         <!-- Sidebar toggle button-->*/
/*         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*         </a>*/
/* */
/*         <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*                 <!-- User Account: style can be found in dropdown.less -->*/
/*                 <li class="dropdown user user-menu">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         {%if app.user.image.fileName is defined and  app.user.image.fileName %}*/
/*                             <img src="{{ asset('uploads/files/' ~ app.user.image.fileName)  }}" class="user-image" alt="User Image">*/
/*                         {% else %}*/
/*                             <img src="{{ asset('assets/admin/image/user-bleu.png')  }}" class="user-image" alt="User Image">*/
/*                         {% endif %}*/
/*                         <span class="hidden-xs">{{ app.user.fullName }}</span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <!-- User image -->*/
/*                         <li class="user-header">*/
/*                             {%if app.user.image.fileName is defined and  app.user.image.fileName %}*/
/*                                 <img src="{{ asset('uploads/files/' ~ app.user.image.fileName)  }}" class="img-circle" alt="User Image">*/
/*                             {% else %}*/
/*                                 <img src="{{ asset('assets/admin/image/user-bleu.png')  }}" class="img-circle" alt="User Image">*/
/*                             {% endif %}*/
/*                             <p>*/
/*                                 {{ app.user.fullName }} <br>*/
/*                                 {{ app.user.email }}*/
/*                             </p>*/
/*                         </li>*/
/*                         <!-- Menu Footer-->*/
/*                         <li class="user-footer">*/
/*                             <div class="pull-left">*/
/*                                 <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                             </div>*/
/*                             <div class="pull-right">*/
/*                                 <a href="{{ path('logout_admin') }}" class="btn btn-default btn-flat">Déconnexion</a>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/
/* */
