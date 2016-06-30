<?php

/* default/index.html.twig */
class __TwigTemplate_03cc1d4afd110c59f9e43f57bc870994dddae1facd2137853895c5980185c59d extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>PolyBooks -Laila Ben Brahim </title>


    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

    <!-- jQuery 2.2.0 -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body>


<ul>
    <li><a class=\"active\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil </a></li>
    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("index_admin_page");
        echo "\">Administration</a></li>
</ul>


<div class=\"content\">
    <div style=\"margin-bottom: 10px; margin-top: 15px;\">
        <strong>Module: </strong>
        <select  id=\"module\" style=\"margin-left: 20px;\">
            <option value=\"all\"> Tous les modules</option>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 30
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </select>
    </div>
    <ul class=\"library\"></ul>
    <div class=\"overlay-page\"></div>
    <div class=\"overlay-summary\"></div>
</div>

<footer>
    <div style=\"background: #333333;height: 45px;\">
        <p style=\"color: white; padding-top: 10px; padding-left: 10px;\">Développer par: Laila Ben Brahim</p>
    </div>
</footer>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/front/js/runlib.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  76 => 32,  65 => 30,  61 => 29,  49 => 20,  45 => 19,  35 => 12,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* */
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <title>PolyBooks -Laila Ben Brahim </title>*/
/* */
/* */
/*     <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>*/
/*     <link href="{{ asset('assets/front/css/style.css') }}" rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- jQuery 2.2.0 -->*/
/*     <script src="{{ asset('assets/admin/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* */
/* <ul>*/
/*     <li><a class="active" href="{{ path('homepage') }}">Accueil </a></li>*/
/*     <li><a href="{{ path('index_admin_page') }}">Administration</a></li>*/
/* </ul>*/
/* */
/* */
/* <div class="content">*/
/*     <div style="margin-bottom: 10px; margin-top: 15px;">*/
/*         <strong>Module: </strong>*/
/*         <select  id="module" style="margin-left: 20px;">*/
/*             <option value="all"> Tous les modules</option>*/
/*             {% for module in modules %}*/
/*                 <option value="{{ module.id }}">{{ module.name }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     <ul class="library"></ul>*/
/*     <div class="overlay-page"></div>*/
/*     <div class="overlay-summary"></div>*/
/* </div>*/
/* */
/* <footer>*/
/*     <div style="background: #333333;height: 45px;">*/
/*         <p style="color: white; padding-top: 10px; padding-left: 10px;">Développer par: Laila Ben Brahim</p>*/
/*     </div>*/
/* </footer>*/
/*     <script src="{{ asset('assets/front/js/runlib.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
