<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
	    include "includes/state_code.php";	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/


if(isset($_POST['submit']))
	{ 
			if($_POST['action']=='edit')
			{
				
				$st=trim($_POST['txtstate']);					
				$st=stripslashes($st);
				$st=mysql_real_escape_string($st);
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
		
				
						
									
						
				$query="update cities set city='".$a."', state_code='".$st."'  where id='".$_POST['id']."'";
				$result=mysql_query($query);
				mysql_query("update videos set category='".$a."'  where category='".$_POST['defaultcat']."'");
				 echo "<script language='javascript' type='text/javascript'>alert('City Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='city_management.php';</script>";
				exit;		
				
				
				
			}
	
				
				$st=trim($_POST['txtstate']);					
				$st=stripslashes($st);
				$st=mysql_real_escape_string($st);
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
			
				
				
			
				
			
		
		 $query="insert into cities(city,state_code) values('".$a."','".$st."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('City added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='city_management.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> City Management | NRIs</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                   
<script language="javascript" type="text/javascript">
	function frmchk()
	{
		if (document.getElementById('txtstate').value=='')
		{
			alert('Please Select State Name');			
			document.getElementById('txtstate').focus();
			return false;
		}
	
		if (document.getElementById('txtname').value=='')
		{
			alert('Please Enter City Name');			
			document.getElementById('txtname').focus();
			return false;
		}
		
		
		
					
		return true;
	}
</script>        
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
                     <li><a href="city_management.php">City Management</a></li>            
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from cities where id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                           
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> City</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">State</label>
                                                <div class="col-md-6 col-xs-12"> 
                                              <?php /*?><select class="form-control select" data-style="btn-success" name="txtstate" id="txtstate" onChange="showUser();">
                                              			 <?php   if(isset($_GET['editId'])) { 
														 
														 $query_city="select a.*, b.state from  cities a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
														 $resultsss=mysql_query($query_city);                                                
														$fs=mysql_fetch_array($resultsss);
														?>
                                                         <option value="<?php echo $fs['state_code']; ?>" selected><?php echo $fs['state']; ?></option>                                
                                                        <?php } ?>  
                                                        <option value="">- Select State -</option>
														<?php
														$querys="select * from  states order by state";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['state_code'] ?>"><?php echo $row['state'] ?> </option>
														<?php } ?>	
                                                 </select><?php */?>
                                                 
                                                 
                                                 
                                                 <select class="form-control select" data-style="btn-success" name="txtstate" id="txtstate" onChange="showUser();">
                                              			 <?php   if(isset($_GET['editId'])) { 
														 
														  $query_city="select a.*, b.state from  cities a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
														 $resultsss=mysql_query($query_city);                                                
														$fs=mysql_fetch_array($resultsss);
														 ?>
                                                         <option value="<?php echo $fs['state_code']; ?>" selected><?php echo $fs['state']; ?></option>                                
                                                        <?php } ?>  
                                                        <option value="">- Select State -</option>
														<?php
														//$querys="select * from  states order by state";
														
																if($noofstates==0) 
																{											   
																	$querys="select * from  states order by state";
																}
																if($noofstates==1)
																{
																	$querys="select * from  states where state_code = ".$join_states_list." order by state";
																} 
																
																if($noofstates>1)
																{
																	$querys="select * from  states where state_code in(".$join_states_list.") order by state";
																} 
														
														
														//echo $querys;

														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['state_code'] ?>"><?php echo $row['state'] ?> </option>
														<?php } ?>	
                                                 </select>
                                                 
                                                <span class="help-block">Select State</span>
                                                </div>
                                            </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">City Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $rs['city']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">City Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />    
                                 <input type="hidden" name="defaultcat" id="defaultcat" value="<?php echo $rs['category_name']; ?>" />                                                               
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> City</button>
                                </div>
                            </div>
                            </form>
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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        
          <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
       
         <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script> 
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>         
        <!-- END TEMPLATE -->
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        
						txtstate: {
                                required: true
                        },
						txtname: {
                                required: true
                        }
					   
                      
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->                   
    </body>
</html>