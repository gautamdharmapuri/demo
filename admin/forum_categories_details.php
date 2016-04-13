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
				
				
			
									
						
				$query="update forum_categories set category_name='".$a."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Forum Category Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='forum_categories.php';</script>";
				exit;			
				
			}
	
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				
		
		 $query="insert into forum_categories(category_name) values('".$a."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Forum Category Details added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='forum_categories.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Forum Category | NRIs</title>            
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
			alert('Please Enter Forum Category Name');			
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
	                <li><a href="#">Forum</a></li>
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Forum Category</li>

                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from forum_categories where id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Forum Category</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Category Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $rs['category_name']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Forum Category Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />                                    
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />
                                    <input type="hidden" name="defaultcat" id="defaultcat" value="<?php echo $rs['category_name']; ?>" />                                 
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Category</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        
                        
                        
                      
                      
                      
                      
                      
                        <div class="col-md-6">
                          
                          
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php echo $rs['category_name']; ?></strong> Sub Categories</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>Sub Category Name</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                            <?php
												$j = 1;
												$query_right="select * from forum_sub_categories where main_cat_id  = '".$rs['id']."' order by sub_cat_name";
																							
                                                $result_right=mysql_query($query_right);        
												$ans =  mysql_num_rows($result_right);
												if($ans> 0) { 
                                                while($fs=mysql_fetch_array($result_right)) { ?>
                                                                                    
                                                <tr>
                                                    <td class="text-center"><?php echo $j ; ?></td>
                                                    <td><strong><?php echo ucwords($fs['sub_cat_name']); ?></strong></td>                                                    
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" href="forum_sub_categories_detail.php?action=edit&editId=<?php echo $fs['sub_id'];?>" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                                <?php $j++; } } else { ?>
                                                <tr>
                                                	<td colspan="3" align="center"><br><h5>Sub Category Not Found.</h5></td>
                                                </tr>
                                                <?php } ?>
                                                
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                    
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
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>