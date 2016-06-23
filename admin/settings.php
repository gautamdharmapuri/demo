<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
	  if(!isset($_SESSION['USNRIs_session']) || ($_SESSION['USNRIs_session']['category']!='Admistrator'))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/
?>

<?php  if (isset($_GET['delId']))
	  	{
		
		$qy="delete from login where md5(id)='".$_GET['delId']."'";
		mysql_query($qy);
		
	
		echo "<script language='javascript' type='text/javascript'>alert('User Deleted Successfully...');</script>";
		echo "<script language='javascript' type='text/javascript'>document.location='national_batches.php';</script>";
		exit;
} ?>	

<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title>User Management Profile | NRIs</title>            
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
		var ans=confirm("Are you sure You want to Delete this User\?");
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
                    <li class="active">User Management</li>
                </ul>
                <!-- END BREADCRUMB -->

                   <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="manage_profile.php" class="mylink">Add New User</a></h3>
                </div>               

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Admin User</strong> Management</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>User Role</th>
                                                <?php  if ($_SESSION['USNRIs_session']['category']=='Admistrator') { ?>
                                                <th>Action</th>                                               
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
                                                $query="select * from  login order by id desc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                               <td><?php echo ucwords($rs['full_name']);?></td>
                                               <td><?php echo $rs['contact_no'];?></td>
                                               <td><?php 
											   
											   if($rs['category']=='Manager')
											    {
													
													echo "State Manager";
												}
												
												if($rs['category']=='Clerk')
											    {
													echo "Data Entry Engineer";
												}
												
												if($rs['category']=='Director')
											    {
													echo "Director";
												}
												
												if($rs['category']=='Admistrator')
											    {
													echo "Admistrator";
												}
											   
											   ?></td>
                                              <?php  if ($_SESSION['USNRIs_session']['category']=='Admistrator') { ?>
                                               <td><a href="manage_profile.php?action=edit&editId=<?php echo md5($rs['id']);?>">Edit</a>&nbsp;&nbsp;  
                                               <?php 
											   
											   if($rs['category']!='Admistrator') { ?>
                                                                                            
                                                 <a style="margin-left:10px;" title="Delete"  href="settings.php?delId=<?php echo md5($rs['id']);?>" onClick="return delthis();" >Delete User</a>
                                                 <?php } ?>
                                               </td>
                                               <?php } ?>
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






