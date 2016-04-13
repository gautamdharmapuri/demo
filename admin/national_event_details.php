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
				
				
						
				
				
				/*$st=trim($_POST['txtstate']);					
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
						}*/
				
				
				$name=trim($_POST['txttitle']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
				$type=trim($_POST['txtttype']);					
				$d=stripslashes($type);
				$d=mysql_real_escape_string($d);
				
			
	
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
					
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$sd=strtolower(trim($_POST['txtsdate']));	
				$sd=stripslashes($sd);
				$sd=mysql_real_escape_string($sd);
				
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
				$img="uploads/national_events/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/national_events/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update national_events set title='".$c."',category='".$d."',details='".$details."',address='".$add."',url='".$url."',sdate='".$sd."',edate='".$ed."',status='".$status."',image='".$image."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('National Event Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='national_events.php';</script>";
				exit;			
				
			}
	
				
				/*$st=trim($_POST['txtstate']);					
				$a=stripslashes($st);
				$a=mysql_real_escape_string($a);
				
				$ct=trim($_POST['txtcity']);					
				$b=stripslashes($ct);
				$b=mysql_real_escape_string($b);*/
				
				$name=trim($_POST['txttitle']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
				$type=trim($_POST['txtttype']);					
				$d=stripslashes($type);
				$d=mysql_real_escape_string($d);
				
			
	
				$details=trim($_POST['txtdetails']);	
				$details=stripslashes($details);
				$details=mysql_real_escape_string($details);
				
				
					
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				
				$url=strtolower(trim($_POST['txturl']));	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$sd=strtolower(trim($_POST['txtsdate']));	
				$sd=stripslashes($sd);
				$sd=mysql_real_escape_string($sd);
				
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
				$img="uploads/national_events/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
		
		 $query="insert into national_events(title,category,details,address,url,sdate,edate,status,image,date,time) values('".$c."','".$d."','".$details."','".$add."','".$url."','".$sd."','".$ed."','".$status."','".$image."','".$date."','".$time."')";		 

		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('National Event added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='national_events.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> National Event | NRIs</title>            
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
		/*if (document.getElementById('txtstate').value=='')
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
		}*/
		if (document.getElementById('txttitle').value=='')
		{
			alert('Please Enter National Event Title');			
			document.getElementById('txttitle').focus();
			return false;
		}
		if (document.getElementById('txtttype').value=='')
		{
			alert('Please Select National Event Category');			
			document.getElementById('txtttype').focus();
			return false;
		}
		
//		var data2  = document.getElementById('txtdetails').value;
		var data  = document.getElementById('txtdesc').value;		
			
				/* if (data2.length < 5)	
				{
						alert('Please Enter Details');					
						document.getElementById('txtdetails').focus();
						return false;
				}	*/
		
		

				 if (data.length < 1)	
				{
						alert('Please Enter Address');					
						document.getElementById('txtdesc').focus();
						return false;
				}
				
		
	
			var Sdate=document.getElementById('txtsdate').value;
			var Edate=document.getElementById('txtedate').value;		
     if(Sdate>Edate)
     {
     alert('Please Ensure End Date Should be Greater then Start Date');    
     return false;
     }
		
				
		if (document.getElementById('txtstatus').value=='')
		{
			alert('Please Select Advertisement Status');			
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
                      <li><a href="national_events.php">Home Page Link</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>National Event Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from national_events where state_code='".$_GET['editId']."'";
								 $query="select* from national_events where id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> National Event</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                        
                              	  
                                  
                                  <?php /*?><div class="form-group">
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
                                            </div><?php */?>
                                  
                                  
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">National Event Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txttitle" id="txttitle" class="form-control" value="<?php echo $rs['title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">National Event Title</span>                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">National Event Category</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtttype" id="txtttype">                                                     	<?php
													   	if(isset($rs['category']))
														{?>
                                                        <option value="<?php echo $rs['category']; ?>" selected ><?php echo $rs['category']; ?></option
                                                         ><?php }  ?>
                                                        <option value="">- Select Category -</option>
                                                        <option value="Personal">Personal</option>
                                                        <option value="Community">Community</option>
                                                        <option value="Religious">Religious</option>
                                                        <option value="Cultural">Cultural</option>
                                                        <option value="Movie">Movie</option>
                                                       
                                                 
                                                        </select>
                                                <span class="help-block">Select National Event Category</span>
                                                </div> 
                                            </div>
                                            
                                    
                               
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Details</label>
                                        <div class="col-md-8 col-xs-12">                                            
                                           <textarea class="summernote" name="txtdetails" id="txtdetails"><?php echo $rs['details']; ?></textarea>
                                                                              </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="txtdesc" id="txtdesc" rows="5"><?php echo $rs['address']; ?></textarea>
                                            <span class="help-block">National Event Address</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL (If any)</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                                <input type="text" name="txturl" id="txturl" class="form-control" value="<?php echo $rs['url']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">National Event URL</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                   <div class="form-group">
                                        <label class="col-md-3 control-label">Start Date</label>
                                        <div class="col-md-2">
                                            <div class="input-group" >
                                            <input type="text" class="form-control datepicker" value="<?php echo $rs['sdate']; ?>" name="txtsdate" id="txtsdate">
                                             <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div> 
                                        </div>
                                  
                                    
                                    
                                    
                                  
                                        <label class="col-md-2 control-label">End Date</label>
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <input type="text" class="form-control datepicker" value="<?php echo $rs['edate']; ?>" name="txtedate" id="txtedate">
                                             <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                           </div>  
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
                                                <span class="help-block">Select National Event Status</span>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">National Event Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/national_events/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">National Event Image</span>                                        </div> 
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <a href="national_events.php" class="btn btn-default">Back</a>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="cityId" id="cityId" value="<?php echo $rs['city_id'];?>" />                                    
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> National Event Details</button>
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