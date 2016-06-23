<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
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
				
				
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
		
				
						
									
						
				$query="update baby_sitting set name='".$a."'  where id='".$_POST['id']."'";
			
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Baby Sitting Category Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='baby_cats.php';</script>";
				exit;			
				
			}
	
				
				
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
			
		
		 $query="insert into baby_sitting(name) values('".$a."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Baby Sitting Category added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='baby_cats.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Baby Sitting Category | NRIs</title>            
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
		
	
		if (document.getElementById('txtname').value=='')
		{
			alert('Please Enter Baby Sitting Category Name');			
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
                    <li><a href="baby_cats.php">Free Ads Category Management</a></li>     
                    <li class="active">Baby Sitting Category</li>            
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from baby_sitting where id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                           
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Baby Sitting Category</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Category Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $rs['name']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Baby Sitting Category Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />    
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Baby Sitting Category</button>
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
						txtname: {
                                required: true
                        }
					   
                      
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->                   
    </body>
</html>