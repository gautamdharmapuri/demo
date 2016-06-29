<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/
?>

<?php  if (isset($_GET['delId']))
	  	{
		$temp="select image from natioal_batches where id='".$_GET['delId']."'";
		$run=mysql_query($temp);
		$ans=mysql_fetch_array($run);
	
		unlink('uploads/national_batches/'.$ans['image']);
		$qy="delete from natioal_batches where id='".$_GET['delId']."'";
		mysql_query($qy);
		
	
		echo "<script language='javascript' type='text/javascript'>alert('National Batch Deleted Successfully...');</script>";
		echo "<script language='javascript' type='text/javascript'>document.location='national_batches.php';</script>";
		exit;
} ?>		


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Manage National Batches | NRIs</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
         <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
<style>
.mylink
{
color:#b64645;
font-weight:bold;
}

.mylink:hover
{
color:#b64645;
font-style:italic;
}

</style>        
<script language="javascript" type="text/javascript">
	function delthis()
	{	
		var ans=confirm("Are you sure You want to Delete this National Batch Details\?");
		if (ans==true)
		{
			return true;
		}
		else
		{
			return false;
		}
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
                    <li><a href="national_batches.php">Home Page Link</a></li>                                          
                    <li class="active">Batches</li>
                </ul>
                <!-- END BREADCRUMB -->

                <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="national_batche_details.php" class="mylink">Add National Batches</a></h3>
<ul style="float:right;list-style:none;" >
				<li><a class="btn-danger" href="national_batch_cats.php" style="padding:5px;"> 
                <span class="fa fa-eye" style="margin-right:0px;"></span>National Batch Category</a></li>
            </ul>                    
                </div>

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-cloud"></span>  <strong>National Batches</strong> Details</h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>                                                
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
                                            
												 $query="select  * from  natioal_batches order by id desc";
											
												$result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>                                                                                              
                                                <td><?php echo ucwords($rs['title']);?></td>
                                                 <td><?php 
													$query_cats = "select name from national_batch_cat  where id = '".$rs['category']."'";
													$result_cats = mysql_query($query_cats);
													$editrs = mysql_fetch_array($result_cats);
												echo ucwords($editrs['name']);?></td>                                                  
                                                <td><?php echo ucwords($rs['status']);?></td>
                                                
                                                <td>
			                                <a class="btn btn-danger" title="Edit" style="padding:4px 10px;" href="national_batche_details.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>
                                            &nbsp;
                                            <a class="btn btn-danger" style="background-color:#0066CC;border:#0066CC;padding:4px 10px;" title="View" href="national_batche_view.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-eye" style="margin-right:0px;"></span>
                                            </a>
                                            <?php
                                            if ($_SESSION['USNRIs_session']['category']!='Clerk')
                                            { ?> 
                                            &nbsp;
                                            <a class="btn btn-danger" style="background-color:#FF0000;border:#0066CC;padding:4px 10px;" title="Delete"  href="national_batches.php?delId=<?php echo $rs['id'];?>" onClick="return delthis();" ><span class="fa fa-trash-o" style="margin-right:0px;"></span>
                                            </a>
                                            <?php } ?>
                                            
                                                                                         </td>
                                            </tr>
                                          <?php $i++; }?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                    </div>                                
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
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
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
    </body>
</html>