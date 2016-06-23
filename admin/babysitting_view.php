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
        <title><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?> Baby Sitting Ads Management | NRIs</title>       
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
                      <li><a href="babysitting.php">Baby Sitting Classifieds</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "View "; } else { echo "Add  "; } ?>Baby Sitting Ads Management</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select a.*, b.name from post_free_baby_sitting a, baby_sitting b where a.AdsCat = b.id  and a.id='".$_GET['editId']."'";
								// echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                           
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php  if($rs['AdPostType']!='') {    echo "<b>".ucwords($rs['AdPostType'])."</b>" ; } else { echo "Free" ; } ?> AD - Baby Sitting Classifieds
                                    <?php  if($rs['AdPostType']!='') {    echo "<b>".ucwords($rs['AdPostType'])."</b>" ; }   ?></h3>
                                </div>
                                <?php /*?><div class="panel-body">
                                    <p>Add class <code>.panel-body-table</code> to <code>panel-body</code> to remove paddings in panel and borders in table.</p>
                                </div><?php */?>
                                <div class="panel-body panel-body-table">                                
                                    <table class="table table-bordered">
                                       
                                      
                                   
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Title</th>                                         
                                             <th> <?php    echo ucwords($rs['TitleAD']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Description</th>                                         
                                             <th> <?php    echo ucfirst($rs['Message']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Ad Category</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                     </thead>
                                    
                                    <thead>
                                       		<tr>
                                       		<th>Contact Name</th>                                         
                                             <th> <?php    echo ucwords($rs['ConatctNAME']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Contact Number</th>                                         
                                             <th> <a class="call_link" href="tel:<?php echo $rs['ConatctNumber']; ?>"><?php echo ucwords($rs['ConatctNumber']); ?></a> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Email</th>                                         
                                             <th> <?php    echo strtolower($rs['ConatctEmail']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Display Email?</th>                                         
                                             <th> <?php    if($rs['ShowEmail']=='Yes') { echo "Yes" ; } else { echo "No" ; }    ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                      
                                        
                                     <thead>
                                       		<tr>
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($rs['City']);   ?> </th>
                                         	</tr>
                                     </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Ad Expiry Date</th>                                         
                                             <th> <?php echo date("d M, Y",strtotime($rs['EndDate'])); ?> </th>
                                         	</tr>
                                       </thead>
                                    
                                    
                                    
                                    
                                    
                                        <tr>
                                            
                                            <th colspan="2" align="center" style="text-align:center">

											<?php   if (strpos($rs['image'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image'];?>" width="250" height="auto"> 	<?php }  else {  ?>
                                           <img src="img/no_image.png" height="auto" width="200">
                                           <?php } ?>
                                           
                                           
                                             <?php  if($rs['AdPostType']!='') {  
											 
											if (strpos($rs['image2'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image2'];?>" width="250" height="auto"> 	<?php }   ?>
                                           
                                           
                                            <?php   if (strpos($rs['image3'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image3'];?>" width="250" height="auto"> 	<?php }  ?>
											 
										   
										   <?php if (strpos($rs['image4'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image4'];?>" width="250" height="auto"> 	<?php }  ?>
                                           
                                           <?php  if (strpos($rs['image5'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image5'];?>" width="250" height="auto"> 	<?php }  ?>
                                           
                                            <?php  if (strpos($rs['image6'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image6'];?>" width="250" height="auto"> 	<?php } ?>
                                           
                                            <?php  if (strpos($rs['image7'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image7'];?>" width="250" height="auto"> 	<?php }  ?>
                                           
                                           
                                            <?php  if (strpos($rs['image8'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image8'];?>" width="250" height="auto"> 	<?php } ?>
                                           
                                           
                                            <?php  if (strpos($rs['image9'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image9'];?>" width="250" height="auto"> 	<?php } ?>
                                           
                                           
                                            <?php  if (strpos($rs['image10'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image10'];?>" width="250" height="auto"> 	<?php } ?>
                                           
                                            <?php  if (strpos($rs['image11'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image11'];?>" width="250" height="auto"> 	<?php } ?>                                           
                                           
                                           <?php  if (strpos($rs['image12'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image12'];?>" width="250" height="auto"> 	<?php } ?>                                           
                                           
											<?php  if (strpos($rs['image13'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image13'];?>" width="250" height="auto"> 	<?php } ?>                                                                                      
                                           
											<?php  if (strpos($rs['image14'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image14'];?>" width="250" height="auto"> 	<?php } ?>
                                           
                                           <?php  if (strpos($rs['image15'],'.') !== false) {  ?>
                             			   <img src="../uploads/baby_sitting/<?php echo $rs['image15'];?>" width="250" height="auto"> 	<?php } ?>                                                                                                                                 



										<?php } ?>
                                           
                                           
                                          

                                            </th>                                               
                                        </tr>
                                 
                                     
                                        
                                    </table>                                
                                        <div style="text-align:right">
                                        <a class="btn btn-info" href="babysitting.php">Back</a>
                                        </a>
                                        </div>
                                    
                                    
                                    
                                    
                                    
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