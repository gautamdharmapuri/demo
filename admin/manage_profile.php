<?php session_start(); error_reporting(0);
	  include"config/connection.php";	  
	   if(!isset($_SESSION['USNRIs_session']) || ($_SESSION['USNRIs_session']['category']!='Admistrator'))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/
if(isset($_POST['cmdsubmit']))
{  
	if($_POST['action']=='edit')
	{	
			$fname=strtolower(trim($_POST['txtfname'])); 
			$ph=trim($_POST['txtphone']); 
			$cat=trim($_POST['txtuserrole']); 
			
			$myusername=trim($_POST['txtusernm']);
			$mypassword=trim($_POST['txtpass1']); 
			
			
			$fname = stripslashes($fname);
			$fname = mysql_real_escape_string($fname);
			
			$myusername = stripslashes($myusername);
			$mypassword = stripslashes($mypassword);
			$myusername = mysql_real_escape_string($myusername);
			$mypassword = mysql_real_escape_string($mypassword);
			
			$date = date("Y-m-d");
			$time = date("h:m:s");	
			
			
			
			
			if($cat=='Manager')
			{
			
			$s = "";
					@$mystates= $_POST['my_states']; if( is_array($mystates)){
					while (list ($key, $val) = each ($mystates)) {
					$states =  $val.",";
					$s .=  $states ;
					}
					}//
					else{echo "none";}
					
					
				//	echo $s;
				//	echo sizeof($mystates);
				//	exit;
					
					
					
					
					
			
				/*	$pieces = explode(".", $s);
					echo $pieces[0]."<br>";
					echo $pieces[1]."<br>";
					echo $pieces[2]."<br>";
					echo $pieces[3]."<br>";		
					echo $pieces[4]."<br>";			*/
					
			}
			else
			{
				$s='';
				
			}		
					
					
					
			$mail=strtolower(trim($_POST['txtmail'])); 

			
			 $query=mysql_query("update login set full_name='".$fname."',contact_no='".$ph."',email='".$mail."',username='".$myusername."',password='".$mypassword."',category='".$cat."',statenm='".$s."',total_states='".sizeof($mystates)."',date='".$date."',time='".$time."' where md5(id)='".$_POST['id']."'");
			if($query)
			{
				$msg = "<h3 class='sucess'>User Details Updated Successfully!..</h3>";				
			}
				
	}
	else { 
		
			

		$fname=strtolower(trim($_POST['txtfname'])); 
		$ph=trim($_POST['txtphone']); 
		$cat=trim($_POST['txtuserrole']); 
		
		$myusername=trim($_POST['txtusernm']);
		$mypassword=trim($_POST['txtpass1']); 
			$fname = stripslashes($fname);
			$fname = mysql_real_escape_string($fname);

		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		
		$date = date("Y-m-d");
		$time = date("h:m:s");	
		
		$mail=strtolower(trim($_POST['txtmail'])); 
		
		
		
		if($cat=='Manager')
			{
			
			$s = "";
					@$mystates= $_POST['my_states']; if( is_array($mystates)){
					while (list ($key, $val) = each ($mystates)) {
					$states =  $val.",";
					$s .=  $states ;
					}
					}//
					else{echo "none";}
			
			}
			else
			{
				$s='';
				
			}	
	
		
		$query=mysql_query("insert into login (full_name,contact_no,email,username,password,category,statenm,total_states,date,time) VALUES('".$fname."','".$ph."','".$mail."','".$myusername."','".$mypassword."','".$cat."','".$s."','".sizeof($mystates)."','".$date."','".$time."')");
			if($query)
			{
				$msg = "<h3 class='sucess'>User Added Successfully!..</h3>";
			}
   
  }

}

?>	
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?>User | NRIs</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
       <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
<style type="text/css">
.sucess
{
color:#FFFFFF;font-weight:bold;clear:both;background-color:#009900;font-weight:bold;padding:10px 10px;
}
</style>    
<script type="text/javascript">

function nospaces(t){

if(t.value.match(/\s/g)){

alert('Sorry, you are not allowed to enter any spaces');

t.value=t.value.replace(/\s/g,'');

}

}

</script>   

<script language="javascript" type="text/javascript">
function showDiv(elem){
   if(elem.value == 'Manager')
      document.getElementById('hidden_div').style.display = "block";
 if(elem.value == 'Clerk')
      document.getElementById('hidden_div').style.display = "none";
 if(elem.value == 'Director')
      document.getElementById('hidden_div').style.display = "none";
}
</script>                 

