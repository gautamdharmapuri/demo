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
				
				$lang=trim($_POST['txtlang']);					
				$a=stripslashes($lang);
				$a=mysql_real_escape_string($a);
				
				$cat=trim($_POST['txtcat']);					
				$b=stripslashes($cat);
				$b=mysql_real_escape_string($b);
				
			
				
				$name=trim($_POST['txttitle']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
			
				$url=trim($_POST['txturl']);	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$temp = strstr($url,"v=");

				//	echo strstr($temp,"/");	

			//	echo $temp."<br>";

			

				if(strstr($temp,"&"))

				{					

					$pieces = explode("&", $temp);

				//	echo $pieces[0]."<br>";

					$pieces = explode("=", $pieces[0]);

				/*	echo $pieces[1]."<br>";

					exit;	*/

				}

				else

				{

					$pieces = explode("=", $temp);

				/*	echo $pieces[1]."<br>";			

					exit;		*/

				}
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
				
				
				
				
						
				$query="update videos set language='".$a."',category='".$b."',title='".$c."',link='".$url."',video_id='".$pieces[1]."',status='".$status."',date='".$date."',time='".$time."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Video Details Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='videos.php';</script>";
				exit;			
				
			}
	
				
				$lang=trim($_POST['txtlang']);					
				$a=stripslashes($lang);
				$a=mysql_real_escape_string($a);
				
				$cat=trim($_POST['txtcat']);					
				$b=stripslashes($cat);
				$b=mysql_real_escape_string($b);
				
			
				
				$name=trim($_POST['txttitle']);					
				$c=stripslashes($name);
				$c=mysql_real_escape_string($c);
				
				
				
			
				$url=trim($_POST['txturl']);	
				$url=stripslashes($url);
				$url=mysql_real_escape_string($url);
				
				
				$temp = strstr($url,"v=");

				//	echo strstr($temp,"/");	

			//	echo $temp."<br>";

			

				if(strstr($temp,"&"))

				{					

					$pieces = explode("&", $temp);

				//	echo $pieces[0]."<br>";

					$pieces = explode("=", $pieces[0]);

				/*	echo $pieces[1]."<br>";

					exit;	*/

				}

				else

				{

					$pieces = explode("=", $temp);

				/*	echo $pieces[1]."<br>";			

					exit;		*/

				}
				
				
				
				
				
				
				
				
				
				$status=trim($_POST['txtstatus']);	
				$status=stripslashes($status);
				$status=mysql_real_escape_string($status);
				
				$date=date('Y-m-d');
				$time=date('h:m:s');			
				
				
		
		 $query="insert into  videos(language,category,title,link,video_id,status,date,time) values('".$a."','".$b."','".$c."','".$url."','".$pieces[1]."','".$status."','".$date."','".$time."')";		 

		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Video added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='videos.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Manage Video | NRIs</title>            
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
		if (document.getElementById('txtlang').value=='')
		{
			alert('Please Select Video Language');			
			document.getElementById('txtlang').focus();
			return false;
		}
		
		if (document.getElementById('txtcat').value=='')
		{
			alert('Please Select Video Category');			
			document.getElementById('txtcat').focus();
			return false;
		}
		if (document.getElementById('txttitle').value=='')
		{
			alert('Please Enter Video Title');			
			document.getElementById('txttitle').focus();
			return false;
		}
		
		
		if (document.getElementById('txturl').value=='')
		{
			alert('Please Enter Video Link');			
			document.getElementById('txturl').focus();
			return false;
		}	
		
		
		if (document.getElementById('txtstatus').value=='')
		{
			alert('Please Select Video Status');			
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
                      <li><a href="videos.php">Videos</a></li>                     
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Video Details</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from videos where id='".$_GET['editId']."'";

                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="return frmchk();">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?></strong> Video Details</h3>
                                 </div>
                                
                                <div class="panel-body">                                                                        
                              	   
                                   
                                    <div class="form-group">
                                    <?php
				//									 $querys="select a.*, b.language from video_languages a, videos b where a.name != b.language ";
				//										 echo $querys;?>
                                               <label class="col-md-3 col-xs-12 control-label">Language</label>
                                                <div class="col-md-6 col-xs-12"> 
                                              <select class="form-control select" data-style="btn-success" name="txtlang" id="txtlang">
                                              			 <?php   if(isset($_GET['editId'])) {   ?>
                                                         <option value="<?php echo $rs['language']; ?>" selected><?php echo $rs['language']; ?></option>                                
                                                        <?php } ?>  
                                                        <option value="">- Select Language -</option>
														<?php
														$querys="select * from  video_languages order by name";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?> </option>
														<?php } ?>	
                                                 </select>
                                                <span class="help-block">Select Video Language</span>
                                                </div>
                                            </div>  
                                            
                                            
                                            
                                     <div class="form-group">
                                               <label class="col-md-3 col-xs-12 control-label">Category</label>
                                                <div class="col-md-6 col-xs-12"> 
                                              <select class="form-control select" data-style="btn-success" name="txtcat" id="txtcat">
                                              			 <?php   if(isset($_GET['editId'])) { ?>
                                                         <option value="<?php echo $rs['category']; ?>" selected><?php echo $rs['category']; ?></option>                                
                                                        <?php } ?>  
                                                        <option value="">- Select Category -</option>
														<?php
														$querys="select * from  video_categories order by category_name";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['category_name'] ?>"><?php echo $row['category_name'] ?> </option>
														<?php } ?>	
                                                 </select>
                                                <span class="help-block">Select Video Category</span>
                                                </div>
                                            </div>
                                  
                                  
                                  
                                  
                                  
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Video Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="txttitle" id="txttitle" class="form-control" value="<?php echo $rs['title']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Video Title</span>                                        </div>
                                    </div>
                                    
                                    
                                    
                                            
                                    
                                            
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Video Link</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                                <input type="text" name="txturl" id="txturl" class="form-control" value="<?php echo $rs['link']; ?>"/>
                                            </div>                                            
                                            <span class="help-block">Video Link</span>                                        </div>
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
                                                <span class="help-block">Select Video Status</span>
                                                </div>
                                            </div>
                                 
                                    
                                    
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>  
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />                                  
                                    <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit"><?php if(isset($_GET['editId'])) { echo "Update "; } else { echo "Add "; } ?> Video Details</button>
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
                        txtlang: {
                                required: true
                        },
					    txtcat: {
                                required: true
                        },
						txttitle: {
                                required: true
                        },
						txturl: {
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