<?php

/* AffiliateAffiliateManagementBundle:Affiliateinfo:new.html.twig */
class __TwigTemplate_46e9fcad228ea36d274b7cf73c92c7c3567f5378b725dbaa03354da5b7e8d437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseadmindemo.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseadmindemo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Admin Payment Released ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css\">
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "        <!-- jQuery 2.0.2 -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
    <!-- Bootstrap -->
    
  
    <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
    
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->

    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/select/select2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    
    <script type=\"text/javascript\">
        \$( function() {
            //\$( \"#datepicker1\" ).datepicker();
            \$( \"#adminpayreq_requestDate\" ).datepicker( \$.datepicker.regional[\"en\"] ).datepicker( \"option\" , {
                changeMonth : true ,
                changeYear : true ,
                dateFormat : \"dd/mm/yy\" ,
                todayHighlight : true,
                //yearRange: \"1972:2020\"
            } ) ;
        
        } ) ;

    </script>
    
    
     <script>
        \$(document).ready(function() {
             \$(\"#adminpayreq_Admin\").select2({
                placeholder: \"Select a Option\",
                allowClear: true
            });
            
             \$(\"#adminpayreq_Userinfo\").select2({
                placeholder: \"Select a Option\",
                allowClear: true
            });
    });
    </script>
    
";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "<!-- Main content -->

                        <div class=\"col-md-6\">
                            <!-- general form elements disabled -->
                            <div class=\"box box-warning\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Admin Payment Request</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data", "attr" => array("class" => "", "role" => "form")));
        echo "
                                        <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>First Name</label>
                                             ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fname"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                         <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Last Name</label>
                                           ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lname"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            
                                        </div>
                                         
                                          <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>User Name</label>
                                        
                                           ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                            
                                        </div>
                                          
                                           <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Password</label>
                                             ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                       
                                           <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Confirm Password</label>
                                             ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                           <div class=\"form-group\">
                                            <label>Email</label>
                                            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>State</label>
                                            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>Country</label>
                                            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                         <div class=\"form-group\">
                                            <label>Zipcode</label>
                                            ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipcode"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>Mobile</label>
                                            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>User Type</label>
                                            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addedBy"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                          ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                                           <div class=\"form-group\">
                                             <button type=\"submit\"  class=\"btn btn-success\"><i class=\"icon-ok icon-green\"></i> Create</button>
                                        </div>
                                          
                                    ";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo " 
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("adminpayreq");
        echo "\">
                                        Back to the list
                                    </a>
                                </li>
                            </ul>
                            
                        </div><!--/.col (right) -->

          

";
    }

    public function getTemplateName()
    {
        return "AffiliateAffiliateManagementBundle:Affiliateinfo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 154,  255 => 148,  247 => 143,  240 => 139,  231 => 133,  222 => 127,  213 => 121,  204 => 115,  195 => 109,  187 => 104,  178 => 98,  168 => 91,  157 => 83,  148 => 77,  141 => 73,  130 => 64,  127 => 62,  89 => 27,  85 => 26,  80 => 24,  74 => 21,  70 => 20,  64 => 17,  55 => 10,  52 => 8,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