<script language="javascript" type="text/javascript">
function frmchk()
{

if(document.getElementById('txtuserrole').value=='Manager') 
{ 
	var boxes = document.getElementsByName("my_states[]");
	var ret = true;
	for (var x = 0; x < boxes.length; x++) {       
		if(boxes[x].value == '' || boxes[x].value == '0'){
			ret = false;
			break;
			} else {ret = true;} 
	
		 }    
	   if (ret == false)
	   {
		 alert('Please Select States Options'); return ret;        
	   }

}

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
                    <li><a href="settings.php">User Management</a></li>                    
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?>User Profile</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
								<?php if($msg!='')
                                {
                                echo $msg ;
                                }?>
                                
                                <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from login where md5(id)='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" name="jvalidate" role="form" class="form-horizontal" action="" method="post" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> User </strong> Profile Deatils</h3>
                                    
                                </div>
                               
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Full Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtfname" id="txtfname" value="<?php echo ucwords($rs['full_name']) ; ?>" tabindex="1"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Employee Full Name</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Contact Number</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                        <input type="text" class="form-control" name="txtphone" id="txtphone" value="<?php echo $rs['contact_no']; ?>" tabindex="2"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Employee Contact Number</span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            <?php
											if($rs['category']=='Admistrator')
											{ ?>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">User Role</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" class="form-control" name="txtuserrole" id="txtuserrole" value="<?php echo $rs['category']; ?>" readonly tabindex="4"/>
                                                    </div>                                            
                                                    <span class="help-block">User Role - Admistrator</span>
                                                </div>
                                            </div>
                                            
                                            <?php 	} else {   ?>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Select User Role</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="txtuserrole" id="txtuserrole" tabindex="3" onChange="showDiv(this)">                                             
                                                    <option value="">Select User Role</option>                              
                                                     <?php if (isset($rs['category']))
                                                        {  
														
														
																	
																	
																	
																
																	
																	if($rs['category']=='Director')
																	{ ?>
																	
																	 <option value="<?php echo $rs['category']; ?>" selected><?php echo "Director";  ?></option>       
																<?php 	}
																	
																	if($rs['category']=='Manager')
																	{ ?>
																	
																	 <option value="<?php echo $rs['category']; ?>" selected><?php echo "State Manager";  ?></option>       
																<?php 	}
																
																
																if($rs['category']=='Clerk')
																	{ ?>
																	
																	 <option value="<?php echo $rs['category']; ?>" selected><?php echo "Data Entry Enginee";  ?></option>       
																<?php 	}
																	
														
														
														
														?>
                                                        
                                                        <?php } ?>                      
                                                    <option value="Director">Director</option>
                                                    <option value="Manager">State Manager</option>
                                                    <option value="Clerk">Data Entry Engineer</option>
                                                    </select>
                                                    <span class="help-block">Select User Role for Login</span>
                                                </div>
                                            </div>
                                            
                                            
                                            <?php } ?>
                                            
                                            
                                            
                                            <div id="hidden_div" style="display: none;">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">State Allocate</label>
                                                <div class="col-md-9">                                                                                            
                                                                                                   
                                                <select name='my_states[]'  size=4 multiple class="form-control select">
                                               <?php
														$querys="select * from  states order by state";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['state_code'] ?>"><?php echo $row['state'] ?> </option>
														<?php } ?>	
                                                </select> 
                                                <span class="help-block">Select State Allocate for State Manager Role</span>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                           
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">E-mail</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" class="form-control" name="txtmail" id="txtmail" onKeyUp="nospaces(this)" tabindex="4" value="<?php echo strtolower($rs['email']) ; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter E-mail Id</span>
                                                </div>
                                            </div>
                                           
                                           
                                           
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" class="form-control" name="txtusernm" id="txtusernm" onKeyUp="nospaces(this)" tabindex="4" value="<?php echo $rs['username'] ; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Username</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                        <input type="text" class="form-control" name="txtpass1" id="txtpass1" onKeyUp="nospaces(this)" tabindex="5" value="<?php echo $rs['password'] ; ?>"/>
                                                    </div>            
                                                    <span class="help-block">Password field sample</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Re-Enter Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                        <input type="text" class="form-control" name="txtpass2" id="txtpass2" onKeyUp="nospaces(this)" tabindex="6" value="<?php echo $rs['password'] ; ?>"/>
                                                    </div>            
                                                    <span class="help-block">Re - Enter Password</span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <?php if(isset($_GET['editId'])) { ?>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />  <?php } ?>
                                      <input class="btn btn-primary pull-right" type="submit" name="cmdsubmit" id="cmdsubmit" value="<?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> User" tabindex="7">        
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
         <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <!-- START TEMPLATE -->
       
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        txtfname: {
                                required: true,
                                minlength: 2
                               
                        },
						 txtphone: {
                                required: true,
                                minlength: 5
                               
                        },
						txtuserrole: {
                                required: true
                               
                        },
						
                        txtmail: {
                                required: true,
                                email: true
                        },
						txtusernm: {
                                required: true,
                                minlength: 3
                        },
						txtpass1: {
                                required: true,
                                minlength: 2
                        },
                        'txtpass2': {
                                required: true,
                                minlength: 2,
                                maxlength: 10,
                                equalTo: "#txtpass1"
                        }
                      
                    }                                        
                });                                    

        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>