<?php

/* admin/layoutdata.html.twig */
class __TwigTemplate_2fd9c605288d22299cc6f27d66312585241a8dd4dcac2c93fd88926a88ec46c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'JS' => array($this, 'block_JS'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>PolyBooks | Laila Ben Brahim</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">


    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-green sidebar-mini\" onload=\"setupZoom();\" >
<div class=\"wrapper\">

    ";
        // line 35
        $this->loadTemplate("admin/header.html.twig", "admin/layoutdata.html.twig", 35)->display($context);
        // line 36
        echo "    <!-- Left side column. contains the logo and sidebar -->
    ";
        // line 37
        $this->loadTemplate("admin/sidebar.html.twig", "admin/layoutdata.html.twig", 37)->display($context);
        // line 38
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </div>
    <!-- /.content-wrapper -->
    ";
        // line 44
        $this->loadTemplate("admin/footer.html.twig", "admin/layoutdata.html.twig", 44)->display($context);
        // line 45
        echo "
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- DataTables -->
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- SlimScroll -->
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- page script -->
<script>
    \$(function () {
        \$(\"#example1\").DataTable();
        \$('#example2').DataTable({
            \"paging\": true,
            \"lengthChange\": false,
            \"searching\": false,
            \"ordering\": true,
            \"info\": true,
            \"autoWidth\": false
        });
    });
</script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/FancyZoom/js-global/FancyZoom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/FancyZoom/js-global/FancyZoomHTML.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 273
        $this->displayBlock('JS', $context, $blocks);
        // line 274
        echo "</body>
</html>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 273
    public function block_JS($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/layoutdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 273,  357 => 41,  351 => 274,  349 => 273,  345 => 272,  341 => 271,  323 => 256,  318 => 254,  313 => 252,  308 => 250,  303 => 248,  299 => 247,  294 => 245,  289 => 243,  89 => 45,  87 => 44,  83 => 42,  81 => 41,  76 => 38,  74 => 37,  71 => 36,  69 => 35,  54 => 23,  48 => 20,  43 => 18,  34 => 12,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>PolyBooks | Laila Ben Brahim</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/* */
/*     <!-- Bootstrap 3.3.6 -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap/css/bootstrap.min.css') }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- DataTables -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.css') }}">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/AdminLTE.min.css') }}">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/skins/_all-skins.min.css') }}">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="hold-transition skin-green sidebar-mini" onload="setupZoom();" >*/
/* <div class="wrapper">*/
/* */
/*     {%  include "admin/header.html.twig" %}*/
/*     <!-- Left side column. contains the logo and sidebar -->*/
/*     {%  include "admin/sidebar.html.twig" %}*/
/* */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         {% block content %} {% endblock %}*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/*     {%  include "admin/footer.html.twig" %}*/
/* */
/*     <!-- Control Sidebar -->*/
/*     <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*             <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*             <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*             <!-- Home tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-home-tab">*/
/*                 <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                                 <p>Will be 23 on April 24th</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <i class="menu-icon fa fa-user bg-yellow"></i>*/
/* */
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/* */
/*                                 <p>New phone +1(800)555-1234</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/* */
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/* */
/*                                 <p>nora@example.com</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/* */
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/* */
/*                                 <p>Execution time 5 seconds</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.control-sidebar-menu -->*/
/* */
/*                 <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Custom Template Design*/
/*                                 <span class="label label-danger pull-right">70%</span>*/
/*                             </h4>*/
/* */
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Update Resume*/
/*                                 <span class="label label-success pull-right">95%</span>*/
/*                             </h4>*/
/* */
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Laravel Integration*/
/*                                 <span class="label label-warning pull-right">50%</span>*/
/*                             </h4>*/
/* */
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0)">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Back End Framework*/
/*                                 <span class="label label-primary pull-right">68%</span>*/
/*                             </h4>*/
/* */
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.control-sidebar-menu -->*/
/* */
/*             </div>*/
/*             <!-- /.tab-pane -->*/
/*             <!-- Stats tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*             <!-- /.tab-pane -->*/
/*             <!-- Settings tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*                 <form method="post">*/
/*                     <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Report panel usage*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/* */
/*                         <p>*/
/*                             Some information about this general settings option*/
/*                         </p>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Allow mail redirect*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/* */
/*                         <p>*/
/*                             Other sets of options are available*/
/*                         </p>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Expose author name in posts*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/* */
/*                         <p>*/
/*                             Allow the user to show his name in blog posts*/
/*                         </p>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/* */
/*                     <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Show me as online*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Turn off notifications*/
/*                             <input type="checkbox" class="pull-right">*/
/*                         </label>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Delete chat history*/
/*                             <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                         </label>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/*                 </form>*/
/*             </div>*/
/*             <!-- /.tab-pane -->*/
/*         </div>*/
/*     </aside>*/
/*     <!-- /.control-sidebar -->*/
/*     <!-- Add the sidebar's background. This div must be placed*/
/*          immediately after the control sidebar -->*/
/*     <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* */
/* <!-- jQuery 2.2.0 -->*/
/* <script src="{{ asset('assets/admin/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>*/
/* <!-- Bootstrap 3.3.6 -->*/
/* <script src="{{ asset('assets/admin/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <!-- DataTables -->*/
/* <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>*/
/* <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>*/
/* <!-- SlimScroll -->*/
/* <script src="{{ asset('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/* <!-- FastClick -->*/
/* <script src="{{ asset('assets/admin/plugins/fastclick/fastclick.js') }}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('assets/admin/dist/js/app.min.js') }}"></script>*/
/* <!-- AdminLTE for demo purposes -->*/
/* <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>*/
/* <!-- page script -->*/
/* <script>*/
/*     $(function () {*/
/*         $("#example1").DataTable();*/
/*         $('#example2').DataTable({*/
/*             "paging": true,*/
/*             "lengthChange": false,*/
/*             "searching": false,*/
/*             "ordering": true,*/
/*             "info": true,*/
/*             "autoWidth": false*/
/*         });*/
/*     });*/
/* </script>*/
/* <script src="{{ asset ('plugins/FancyZoom/js-global/FancyZoom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset ('plugins/FancyZoom/js-global/FancyZoomHTML.js') }}" type="text/javascript"></script>*/
/* {% block JS %} {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
