<?php error_reporting(0);   session_start();
	  include"config/connection.php";
	  include "includes/state_code.php";	  	  	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }


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
						
				
				$name=trim($_POST['txtemplenm']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
				$type=trim($_POST['txtttype']);					
				$d=stripslashes($type);
				$d=mysql_real_escape_string($d);
				
				$ph=trim($_POST['txtph']);					
				$ph=stripslashes($ph);
				$ph=mysql_real_escape_string($ph);
				
	
				
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$additional_info = trim($_POST['additional_info']);	
				$additional_info = stripslashes($additional_info);
				$additional_info = mysql_real_escape_string($additional_info);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');	
				
				$email_ID=strtolower(trim($_POST['txtemail']));	
				$email_ID=stripslashes($email_ID);
				$email_ID=mysql_real_escape_string($email_ID);
				
				
				$others=trim($_POST['txtotherdetails']);	
				$others=stripslashes($others);
				$others=mysql_real_escape_string($others);		
				
				$address = trim($_POST['address']);					
				$address = stripslashes($address);
				$address = mysql_real_escape_string($address);
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/city_movies/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/city_movies/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update fam_city_movies set state_code='".$a."',city_id='".$b."',
				  name='".$c."',url='".$url."',status='".$status."',image='".$image."',date='".$date."',
				  time='".$time."',address='".$address."',additional_info='".$additional_info."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Top City Movie Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='top_city_movies.php';</script>";
				exit;			
				
			}
	
				
				$st=trim($_POST['txtstate']);					
				$a=stripslashes($st);
				$a=mysql_real_escape_string($a);
				
				$ct=trim($_POST['txtcity']);					
				$b=stripslashes($ct);
				$b=mysql_real_escape_string($b);
				
				$address = trim($_POST['address']);					
				$address = stripslashes($address);
				$address = mysql_real_escape_string($address);
				
				$name=trim($_POST['txtemplenm']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
				$type=trim($_POST['txtttype']);					
				$d=stripslashes($type);
				$d=mysql_real_escape_string($d);
				
				$ph=trim($_POST['txtph']);					
				$ph=stripslashes($ph);
				$ph=mysql_real_escape_string($ph);
				
				  $additional_info = trim($_POST['additional_info']);	
				$additional_info = stripslashes($additional_info);
				$additional_info = mysql_real_escape_string($additional_info);
				
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
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
				
				if($_FILES['txtimage']['name'] != '') {
				  $image=$round."_".$_FILES['txtimage']['name'];
				  $img="uploads/city_movies/".$image;
				  move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				  $img=$_FILES['txtimage']['name'];		  
				}
				
		
		 $query="insert into fam_city_movies(state_code,city_id,name,url,status,image,date,time,address,additional_info) values('".$a."','".$b."','".$c."','".$url."','".$status."','".$image."','".$date."','".$time."','".$address."','".$additional_info."')";
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Top City Movie added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='top_city_movies.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Top City Movies | NRIs</title>            
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
		
		if (document.getElementById('txtcity').value=='')
		{
			alert('Please Select City Name');			
			document.getElementById('txtcity').focus();
			return false;
		}
		if (document.getElementById('txtemplenm').value=='')
		{
			alert('Please Enter Movie Name');			
			document.getElementById('txtemplenm').focus();
			return false;
		}
		
		
		
		if (document.getElementById('txtstatus').value=='')
		{
			alert('Please Select Movie Status');			
			document.getElementById('txtstatus').focus();
			return false;
		}
	
		
					
		return true;
	}
</script>     



<script type="text/javascript">
    function showUser(str)
    {
	document.getElementById("myuser").innerHTML="";
	/*document.getElementById("student_data").innerHTML="";*/
    nm=document.getElementById('txtstate').value;
	if (str=="")
    {
    document.getElementById("myuser").innerHTML="";
/*	document.getElementById("student_data").innerHTML="";*/
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
                      <li><a href="javascript:;">State Famous Places</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Top City Movie Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from fam_city_movies where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state from fam_city_movies a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Top City Movies</h3>
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
                                               <label class="col-md-3 col-xs-12 control-label">City</label>
                                                 <div class="col-md-6 col-xs-12">    
														
                                                         <?php if (isset($rs['city_id']))
                                                        {  
															$query_city=mysql_query("select id,city from  cities where id='".$rs['city_id']."'");
															$rcity = mysql_fetch_array($query_city);
														?>
                                                         <option value="<?php echo $rcity['id']; ?>" selected style="padding:5px;"><?php echo $rcity['city']; ?></option>                                
                                                        <?php } ?>                                          
                                                    <div id="myuser">&nbsp;</div>                                         
                                                    <span class="help-block">Select City</span>
                                                </div>
                                            </div>
                                  
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Movie Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="address" id="address" class="form-control" value="<?php echo $rs['address']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Movie Address</span>                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Movie Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtemplenm" id="txtemplenm" class="form-control" value="<?php echo $rs['name']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Movie Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL (If any)</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                                <input type="text" name="txturl" id="txturl" class="form-control" value="<?php echo $rs['url']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Movie URL</span>                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Other Info</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <textarea name="additional_info" id="additional_info" class="form-control"><?php echo $rs['additional_info'];?></textarea>
                                            </div>                                            
                                            <span class="help-block">Other Info</span>                                        </div>
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
                                                <span class="help-block">Select Movie Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Movie Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/city_movies/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Movie Image</span>                                        </div> 
                                    
                                    
                                    
                                </div>
                                
                                
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="cityId" id="cityId" value="<?php echo $rs['city_id'];?>" />                                    
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Top City Movie Details</button>
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
                        txtstate: {
                                required: true
                        },
					    txtcity: {
                                required: true
                        },
						txtemplenm: {
                                required: true
                        },
						txtttype: {
                                required: true
                        },
						txtph: {
                                required: true
                        },
						txtph: {
                                required: true
                        },
						 txtdesc: {
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