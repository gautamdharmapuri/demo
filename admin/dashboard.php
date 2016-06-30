<?php session_start();
	  include"config/connection.php";	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>       
        <!-- META SECTION -->
        <title>NRIs Dashboard</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->

        <div class="page-container page-navigation-top">
        
           
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
               <?php include "includes/top.php" ; ?>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="javascript:;">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                    
                    <div class="col-md-6">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                      <?php 
                                    $q="select state from states";
                                    $r=mysql_query($q);
                                    echo "<b>".mysql_num_rows($r)."</b>";
                                    ?>    
                                    </div>
                                    <div class="widget-title">Total States</div>
                                    <div class="widget-subtitle">On our website</div>
                                </div>
                                                            
                            </div>

                        </div>
                    
                    	
                        
                        
                      <div class="col-md-6">

                            <div class="widget widget-warning widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Main Category</div>                                                                        
                                        <div class="widget-subtitle">Level 1</div>
                                        <div class="widget-int"> 
										<?php 
										$query_cat="select id from main_categories";
										$res_query=mysql_query($query_cat);
										echo "<b>".mysql_num_rows($res_query)."</b>";
										?>  
                                    </div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Category</div>
                                        <div class="widget-subtitle">Level 2</div>
                                        <div class="widget-int"><?php 
										$query_cat="select cid from categories";
										$res_query=mysql_query($query_cat);
										echo "<b>".mysql_num_rows($res_query)."</b>";
										?>  </div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Sub Category</div>
                                        <div class="widget-subtitle">Level 3</div>
                                        <div class="widget-int">
                                        <?php 
										$query_cat="select sub_id from sub_categories";
										$res_query=mysql_query($query_cat);
										echo "<b>".mysql_num_rows($res_query)."</b>";
										?>  
                                        </div>
                                    </div>
                                </div>                           
                                                           
                            </div>

                        </div>  
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Users</div>                                                                        
                                        <div class="widget-subtitle">with Director</div>
                                        <div class="widget-int">
                                         <?php 
										$query_user="select id from  login";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?> 
                                        </div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">State Manager</div>                                       
                                        <div class="widget-int">
                                        <?php 
										$query_user="select id from  login where category='Manager' ";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?>
                                        </div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Data Entry Engineer</div>                                       
                                        <div class="widget-int">
                                         <?php 
										$query_user="select id from  login where category='Clerk' ";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?>
                                        </div>
                                    </div>
                                </div>                            
                                                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        
                        
                        
                        <div class="col-md-3">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"> <?php 
										$query_user="select id from  login where category='Director' ";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?></div>
                                    <div class="widget-title">Director</div>   
                                     <div class="widget-subtitle">On Admin Panel of website</div>                                 
                                </div>
                                                            
                            </div>

                        </div>
                        
                        
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onClick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">  <?php 
										$query_user="select id from  login where category='Manager' ";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?></div>
                                    <div class="widget-title">State Manager</div>
                                    <div class="widget-subtitle">On Admin Panel of website</div>   
                                </div>
                                                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        
                        
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onClick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">  <?php 
										$query_user="select id from  login where category='Clerk' ";
										$res_user=mysql_query($query_user);
										echo "<b>".mysql_num_rows($res_user)."</b>";
										?></div>
                                    <div class="widget-title">Data Entry Engineer</div>
                                    <div class="widget-subtitle">On Admin Panel of website</div>   
                                </div>
                                                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    
                    
                    <div class="row">
                        <div class="col-md-3">

                            <div class="widget widget-warning widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Visitors</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Returned</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">New</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="javascript:;" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">599</div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On our website and app</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="javascript:;" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-success widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">6,953</div>
                                    <div class="widget-title">Total visitors</div>
                                    <div class="widget-subtitle">That visited our site today</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="javascript:;" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-warning widget-item-icon">
                                <div class="widget-item-right">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data-left">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>                                     
                            </div>

                        </div>

                    </div>
                    
                    
                    
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>   
            
        
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <?php include "config/signout.php"  ;  ?>
        <!-- END MESSAGE BOX-->

       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
       <?php /*?> <script type="text/javascript" src="js/settings.js"></script><?php */?>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>