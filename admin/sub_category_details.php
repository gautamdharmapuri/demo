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
				$catId=trim($_POST['txtcat']);					
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);		
									
						
				$query="update sub_categories set subcat_name='".$a."',subcat_description='".$b."',cat_id='".$catId."' where sub_id='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Sub Category Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='sub_category.php';</script>";
				exit;			
				
			}
	
				
				$catId=trim($_POST['txtcat']);					
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
					
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
		
		 $query="insert into  sub_categories(subcat_name,subcat_description,date,time,cat_id) values('".$a."','".$b."','".$date."','".$time."','".$catId."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Sub Category added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='sub_category.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Sub Category | NRIs</title>                 
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
		if (document.getElementById('txtcat').value=='')
		{
			alert('Please Select Category Name');			
			document.getElementById('txtcat').focus();
			return false;
		}
		
		
		if (document.getElementById('txtname').value=='')
		{
			alert('Please Enter Sub Category Name');			
			document.getElementById('txtname').focus();
			return false;
		}
		
		data  = document.getElementById('txtdesc').value;
				 if (data.length < 1)	
				{
						alert('Please Enter Sub Category Description');					
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
         
         
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                  <?php include "includes/top.php" ;  ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="sub_category.php">Sub Category</a></li>                                        
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Sub Category</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
							 if(isset($_GET['editId'])) {
                                    $query="select * from sub_categories where sub_id='".$_GET['editId']."'";
							/*	//   $query="select a.*, b.* from categories a, main_categories b where a.main_cat_id  = b.id and a.cid='".$_GET['editId']."' order by a.cid desc";
								  $query="select a.*, b.cat_name,b.cid from sub_categories a, categories b where a.sub_id  = '".$_GET['editId']."' order by a.sub_id desc";	*/
							//	  echo $query;	
								   $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  
									
									?>
                            <form id="jvalidate" role="form" class="form-horizontal" method="post" onSubmit="return frmchk();">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?>Sub Category </strong> Details</h3>
                                    
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category</label>
                                                <div class="col-md-9">                                            
                                                       
                                                       
                                                       <select class="form-control select" data-style="btn-success" name="txtcat" id="txtcat">                                                     	<?php 
													    if(isset($_GET['editId'])) {
													   	$query_cat="select * from categories where cid='".$rs['cat_id']."'";														
														$result_cat=mysql_query($query_cat);
													   	$fs = mysql_fetch_array($result_cat);
													   	if(isset($fs['cat_name']))
														{?>
                                                        <option value="<?php echo $fs['cid']; ?>" selected ><?php echo $fs['cat_name']; ?></option
                                                         ><?php }   }?>
                                                        <option value="">- Select Category -</option>
														<?php
														$querys="select * from  categories order by cat_name";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['cid'] ?>"><?php echo $row['cat_name'] ?> </option>
														<?php } ?>	
                                                        </select>
                                                       
                                                    <span class="help-block">Select Category</span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Category Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtname" id="txtname" value="<?php echo $rs['subcat_name']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Sub Category Name</span></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Category Description</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="txtdesc" id="txtdesc"><?php echo $rs['subcat_description']; ?></textarea>
                                                    <span class="help-block">Enter Sub Category Description</span></div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                  
										 	<input type="hidden" name="id" value="<?php echo $_GET['editId'];?>" />
                                   			 <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />   
											  <input class="btn btn-primary pull-right" type="submit" name="cmdsubmit" id="cmdsubmit" value="<?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?>  Category"> 
                                                   
                                                   </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                           
                                       <?php /*?><div class="panel panel-default">
	                                        <div class="panel-heading">
    	                                    <h3 class="panel-title"><strong><?php echo $rs['name']; ?></strong> Category List</h3>
        	                                </div>  
                                          <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>Sub Category Name</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td><strong>John Doe</strong></td>                                                    
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">2</td>
                                                    <td><strong>Dmitry Ivaniuk</strong></td>                                                  
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">3</td>
                                                    <td><strong>Nadia Ali</strong></td>                                                    
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                                		</div><?php */?>
                                        
                                            
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
                        txtmain: {
                                required: true
                        },
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