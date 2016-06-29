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
				
				$main_id=trim($_POST['txtmain']);					
				$main_id=stripslashes($main_id);
				$main_id=mysql_real_escape_string($main_id);				
				
				
				$name=trim($_POST['txtname']);					
				$sub_cat=stripslashes($name);
				$sub_cat=mysql_real_escape_string($sub_cat);				
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/forum/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/forum/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];		
				
			
									
						
				$query="update forum_sub_categories set main_cat_id='".$main_id."',sub_cat_name='".$sub_cat."',image='".$image."' where sub_id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Forum Sub Category Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='forum_categories.php';</script>";
				exit;			
				
			}
	
				
				$main_id=trim($_POST['txtmain']);					
				$main_id=stripslashes($main_id);
				$main_id=mysql_real_escape_string($main_id);				
				
				
				$name=trim($_POST['txtname']);					
				$sub_cat=stripslashes($name);
				$sub_cat=mysql_real_escape_string($sub_cat);				
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/forum/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];					
				
				
				
		
		 $query="insert into forum_sub_categories(main_cat_id,sub_cat_name,image) values('".$main_id."','".$sub_cat."','".$image."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Forum Sub Category Details added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='forum_categories.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Forum Sub Category | NRIs</title>            
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
		
		
		if (document.getElementById('txtmain').value=='')
		{
			alert('Please Select Main Category Name');			
			document.getElementById('txtmain').focus();
			return false;
		}
		
		if (document.getElementById('txtname').value=='')
		{
			alert('Please Enter Forum Sub Category Name');			
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
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Forum Sub Category</li>

                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from forum_sub_categories where sub_id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Forum Sub Category</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                 
                                 
                                 <div class="form-group">
                                                <label class="col-md-3 control-label">Main Category</label>
                                                <div class="col-md-4">                                            
                                                     
                                                    
                                                       <select class="form-control select" data-style="btn-success" name="txtmain" id="txtmain">                                                   
													   	<?php if(isset($_GET['editId'])) {														
														$q_main = "select * from forum_categories where id = '".$rs['main_cat_id']."'";													
														$resultsq = mysql_query($q_main) ; 
														$rw =  mysql_fetch_array($resultsq);														
														
														?>
                                                        <option value="<?php echo $rw['id']; ?>" selected ><?php echo $rw['category_name']; ?></option>
														<?php }  ?>
                                                        <option value="">- Select Main Category -</option>
														<?php
														$querys="select * from  forum_categories order by category_name";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?> </option>
														<?php } ?>	
                                                        </select>
                                                       
                                                    <span class="help-block">Select Main Category</span>
                                                </div>
                                            </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-8 control-label">Sub Category Name</label>
                                        <div class="col-md-4 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $rs['sub_cat_name']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Forum Category Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Category Image</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                                     <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/forum/<?php echo $rs['image'];?>" height="40" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                                    <span class="help-block">Upload Sub Category Image</span>                                                </div>
                                            </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />                                    
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />                              
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Sub Category</button>
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