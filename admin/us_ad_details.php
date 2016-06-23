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
				
				$name=trim($_POST['txtaddnm']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);			
			
				
				$ph=trim($_POST['txtph']);					
				$ph=stripslashes($ph);
				$ph=mysql_real_escape_string($ph);
				
	
				
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				$title=trim($_POST['txtadtitle']);	
				$title=stripslashes($title);
				$title=mysql_real_escape_string($title);
				
				$amt=trim($_POST['txtamount']);	
				$amt=stripslashes($amt);
				$amt=mysql_real_escape_string($amt);
				
				$position=trim($_POST['txtposition']);	
				$position=stripslashes($position);
				$position=mysql_real_escape_string($position);
				
				$pno=trim($_POST['txtpno']);	
				$pno=stripslashes($pno);
				$pno=mysql_real_escape_string($pno);
				
			
							
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
				$img="uploads/us_ads/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/us_ads/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update us_ads set adv_name='".$c."',contact='".$ph."',address='".$add."',ad_title='".$title."',amount='".$amt."',ad_position='".$position."',ad_position_no='".$pno."',url='".$url."',sdate='".$sd."',edate='".$ed."',status='".$status."',image='".$image."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('US Ads Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='us_ads.php';</script>";
				exit;			
				
			}
	
				
				
				
				$name=trim($_POST['txtaddnm']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);			
			
				
				$ph=trim($_POST['txtph']);					
				$ph=stripslashes($ph);
				$ph=mysql_real_escape_string($ph);
				
	
				
				$add=trim($_POST['txtdesc']);	
				$add=stripslashes($add);
				$add=mysql_real_escape_string($add);
				
				$title=trim($_POST['txtadtitle']);	
				$title=stripslashes($title);
				$title=mysql_real_escape_string($title);
				
				$amt=trim($_POST['txtamount']);	
				$amt=stripslashes($amt);
				$amt=mysql_real_escape_string($amt);
				
				$position=trim($_POST['txtposition']);	
				$position=stripslashes($position);
				$position=mysql_real_escape_string($position);
				
				$pno=trim($_POST['txtpno']);	
				$pno=stripslashes($pno);
				$pno=mysql_real_escape_string($pno);
				
			
							
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
				$img="uploads/us_ads/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
		
		 $query="insert into  us_ads(adv_name,contact,address,ad_title,amount,ad_position,ad_position_no,url,sdate,edate,status,image,date,time) values('".$c."','".$ph."','".$add."','".$title."','".$amt."','".$position."','".$pno."','".$url."','".$sd."','".$ed."','".$status."','".$image."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('US Ads added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='us_ads.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> US Ads | NRIs</title>            
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
		
		if (document.getElementById('txtaddnm').value=='')
		{
			alert('Please Enter Advertiser Name');			
			document.getElementById('txtaddnm').focus();
			return false;
		}
		
		
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 1)	
				{
						alert('Please Enter Advertiser Address');					
						document.getElementById('txtdesc').focus();
						return false;
				}
				
		if (document.getElementById('txtadtitle').value=='')
		{
			alert('Please Enter US Ads Title');			
			document.getElementById('txtadtitle').focus();
			return false;
		}
		
		if (document.getElementById('txtamount').value=='')
		{
			alert('Please Enter US Ads Amount');			
			document.getElementById('txtamount').focus();
			return false;
		}
		if (document.getElementById('txtposition').value=='')
		{
			alert('Please Enter US Ads Position');			
			document.getElementById('txtposition').focus();
			return false;
		}
		
		if (document.getElementById('txtpno').value=='')
		{
			alert('Please Enter Ad Position Number');			
			document.getElementById('txtpno').focus();
			return false;
		}
		if (document.getElementById('txtsdate').value=='')
		{
			alert('Please Enter Start Date');			
			document.getElementById('txtsdate').focus();
			return false;
		}
		if (document.getElementById('txtedate').value=='')
		{
			alert('Please Enter End Date');			
			document.getElementById('txtedate').focus();
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
			alert('Please Select US Ads Status');			
			document.getElementById('txtstatus').focus();
			return false;
		}
	
		
					
		return true;
	}
</script>     



