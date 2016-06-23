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
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?> Batches | NRIs</title>       
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
                    <li><a href="batches.php">State Famous Places</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?>Batches Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from batches where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state from batches a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                           
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo ucwords($rs['title']); ?> - Batches Details</h3>
                                </div>
                                <?php /*?><div class="panel-body">
                                    <p>Add class <code>.panel-body-table</code> to <code>panel-body</code> to remove paddings in panel and borders in table.</p>
                                </div><?php */?>
                                <div class="panel-body panel-body-table">                                
                                    <table class="table table-bordered">
                                       
                                       <thead>                                           
                                            <tr>
                                                <th>State</th>  
                                                <th>
                                                 <?php   if(isset($_GET['editId'])) {
                                                        echo $rs['state'];  } ?> 
                                                </th>
                                               
                                            </tr>
                                        </thead>                                       
                                      
                                     
                                    
                                            <tr>
                                                <th>Title</th>                      
                                                <th><?php echo ucwords($rs['title']); ?></th>                                               
                                            </tr>
                                      
                                        
                             		  <thead>
                                        <tr>
                                            <th style="vertical-align:middle;">Category</th>                      
                                             <th><?php echo ucwords($rs['category']); ?></th>                                         
                                        </tr>
                                    </thead>   
                              			
                              
                                  
                                        <tr>
                                            <th style="vertical-align:middle;">Details</th>                      
                                            <th><?php echo $rs['details']; ?></th>                                               
                                        </tr>
                                   
                                    
                                    
                                       
                                   
                                    
                                    
                                    <thead>
                                   
                                   	  <tr>
                                                <th>Status</th>                      
                                                <th><?php echo ucwords($rs['status']); ?></th>                                               
                                      </tr>  
                                 </thead>
                                 
                                     
                                  
                                        <tr>
                                            <th style="width:15%;">E-mail Id</th>                      
                                            <th><?php echo strtolower($rs['email_id']); ?></th>                                               
                                        </tr>
                                  
                                   <thead>       
                                       <tr>
                                                <th>Expiry Date</th>                      
                                                <th><?php echo date("d M Y",strtotime($rs['expdate'])); ?></th>                                               
                                      </tr>  
                                      </thead>
                                 
                                  
                                        
                                 
                                   	  <tr>
                                                <th>Other Details</th>                      
                                                <th><?php echo ucfirst($rs['other_details']); ?></th>                                               
                                      </tr>
                                             
                                     
                                    
                                        <tr>
                                            
                                            <th colspan="2" align="center" style="text-align:center">

											<?php   if (strpos($rs['image'],'.') !== false) {  ?>
                             			   <img src="uploads/batches/<?php echo $rs['image'];?>" width="300" height="auto"> 	<?php }  else {  ?>
                                           <img src="img/no_image.png" height="auto" width="300">
                                           <?php } ?>

                                            </th>                                               
                                        </tr>
                                 
                                     
                                        
                                    </table>                                
                                        <div style="text-align:right">
                                        <a class="btn btn-info" href="batches.php">Back</a>
                                        </a>
                                        </div>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                                                   
                            </div>
                           
                            
                        </div>
                         <div class="col-md-1"></div>
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