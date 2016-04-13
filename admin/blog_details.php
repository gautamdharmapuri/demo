<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
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
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
				$cat=trim($_POST['category']);	
				$cat=stripslashes($cat);
				$cat=mysql_real_escape_string($cat);
				
				$visibility=trim($_POST['visibility']);	
				$visibility=stripslashes($visibility);
				$visibility=mysql_real_escape_string($visibility);
				
				$Status=trim($_POST['Status']);	
				$Status=stripslashes($Status);
				$Status=mysql_real_escape_string($Status);		
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/blog/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/blog/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update blog set blog_title='".$a."',blog_desc='".$b."',image='".$image."',category_id='".$cat."',visibility='".$visibility."',status='".$Status."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Blog Post Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='blog.php';</script>";
				exit;			
				
			}
	
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
				$cat=trim($_POST['category']);	
				$cat=stripslashes($cat);
				$cat=mysql_real_escape_string($cat);
				
				$visibility=trim($_POST['visibility']);	
				$visibility=stripslashes($visibility);
				$visibility=mysql_real_escape_string($visibility);
				
				$Status=trim($_POST['Status']);	
				$Status=stripslashes($Status);
				$Status=mysql_real_escape_string($Status);				
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/blog/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
		
		 $query="insert into blog (blog_title,blog_desc,image,category_id,visibility,status,date,time) values('".$a."','".$b."','".$image."','".$cat."','".$visibility."','".$Status."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Blog Post added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='blog.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Premium Main Category | NRIs</title>                 
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
			alert('Please Enter Blog Title');			
			document.getElementById('txtname').focus();
			return false;
		}
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 12)	
				{
						alert('Please Enter Blog Description');					
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
                  <?php include "includes/top.php" ;  ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>                                        
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Blog Post</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
							 if(isset($_GET['editId'])) {
                                    $query="select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id  and  a.id='".$_GET['editId']."'";
									
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form id="jvalidate" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Create New  "; } ?> Blog</strong> Post</h3>
                                    
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-8">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Post Title</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtname" id="txtname" value="<?php echo $rs['blog_title']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Post Title</span></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                 <?php /*?>   <textarea class="form-control" rows="5" name="txtdesc" id="txtdesc"><?php echo $rs['blog_desc']; ?></textarea><?php */?>
                                                  <textarea class="summernote" name="txtdesc" id="txtdesc"><?php echo $rs['blog_desc']; ?></textarea>
                                                    <span class="help-block">Enter Post Description</span></div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Post Image</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="" name="txtimage" id="txtimage" title="Browse file"/>
                                                     <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/blog/<?php echo $rs['image'];?>" height="80" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                                    <span class="help-block">Upload Image</span>                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                  
										 	<input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                   			 <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />   
                                             <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
											  <input class="btn btn-primary pull-right" type="submit" name="cmdsubmit" id="cmdsubmit" value="<?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> Post Details"> 
                                                   
                                                   </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                        
                                        <div class="col-md-4">
                                           
                                       <div class="panel panel-default">
	                                        
		                                          <div class="form-group">
                                        <label class="col-md-3 control-label">Category</label>
                                        <div class="col-md-5">                                                                                
                                            <select class="form-control select" data-style="btn-success" name="category" id="category">
											<?php
														if(isset($rs['category_id']))
														{?>
                                                        <option value="<?php echo $rs['category_id']; ?>" selected ><?php echo $rs['category_name']; ?></option
                                                         ><?php }  ?>
                                            
                                            	<?php 
													$q_cat = "select * from  blog_categories order by category_name desc";
													$result_cat = mysql_query($q_cat);
													while($fscat = mysql_fetch_array($result_cat)) { 
                                                ?>
                                                <option value="<?php echo $fscat['id'];  ?>"><?php echo $fscat['category_name'];  ?></option>
                                                         <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                          
                                          
                                         			
                                                    
                                                     <div class="form-group">
                                                <label class="col-md-3 control-label">Post visibility</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <?php   if($rs['visibility']=='Private')  {?>
													
													 <label class="check" style="margin-left:5px;margin-right:15px;"><input type="radio" class="iradio" name="visibility" id="visibility" value="Public" /> Public</label>                       
                                          			 <label class="check"><input type="radio" class="iradio" name="visibility" id="visibility" value="Private" checked="checked"/> Private</label>
													<?php }  else { ?>
                                                    		
                                                            <label class="check" style="margin-left:5px;margin-right:15px;"><input type="radio" class="iradio" name="visibility" id="visibility" value="Public" checked="checked"/> Public</label>                                          					 <label class="check"><input type="radio" class="iradio" name="visibility" id="visibility" value="Private"/> Private</label>
                                                      <?php } ?>        

                                                    </div>                                            
                                            </div>   
                                		</div>
                                        
                                        
                                       
                                       
                                       
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Post Status</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                          					<?php   if($rs['status']=='Save Draft')  {?>                                                            
                                                              <label class="check" style="margin-left:5px;margin-right:15px;"><input type="radio" class="iradio" name="Status" value="Publish" id="Status"/> Publish</label>                       
                                          					  <label class="check"><input type="radio" class="iradio" name="Status" id="Status" value="Save Draft"  checked="checked"/> Save Draft</label>
                                                              <?php } else { ?>
															  
                                                              <label class="check" style="margin-left:5px;margin-right:15px;"><input type="radio" class="iradio" name="Status" value="Publish" id="Status" checked="checked"/> Publish</label>                       
                                                              <label class="check"><input type="radio" class="iradio" name="Status" id="Status" value="Save Draft"/> Save Draft</label>
                                                              
                                                              <?php } ?>

                                                    </div>                                            
                                            </div>
                                          
                                          
                                          
                                		</div>
                                        
                                        
                                        
                                            
                                        </div>
                                        
                                    
                                        
                                        
                                    </div>
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
            <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>
        <!-- END PAGE PLUGINS -->
        
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
    </body>
</html>