<script language="javascript" type="text/javascript">
    function showadsSize(str)
    {
	nm=document.getElementById('txtposition').value;
	if (str=="")
    {
    document.getElementById("myadssize").innerHTML="";
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
    	document.getElementById("myadssize").innerHTML=xmlhttp.responseText;    
    }
    }
    xmlhttp.open("GET","ads_size.php?q="+nm,true);
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
					<li><a href="us_ads.php">Home Page Link</a></li>                          
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>US Ads Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                //    $query="select * from us_ads where state_code='".$_GET['editId']."'";
								 $query="select * from us_ads  where id = '".$_GET['editId']."'";
							//	 echo $query;
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> US Ads</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                        
                              	      
                                  
                                  
                                  
                                  
                                  
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Advertiser Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtaddnm" id="txtaddnm" class="form-control" value="<?php echo $rs['adv_name']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Advertiser  Name</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                            
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Advertiser Conatct No</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" name="txtph" id="txtph" class="form-control" value="<?php echo $rs['contact']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Advertiser Conatct No</span>                                        </div>
                                    </div>        
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Advertiser Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="txtdesc" id="txtdesc" rows="5"><?php echo $rs['address']; ?></textarea>
                                            <span class="help-block">Advertiser Address</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">US Ads Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txtadtitle" id="txtadtitle" class="form-control" value="<?php echo $rs['ad_title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">US Ads Title</span>                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Amount</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                                                <input type="text" name="txtamount" id="txtamount" class="form-control" value="<?php echo $rs['amount']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">US Ads Amount</span>                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Ads Position</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtposition" id="txtposition" onChange="showadsSize();"> 
                                                <?php
													   	if(isset($rs['ad_position']))
														{?>
                                                        <option value="<?php echo $rs['ad_position']; ?>" selected ><?php echo $rs['ad_position']; ?></option
                                                         ><?php }  ?>
                                                         
                                                         
                                                                <option value="">- Select Ads Position -</option>
                                                                <option value="Home-Top-Small">Home Top Small</option>
                                                                <option value="Home-Top-Large">Home Top Large</option>
                                                                <option value="Home-Top-Center-4">Home Top Center (4)</option>                                                                                                                
                                                                <option value="Home-Right-Top-8">Home Right-Top (8)</option>                                                        
                                                                <option value="Home-Left-Bottom">Home Left Bottom</option>
                                                                <option value="Home-Right-Bottom">Home Right Bottom</option>                                                                                                                  
                                                                <option value="Home-Bottom-Small">Home Bottom Small</option>
                                                                <option value="Home-Bottom-Large">Home Bottom Large</option>
                                                 
                                                        </select>
                                                <span class="help-block">Select US Ads Position</span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                     <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Ad Position Number</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                <select class="form-control select" data-style="btn-success" name="txtpno" id="txtpno">                                                     	<?php
													   	if(isset($rs['ad_position_no']))
														{?>
                                                        <option value="<?php echo $rs['ad_position_no']; ?>" selected ><?php echo $rs['ad_position_no']; ?></option
                                                         ><?php }  ?>
                                                         
                                                         
                                                         <option value="">- Select Ad Position Number -</option>
                                                        
                                                        <?php for($i=1; $i<=12; $i++) { ?>
                                                         <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
														<?php } ?>                                                 
                                                        </select>
                                                <span class="help-block">Select US Ads Position Number</span>
                                                </div>
                                            </div>       
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL (If any)</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                                <input type="url" name="txturl" id="txturl" class="form-control" value="<?php echo $rs['url']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">US Ads URL</span>                                        </div>
                                    </div>
                                    
                                   
                                  <div class="form-group">
                                        <label class="col-md-3 control-label">Start Date</label>
                                        <div class="col-md-2">
                                            <div class="input-group" >
                                            <input type="text" class="form-control datepicker" value="<?php echo $rs['sdate']; ?>" name="txtsdate" id="txtsdate">
                                             <label class="input-group-addon add-on" for="txtsdate">
												<span class="glyphicon glyphicon-calendar"></span>
											 </label>
                                            </div> 
                                        </div>
                                  
                                    
                                    
                                    
                                  
                                        <label class="col-md-2 control-label">End Date</label>
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <input type="text" class="form-control datepicker" value="<?php echo $rs['edate']; ?>" name="txtedate" id="txtedate">
                                             <label class="input-group-addon add-on" for="txtedate">
												<span class="glyphicon glyphicon-calendar"></span>
											 </label>
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
                                                <span class="help-block">Select US Ads Status</span>
                                                </div>
                                            </div>
                                    
                                  
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">US Ads Image</label>
                                        <div class="col-md-6 col-xs-12">
                                   <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                   &nbsp;<span id="myadssize" style="width:auto;font-size:14px;font-weight:bold;color:#FF0000;">&nbsp;</span>
                                             <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/us_ads/<?php echo $rs['image'];?>" height="60" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                            <span class="help-block">US Ads Image</span>                                        </div> 
                                    
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <a href="us_ads.php" class="btn btn-default">Back</a>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Ads Details</button>
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
                    
						txtaddnm: {
                                required: true
                        },
						txtttype: {
                                required: true
                        },										
						 txtdesc: {
                                required: true 
						},
						txtadtitle: {
                                required: true
                        },
						txtamount: {
                                required: true
                        },
						txtposition: {
                                required: true
                        },
						txtpno: {
                                required: true
                        },
						txtsdate: {
                                required: true
                        },
						txtedate: {
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