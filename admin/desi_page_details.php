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
				
				
				$name=trim($_POST['txttitle']);					
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
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$mail=strtolower(trim($_POST['txtmail']));	
				$mail=stripslashes($mail);
				$mail=mysql_real_escape_string($mail);
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');	
				
				

				
				$others=trim($_POST['txtotherdetails']);	
				$others=stripslashes($others);
				$others=mysql_real_escape_string($others);
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/desipages/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/desipages/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update desi_pages set state_code='".$a."',city_id='".$b."',title='".$c."',category_name='".$d."',contact='".$ph."',address='".$add."',details='".$details."',url='".$url."',email='".$mail."',status='".$status."',image='".$image."',other_details='".$others."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Desi Page Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='desi_pages.php';</script>";
				exit;			
				
			}
	
				
				$st=trim($_POST['txtstate']);					
				$a=stripslashes($st);
				$a=mysql_real_escape_string($a);
				
				$ct=trim($_POST['txtcity']);					
				$b=stripslashes($ct);
				$b=mysql_real_escape_string($b);
				
				$name=trim($_POST['txttitle']);					
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
				
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$mail=strtolower(trim($_POST['txtmail']));	
				$mail=stripslashes($mail);
				$mail=mysql_real_escape_string($mail);
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');			
				
				
								
				$others=trim($_POST['txtotherdetails']);	
				$others=stripslashes($others);
				$others=mysql_real_escape_string($others);

				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/desipages/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
		
		 $query="insert into desi_pages(state_code,city_id,title,category_name,contact,address,details,url,email,status,image,other_details,date,time) values('".$a."','".$b."','".$c."','".$d."','".$ph."','".$add."','".$details."','".$url."','".$mail."','".$status."','".$image."','".$others."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Desi Page added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='desi_pages.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Desi Page | NRIs</title>            
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
		if (document.getElementById('txttitle').value=='')
		{
			alert('Please Enter Page Title');			
			document.getElementById('txttitle').focus();
			return false;
		}
		if (document.getElementById('txtttype').value=='')
		{
			alert('Please Enter Page Category');			
			document.getElementById('txtttype').focus();
			return false;
		}
		
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 1)	
				{
						alert('Please Enter Page Address');					
						document.getElementById('txtdesc').focus();
						return false;
				}
				
		data2  = document.getElementById('txtdetails').value;
				 if (data2.length < 5)	
				{
						alert('Please Enter Page Details');					
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
                      <li><a href="desi_pages.php">State Famous Places</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Desi Page Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from desi_pages where state_code='".$_GET['editId']."'";
								 $query="select a.*, b.state from desi_pages a, states b where a.state_code = b.state_code and a.id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Desi Page</h3>
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
                                        <label class="col-md-3 col-xs-12 control-label">Desi Page Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txttitle" id="txttitle" class="form-control" value="<?php echo $rs['title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Desi Page Title</span>                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Desi Page Category</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtttype" id="txtttype">                                                     	<?php
													   	if(isset($rs['category_name']))
														{?>
                                                        <option value="<?php echo $rs['category_name']; ?>" selected ><?php echo $rs['category_name']; ?></option
                                                         ><?php }  ?>
                                                         
                                                         
                                                         <option value="">- Select Category -</option>
                                                        <?php 
															$q_cat = "select * from desi_pages_cat order by name";
															$result_cat = mysql_query($q_cat);
															while($fscat = mysql_fetch_array($result_cat)) { 
														?>
                                                         <option value="<?php echo $fscat['name'];  ?>"><?php echo $fscat['name'];  ?></option>
                                                         <?php } ?>
                                                 
                                                        </select>
                                                <span class="help-block">Select Desi Page Category</span>
                                                </div> <a href="desi_categories.php">If Not Found Category - Click here</a>
                                            </div>
                                            
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Conatct No</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" name="txtph" id="txtph" class="form-control" value="<?php echo $rs['contact']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Desi Page Conatct No</span>                                        </div>
                                    </div>        
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="txtdesc" id="txtdesc" rows="5"><?php echo $rs['address']; ?></textarea>
                                            <span class="help-block">Desi Page Address</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Details</label>
                                        <div class="col-md-8 col-xs-12">                                            
                                           <textarea class="summernote" name="txtdetails" id="txtdetails"><?php echo $rs['details']; ?></textarea>
                                                                              </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL (If any)</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                                <input type="text" name="txturl" id="txturl" class="form-control" value="<?php echo $rs['url']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Desi Page URL</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="text" name="txtmail" id="txtmail" class="form-control" value="<?php echo strtolower($rs['email']); ?>"/>
                                            </div>                                            
                                            <span class="help-block">Desi Page E-mail Id</span>                                        </div>
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
                                                <span class="help-block">Select Desi Page Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Desi Page Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/desipages/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">Desi Page Image</span>                                        </div> 
                                    
                                    
                                    
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
                                    <input type="hidden" name="cityId" id="cityId" value="<?php echo $rs['city_id'];?>" />                                    
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Desi Page Details</button>
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