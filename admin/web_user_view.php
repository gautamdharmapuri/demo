<?php error_reporting(0);   session_start();
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
        <title><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?> Website User Management | NRIs</title>       
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
                  <?php include "includes/top.php" ;  ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                   <li><a href="dashboard.php">Home</a></li>     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?>Website User Management </li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from fam_temples where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state,b.state_code from register a, states b where a.state = b.state_code and md5(a.id) = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                           
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo ucwords($rs['fname']); ?> - User Details</h3>
                                </div>
                                <?php /*?><div class="panel-body">
                                    <p>Add class <code>.panel-body-table</code> to <code>panel-body</code> to remove paddings in panel and borders in table.</p>
                                </div><?php */?>
                                <div class="panel-body panel-body-table">                                
                                    <table class="table table-bordered">
                                       
                                       
                                       
                                         <thead>
                                            <tr>
                                                <th>Name</th>                      
                                                <th><?php echo ucwords($rs['fname']); ?>&nbsp;<?php echo ucwords($rs['lname']); ?></th>                                               
                                            </tr>
                                        </thead>
                                       
                                       
                                       
                                         <tr>
                                            <th style="width:15%;">E-mail</th>                      
                                            <th><?php echo strtolower($rs['email']); ?></th>                                               
                                        </tr>
                                       
                                    <thead>
                                        <tr>
                                            <th>Conatct No</th>                      
                                            <th><?php echo $rs['mobile']; ?></th>                                               
                                        </tr>
                                    </thead> 
                                       
                                  
                                  
                                     <tr>
                                                <th>Date of Birth :</th>                      
                                                <th><?php echo date("d M, Y",strtotime($rs['dob'])); ?></th>                                               
                                       </tr>  
                                          
                                    
                                    
                                      <thead>
                                        <tr>
                                            <th>Password</th>                      
                                            <th><?php echo $rs['password']; ?></th>                                               
                                        </tr>
                                    </thead>   
                                       
                                   
                                   
                                   <tr>
                                                <th>Address:</th>                      
                                                <th><a href="https://maps.google.com/maps?saddr=&daddr=<?php echo urlencode($rs['address']);?>" target="_blank" class="address_link">
		<span class="glyphicon-map-marker"></span>
		<?php echo ucwords($rs['address']); ?>
	</a></th>                                               
                                       </tr>      
                                       
                                       
                                       
                                       
                                       
                                       <thead>                                           
                                            <tr>
                                                <th>State</th>  
                                                <th>
                                                 <?php   if(isset($_GET['editId'])) {
                                                        echo $rs['state'];  } ?>                                                </th>
                                            </tr>
                                        </thead>                                       
                                      
                                       <tr>
                                                <th>City</th>      
                                                <th>
                                                <?php
												$query_city=mysql_query("select id,city from  cities where id='".$rs['city']."'");
															$rcity = mysql_fetch_array($query_city);
															echo ucwords($rcity['city']);
												?>                                                </th>
                                            </tr>
                                      
                                    
                                
                                      
                                       
                                   <thead>
                                        <tr>
                                                <th>Status</th>                      
                                                <th><?php if($rs['isactive']==1) { echo "Active" ; } else { echo "De-Active" ; } ?></th>                                               
                                      </tr> 
                                    </thead>   
                                    </table>                                
                                        <div style="text-align:right">
                                        <a class="btn btn-info" href="web_users.php">Back</a>
                                        </a>                                        </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-2"></div>
                           <br style="clear:both;"><br><br><br><br><br>
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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
  
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
    <!-- END SCRIPTS -->                   
    </body>
</html>