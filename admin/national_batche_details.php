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
				
			
				
				
				$name=trim($_POST['txttitle']);					
				$b=stripslashes($name);
				$b=mysql_real_escape_string($b);
				
				$cat=trim($_POST['txtcat']);	
				$cat=stripslashes($cat);
				$cat=mysql_real_escape_string($cat);
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				$ed=strtolower(trim($_POST['txtedate']));	
				$ed=stripslashes($ed);
				$ed=mysql_real_escape_string($ed);					
				
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
					
				
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/national_batches/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/national_batches/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update natioal_batches set title='".$b."',category='".$cat."',details='".$details."',status='".$status."',image='".$image."',expdate='".$ed."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('National Batches Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='national_batches.php';</script>";
				exit;			
				
			}
	
				
			
				
				
				
				$name=trim($_POST['txttitle']);					
				$b=stripslashes($name);
				$b=mysql_real_escape_string($b);
				
				$cat=trim($_POST['txtcat']);	
				$cat=stripslashes($cat);
				$cat=mysql_real_escape_string($cat);
				
				
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
				$ed=strtolower(trim($_POST['txtedate']));	
				$ed=stripslashes($ed);
				$ed=mysql_real_escape_string($ed);					
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');			
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/national_batches/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
		
		 $query="insert into natioal_batches(title,category,details,status,image,expdate,date,time) values('".$b."','".$cat."','".$details."','".$status."','".$image."','".$ed."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('National Batches added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='national_batches.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>National Batches | NRIs</title>            
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
	
		if (document.getElementById('txttitle').value=='')
		{
			alert('Please Enter Title');			
			document.getElementById('txttitle').focus();
			return false;
		}
		
		if (document.getElementById('txtcat').value=='')
		{
			alert('Please Select Category');			
			document.getElementById('txtcat').focus();
			return false;
		}
		
		
		
		data  = document.getElementById('txtdetails').value;
				 if (data.length < 5)	
				{
						alert('Please Enter Details');					
						document.getElementById('txtdetails').focus();
						return false;
				}
				
		
				
		if (document.getElementById('txtstatus').value=='')
		{
			alert('Please Select Status');			
			document.getElementById('txtstatus').focus();
			return false;
		}
		
		if (document.getElementById('txtedate').value=='')
		{
			alert('Please Enter Expiry Date');			
			document.getElementById('txtedate').focus();
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
					<li><a href="national_batches.php">Home Page Link</a></li>
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>National Batches Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from natioal_batches where id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong>National Batches</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                                                      	      
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txttitle" id="txttitle" class="form-control" value="<?php echo $rs['title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Batch Title</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                      
                                      
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Category</label>
                                                <div class="col-md-6 col-xs-12"> 
                                             		 
                                                 <select class="form-control select" data-style="btn-success" name="txtcat" id="txtcat">
                                              			 <?php   if(isset($_GET['editId'])) {
																$query_cats = "select * from national_batch_cat  where id = '".$rs['category']."'";
																$result_cats = mysql_query($query_cats);
																$editrs = mysql_fetch_array($result_cats); ?>                                                               
														
                                                         <option value="<?php echo $editrs['id']; ?>" selected><?php echo $editrs['name']; ?></option>                                
                                                        <?php } ?>  
                                                        <option value="">- Select Category -</option>
                                                        <?php 
															$query_cat="select * from national_batch_cat  order by name";
															$result_cat = mysql_query($query_cat);
															while($rsfs = mysql_fetch_array($result_cat))
															{ ?>
                                                            <option value="<?php echo $rsfs['id'] ; ?>"><?php echo $rsfs['name'] ; ?></option>
                                                            <?php } ?>                                                        

															
                                                 </select>
                                                 
                                                <span class="help-block">Select Category</span>
                                                </div>
                                            </div>        
                                    
                                            
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Enter Content</label>
                                        <div class="col-md-8 col-xs-12">                                            
                                           <textarea class="summernote" name="txtdetails" id="txtdetails"><?php echo $rs['details']; ?></textarea>
                                                                              </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Status</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtstatus" id="txtstatus">                                                     	<?php
													   	if(isset($rs['status']))
														{?>
                                                        <option value="<?php echo $rs['status']; ?>" selected ><?php echo $rs['status']; ?></option>
														<?php }  ?>
                                                        <option value="">- Select Status -</option>
                                                        <option value="Active">Active</option>
                                                        <option value="De-Active" >De-Active</option>
                                                      
                                                        </select>
                                                <span class="help-block">Select Batch Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Batch Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/national_batches/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Batche Image</span>                                        </div> 
                                    
                                    
                                    
                                </div>
                                
                                
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Expiry Date</label>
                                        <div class="col-md-2">
                                            <div class="input-group" >
                                            <input type="text" class="form-control datepicker" value="<?php echo ($rs['expdate'] != '0000-00-00' && $rs['expdate'] != '') ? $rs['expdate'] : date('Y-m-d'); ?>" name="txtedate" id="txtedate">
                                             <label class="input-group-addon add-on" for="txtedate">
												<span class="glyphicon glyphicon-calendar"></span>
											 </label>
                                            </div> 
                                        </div>
                                  
                                    
                                    </div>
                                
                                
                                <div class="panel-footer">
                                    <a href="national_batches.php" class="btn btn-default">Back</a>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Batch Details</button>
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
          <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>
        <!-- START TEMPLATE -->
     
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>         
        <!-- END TEMPLATE -->
      
        
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "application/x-httpd-php",
                indentUnit: 4,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift"                                                
            });
            editor.setSize('100%','420px');
        </script>
        
    <!-- END SCRIPTS -->                   
    </body>
</html>