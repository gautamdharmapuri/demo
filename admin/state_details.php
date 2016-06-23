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
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/state/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/state/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];		
				
				
				
				if($_FILES['txtimage2']['name'] !=''){
				$image2=$round."_".$_FILES['txtimage2']['name'];
				$img2="uploads/state/".$image2;
				move_uploaded_file($_FILES['txtimage2']['tmp_name'],$img2);		
				$img2=$_FILES['txtimage2']['name'];	
				if($img2 != ''){unlink('uploads/state/'.$_POST['imgId2']);}
				if($img2 == ''){$img=$_POST['imgId2'];}
				}else
				$image2=$_POST['imgId2'];		
						
									
						
				$query="update states set state='".$a."',description='".$b."',image='".$image."',state_header='".$image2."' where state_code='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('State Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='state_management.php';</script>";
				exit;			
				
			}
	
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/state/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
				
				
				$image2=$round."_".$_FILES['txtimage2']['name'];
				$img2="uploads/state/".$image2;
				move_uploaded_file($_FILES['txtimage2']['tmp_name'],$img2);
				$img2=$_FILES['txtimage2']['name'];		
				
		
		 $query="insert into states(state,description,image,state_header) values('".$a."','".$b."','".$image."','".$image2."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('State added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='state_management.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> State Management | NRIs</title>            
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
			alert('Please Enter State Name');			
			document.getElementById('txtname').focus();
			return false;
		}
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 2)	
				{
						alert('Please Enter State Description');					
						document.getElementById('txtdesc').focus();
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
                 <?php include "includes/top.php" ; ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>     
                     <li><a href="state_management.php">State Management</a></li>               
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>State Management</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from states where state_code='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> State</h3>
                                   
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">State Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $rs['state']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">State Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> State Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="txtdesc" id="txtdesc" rows="5"><?php echo $rs['description']; ?></textarea>
                                            <span class="help-block">State Description</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">State Logo</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/state/<?php echo $rs['image'];?>" height="50" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Upload State Logo image</span>                                        </div>
                                            
                                           
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">State Header Image</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="txtimage2" id="txtimage2" title="Browse file"/>
                                             <?php   if (strpos($rs['state_header'],'.') !== false) {  ?>
                                <img src="uploads/state/<?php echo $rs['state_header'];?>" height="70" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Upload State Header Image
                                            &nbsp;&nbsp;
                                            <font color="#FF0000"><b>Height : 100px &nbsp;&nbsp;&nbsp;&nbsp; Width : 313px</b></font></span>                                        </div>
                                            
                                           
                                    </div>
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="imgId2" id="imgId2" value="<?php echo $rs['state_header'];?>" />                                    
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> State</button>
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