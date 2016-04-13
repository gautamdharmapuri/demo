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
				$a=stripslashes($st);
				$a=mysql_real_escape_string($a);
				
				
				
				$name=trim($_POST['txttitle']);					
				$b=stripslashes($name);
				$b=mysql_real_escape_string($b);
				
				
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
				
				$email_ID=strtolower(trim($_POST['txtemail']));	
				$email_ID=stripslashes($email_ID);
				$email_ID=mysql_real_escape_string($email_ID);
				
				
				$others=trim($_POST['txtotherdetails']);	
				$others=stripslashes($others);
				$others=mysql_real_escape_string($others);
					
				
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/announcements/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/announcements/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update announcement set state_code='".$a."',title='".$b."',details='".$details."',status='".$status."',image='".$image."',email_id='".$email_ID."',other_details='".$others."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Announcement Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='announcements.php';</script>";
				exit;			
				
			}
	
				
				$st=trim($_POST['txtstate']);					
				$a=stripslashes($st);
				$a=mysql_real_escape_string($a);
				
				
				
				$name=trim($_POST['txttitle']);					
				$b=stripslashes($name);
				$b=mysql_real_escape_string($b);
				
				
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');	
				
				$email_ID=strtolower(trim($_POST['txtemail']));	
				$email_ID=stripslashes($email_ID);
				$email_ID=mysql_real_escape_string($email_ID);
				
				
				$others=trim($_POST['txtotherdetails']);	
				$others=stripslashes($others);
				$others=mysql_real_escape_string($others);		
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/announcements/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
		
		 $query="insert into announcement(state_code,title,details,status,image,email_id,other_details,date,time) values('".$a."','".$b."','".$details."','".$status."','".$image."','".$email_ID."','".$others."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Announcement added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='announcements.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Announcement | NRIs</title>            
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
		
	
		if (document.getElementById('txttitle').value=='')
		{
			alert('Please Enter Title');			
			document.getElementById('txttitle').focus();
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
			alert('Please Select Page Status');			
			document.getElementById('txtstatus').focus();
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
                      <li><a href="announcements.php">State Famous Places</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Announcement Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from announcement where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state from announcement a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Announcement</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                        
                              	    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">State</label>
                                                <div class="col-md-6 col-xs-12"> 
                                              <select class="form-control select" data-style="btn-success" name="txtstate" id="txtstate" onChange="showUser();">
                                              			 <?php   if(isset($_GET['editId'])) { ?>
                                                         <option value="<?php echo $rs['state_code']; ?>" selected><?php echo $rs['state']; ?></option>                                
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
                                        <label class="col-md-3 col-xs-12 control-label">Announcement Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txttitle" id="txttitle" class="form-control" value="<?php echo $rs['title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Announcement Title</span>                                        </div>
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
                                                <span class="help-block">Select Announcement Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Announcement Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/announcements/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Announcement Image</span>                                        </div> 
                                    
                                    
                                    
                                </div>
                                
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="text" name="txtemail" id="txtemail" class="form-control" value="<?php echo $rs['email_id']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">E-mail Id</span>                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Other Details</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="txtotherdetails" id="txtotherdetails" rows="5"><?php echo $rs['other_details']; ?></textarea>
                                            <span class="help-block">Other Details</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Announcement Details</button>
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