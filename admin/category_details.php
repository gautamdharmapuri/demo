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
				$mainId=trim($_POST['txtmain']);					
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);			
									
						
				$query="update categories set cat_name='".$a."',cat_description='".$b."',main_cat_id='".$mainId."' where cid='".$_POST['id']."'";
				$result=mysql_query($query);
				 echo "<script language='javascript' type='text/javascript'>alert('Category Updated sucsessfully');</script>";		 
				 echo"<script language='javascript' type='text/javascript'>document.location='category.php';</script>";
				exit;			
				
			}
	
				
				$mainId=trim($_POST['txtmain']);					
				
				$name=trim($_POST['txtname']);					
				$a=stripslashes($name);
				$a=mysql_real_escape_string($a);				
				
				
				$b=trim($_POST['txtdesc']);	
				$b=stripslashes($b);
				$b=mysql_real_escape_string($b);
				
					
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
		
		 $query="insert into  categories(cat_name,cat_description,date,time,main_cat_id) values('".$a."','".$b."','".$date."','".$time."','".$mainId."')";		 
		 $result=mysql_query($query);
		 echo "<script language='javascript' type='text/javascript'>alert('Category added sucsessfully');</script>";		 
		 echo"<script language='javascript' type='text/javascript'>document.location='category.php';</script>";
		 exit;	 
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Category | NRIs</title>                 
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
		if (document.getElementById('txtmain').value=='')
		{
			alert('Please Enter Main Category Name');			
			document.getElementById('txtmain').focus();
			return false;
		}
		
		
		if (document.getElementById('txtname').value=='')
		{
			alert('Please Enter  Category Name');			
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
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
          <div class="page-container page-navigation-top">
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                  <?php include "includes/top.php" ;  ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="category.php">Category</a></li>                                        
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Category</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
							 if(isset($_GET['editId'])) {
                                   // $query="select * from main_categories where id='".$_GET['editId']."'";
								   $query="select a.*, b.* from categories a, main_categories b where a.main_cat_id  = b.id and a.cid='".$_GET['editId']."' order by a.cid desc";
								   $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                            <form id="jvalidate" role="form" class="form-horizontal" method="post" onSubmit="return frmchk();">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add  "; } ?> Category </strong> Details</h3>
                                    
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Main Category</label>
                                                <div class="col-md-9">                                            
                                                       
                                                       
                                                       <select class="form-control select" data-style="btn-success" name="txtmain" id="txtmain">                                                     	<?php
													   	if(isset($rs['main_cat_id']))
														{?>
                                                        <option value="<?php echo $rs['main_cat_id']; ?>" ><?php echo $rs['name']; ?></option
                                                         ><?php }  ?>
                                                        <option value="">- Select Main Category -</option>
														<?php
														$querys="select * from  main_categories order by id desc";
														$results=mysql_query($querys);                                                
														while($row=mysql_fetch_array($results))
														{?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?> </option>
														<?php } ?>	
                                                        </select>
                                                       
                                                    <span class="help-block">Select Main Category</span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtname" id="txtname" value="<?php echo $rs['cat_name']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Category Name</span></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Description</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="txtdesc" id="txtdesc"><?php echo $rs['cat_description']; ?></textarea>
                                                    <span class="help-block">Enter Category Description</span></div>
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
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                         <?php  if(isset($_GET['editId'])) { ?>    
                                        
                                        <div class="col-md-6">
                                           
                                       <div class="panel panel-default">
	                                        <div class="panel-heading">
    	                                    <h3 class="panel-title"><strong>Main : <?php echo $rs['name']; ?></strong> &nbsp;>>&nbsp;</h3>
    	                                    <h3 class="panel-title"><strong>Category : <?php echo $rs['cat_name']; ?></strong> </h3>                                            
                                            
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
                                            <?php
												$j = 1;
												$query_right="select * from sub_categories where cat_id  = '".$rs['cid']."' order by subcat_name";																								
                                                $result_right=mysql_query($query_right);   
												 if(mysql_num_rows($result_right)>0) {
                                                while($fs=mysql_fetch_array($result_right)) { ?>
                                                                                    
                                                <tr>
                                                    <td class="text-center"><?php echo $j ; ?></td>
                                                    <td><strong><?php echo ucwords($fs['subcat_name']); ?></strong></td>                                                    
                                                    <td>
                                                        <a class="btn btn-default btn-rounded btn-sm" href="sub_category_details.php?action=edit&editId=<?php echo $fs['sub_id'];?>" style="float:left;border-width:1px;padding:2px 8px;"><span class="fa fa-pencil" style="margin-right:0px;"></span></a>
                                                       
                                                        <a class="btn btn-danger btn-rounded btn-sm" style="float:right;border-width:1px;padding:2px 8px;" ><span class="fa fa-times" style="margin-right:0px;"></span></a>
                                                    </td>
                                                </tr>
                                                <?php  $j++; } } else {  ?>
                                                  <tr>
                                                    <td colspan="3" align="center" class="text-center"><h4>No Sub Category Found.</h4></td>
                                                  </tr>  
                                                <?php } ?>
                                              
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