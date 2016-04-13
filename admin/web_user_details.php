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
				
				$ct=trim($_POST['txtcity']);					
				$b=stripslashes($ct);
				$b=mysql_real_escape_string($b);
				
						if($ct=='')
						{
							$ct = trim($_POST['cityId']);
							$b=stripslashes($ct);
							$b=mysql_real_escape_string($b);
						}
						
				
				$fname=trim($_POST['txtfname']);					
				$fn=stripslashes($fname);
				$fn=mysql_real_escape_string($fn);
				
				$lname=trim($_POST['txtlname']);					
				$ln=stripslashes($lname);
				$ln=mysql_real_escape_string($ln);
				
				$email_ID=strtolower(trim($_POST['txtemail']));	
				$email_ID=stripslashes($email_ID);
				$email_ID=mysql_real_escape_string($email_ID);
				
				
				$pass=strtolower(trim($_POST['txtpass']));	
				$pass=stripslashes($pass);
				$pass=mysql_real_escape_string($pass);
				
				
				
				$ph=trim($_POST['txtph']);					
				$ph=stripslashes($ph);
				$ph=mysql_real_escape_string($ph);
				
				$dob=trim($_POST['txtedate']);					
				$dob=stripslashes($dob);
				$dob=mysql_real_escape_string($dob);
				
				
				
				
	
				
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
			
				
			
						
				$query="update register set fname='".$fn."',lname='".$ln."',email='".$email_ID."',mobile='".$ph."',dob='".$dob."',password='".$pass."',address='".$add."',state='".$a."',city='".$b."',isactive='".$status."' where md5(id)='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('User Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='web_users.php';</script>";
				exit;			
				
			}
	
			
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Website User Management | NRIs</title>            
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
		if (document.getElementById('txtfname').value=='')
		{
			alert('Please Enter First Name');			
			document.getElementById('txtfname').focus();
			return false;
		}
		
		
		if (document.getElementById('txtlname').value=='')
		{
			alert('Please Enter Last Name');			
			document.getElementById('txtlname').focus();
			return false;
		}
		
		if (document.getElementById('txtemail').value=='')
		{
			alert('Please Enter E-mail');			
			document.getElementById('txtemail').focus();
			return false;
		}
	
		
		
		
		
		
		if (document.getElementById('txtstatus').value=='')
		{
			alert('Please Select Temple Status');			
			document.getElementById('txtstatus').focus();
			return false;
		}
	
		
					
		return true;
	}
</script>     

<script type="text/javascript">
    function showUser(str)
    {
    nm=document.getElementById('txtstate').value;
    if (str=="")
    {
    document.getElementById("myuser").innerHTML="";
    return;
    }
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myuser").innerHTML=xmlhttp.responseText;   
    }
    }
    xmlhttp.open("GET","city_select.php?q="+nm,true);
    xmlhttp.send();
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
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Website User Management</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from register where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state,b.state_code from register a, states b where a.state = b.state_code and md5(a.id) = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> User Management</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                        
                              	   
                                  
                                  
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First Name</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" name="txtfname" id="txtfname" class="form-control" value="<?php echo $rs['fname']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">First Name</span>                                        </div>
                                            
                                            
                                        <div class="form-group">
                                        <label class="col-md-1 col-xs-12 control-label">Last Name</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" name="txtlname" id="txtlname" class="form-control" value="<?php echo $rs['lname']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Last Name</span>                                        </div>
                                    </div>    
                                            
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="text" name="txtemail" id="txtemail" class="form-control" value="<?php echo $rs['email']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">E-mail Id</span>                                        </div>
                                            
                                            
                                            
                                       <div class="form-group">
                                        <label class="col-md-1 col-xs-12 control-label"> Password</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                               <div class="input-group" >
                                            <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="text" name="txtpass" id="txtpass" class="form-control" value="<?php echo $rs['password']; ?>"/>
                                             </div>   
                                            <span class="help-block">Password</span>                                        </div>
                                    </div>     
                                            
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Conatct No</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" name="txtph" id="txtph" class="form-control" value="<?php echo $rs['mobile']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Temple Conatct No</span>                                        </div>
                                            
                                            
                                            
                                            
                                       <div class="form-group">
                                               <label class="col-md-1 col-xs-12 control-label">Date of Birth</label>
                                                <div class="col-md-2 col-xs-12"> 
                                                 <div class="input-group" >
                                                	 <input type="text" class="form-control datepicker" value="<?php echo $rs['dob']; ?>" name="txtedate" id="txtedate">
                                             		<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                 </div>   
                                                </div>
                                            </div>     
                                            
                                            
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                                                                     
                                         	 <textarea class="form-control" name="txtdesc" id="txtdesc" rows="5"><?php echo $rs['address']; ?></textarea>
                                                                            
                                            </div>                                            
                                                                                    </div>
                                    </div>
                                    
                                    
                                    
                                    
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
                                               <label class="col-md-3 col-xs-12 control-label">City</label>
                                                 <div class="col-md-6 col-xs-12">    
														
                                                         <?php if (isset($rs['city']))
                                                        {  
															$query_city=mysql_query("select id,city from  cities where id='".$rs['city']."'");
															$rcity = mysql_fetch_array($query_city);
														?>
                                                         <option value="<?php echo $rcity['id']; ?>" selected style="padding:5px;"><?php echo $rcity['city']; ?></option>                                
                                                        <?php } ?>                                          
                                                    <div id="myuser">&nbsp;</div>                                         
                                                    <span class="help-block">Select City</span>
                                                </div>
                                            </div>
                                    
                                
                                    
                                  <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Status</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtstatus" id="txtstatus">                                                     	<?php
													   	if(isset($rs['isactive']))
														{?>
                                                        <option value="<?php echo $rs['isactive']; ?>" selected ><?php if($rs['isactive']==1) { echo "Active" ; } else { echo "De-Active" ; } ?></option>
														<?php }  ?>
                                                        <option value="">- Select Status -</option>
                                                        <option value="1">Active</option>
                                                        <option value="0" >De-Active</option>
                                                      
                                                        </select>
                                                <span class="help-block">Select User Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    
                                    
                             
                                
                                
                                <div class="panel-footer">
                                    <a href="web_users.php" class="btn btn-default">Back</a>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="cityId" id="cityId" value="<?php echo $rs['city'];?>" />                                    
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Edit User</button>
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
                       
						txtfname: {
                                required: true
                        },
						txtlname: {
                                required: true
                        },
						txtemail: {
                                required: true
                        },
						txtpass: {
                                required: true
                        },
						 txtph: {
                                required: true 
						},
						txtstatus: {
                                required: true 
						}
                      
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->                   
    </body>
</html>