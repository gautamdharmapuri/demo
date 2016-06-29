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
				
				
				$round=rand(1000,100000);
				if($_FILES['txtimage']['name'] !=''){
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/category/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);		
				$img=$_FILES['txtimage']['name'];	
				if($img != ''){unlink('uploads/category/'.$_POST['imgId']);}
				if($img == ''){$img=$_POST['imgId'];}
				}else
				$image=$_POST['imgId'];				
									
						
				$query="update main_categories set name='".$a."',description='".$b."',image='".$image."' where id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Main Category Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='main_category_list.php';</script>";
				exit;			
				
			}
	
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['txtimage']['name'];
				$img="uploads/category/".$image;
				move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
				$img=$_FILES['txtimage']['name'];		
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
		
		 $query="insert into main_categories(name,description,image,date,time) values('".$a."','".$b."','".$image."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Main Category added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='main_category_list.php';</script>";
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
			alert('Please Enter  Main Category Name');			
			document.getElementById('txtname').focus();
			return false;
		}
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 1)	
				{
						alert('Please Enter  Main Category Description');					
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
                    <li><a href="main_category_list.php">Premium Categories</a></li>                                        
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Premium Main Category</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
							 if(isset($_GET['editId'])) {
                                    $query="select * from main_categories where id='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form id="jvalidate" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" onSubmit="return frmchk();">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Premium Main </strong> Category</h3>
                                    
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtname" id="txtname" value="<?php echo $rs['name']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Main Category Name</span></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Description</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="txtdesc" id="txtdesc"><?php echo $rs['description']; ?></textarea>
                                                    <span class="help-block">Enter Category Description</span></div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Image</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file"/>
                                                     <?php   if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/category/<?php echo $rs['image'];?>" height="40" width="auto" style="padding:5px 5px 5px 5px;">	<?php }   ?>
                                                    <span class="help-block">Upload Category Image</span>                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                  
										 	<input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                   			 <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />   
                                             <input type="hidden" name="imgId" id="imgId" value="<?php echo $rs['image'];?>" />
											  <input class="btn btn-primary pull-right" type="submit" name="cmdsubmit" id="cmdsubmit" value="<?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> Main Category"> 
                                                   
                                                   </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                     <?php  if(isset($_GET['editId'])) { ?>    
                                        
                                        <div class="col-md-6">
                                           
                                       <div class="panel panel-default">
	                                        <div class="panel-heading">
    	                                    <h3 class="panel-title"><strong><?php echo $rs['name']; ?></strong> Category List</h3>
        	                                </div>  
                                          <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>Category Name</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                            <?php
												$j = 1;
												$query_right="select * from categories where main_cat_id  = '".$rs['id']."' order by cat_name";																								
                                                $result_right=mysql_query($query_right);                                                
                                                while($fs=mysql_fetch_array($result_right)) { ?>
                                                                                    
                                                <tr>
                                                    <td class="text-center"><?php echo $j ; ?></td>
                                                    <td><strong><?php echo ucwords($fs['cat_name']); ?></strong></td>                                                    
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" href="category_details.php?action=edit&editId=<?php echo $fs['cid'];?>" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                                <?php $j++; } ?>
                                                
                                              
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                                		</div>
                                        
                                            
                                        </div>
                                        
                                      <?php } ?>  
                                        
                                        
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
                        txtname: {
                                required: true
                        },
						 txtdesc: {
                                required: true                               
                               
                        }
                      
                    }                                        
                });                                    

        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>