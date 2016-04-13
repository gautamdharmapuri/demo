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
		
		$qy="delete from register where md5(id)='".$_GET['delId']."'";
		mysql_query($qy);
		
	
		echo "<script language='javascript' type='text/javascript'>alert('Auto Classified Deleted Successfully...');</script>";
		echo "<script language='javascript' type='text/javascript'>document.location='auto.php';</script>";
		exit;
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Website User Management | NRIs</title>            
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


.mylink2
{
color:#0066FF;
font-weight:bold;
}

.mylink2:hover
{
color:#0066FF;
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
                    <li class="active">Website User Management</li>
                </ul>
                <!-- END BREADCRUMB -->

                
               

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                    
                    
                        <div class="col-md-12">
 <?php /*?><div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="auto_details.php" class="mylink">Add Auto Classified</a></h3>
                </div><?php */?>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-users"></span>  <strong>Website User </strong>Management</h3>
                            
                                        <?php /*?><div class="col-md-3 col-xs-12" style="float:right"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                                <input type="text" name="txtsearch" id="txtsearch" class="form-control" value=""  placeholder="Keyword Search"/>
                                            </div>                                            
                                            <span class="help-block">Keyword Search</span>                                        </div><?php */?>

                                </div>
                                <div class="panel-body">
                                
                                               
                                
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Name</th>                                                                                              
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Status</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
                                               
												$query="select a.*, b.state from register a, states b where a.state = b.state_code order by a.id desc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo ucwords($rs['fname']);?>&nbsp;<?php echo ucwords($rs['lname']);?></td>
                                                <td><?php
															$query_city=mysql_query("select id,city from  cities where id='".$rs['city']."'");
															$rcity = mysql_fetch_array($query_city);
															echo $rcity['city'];
												?></td>
                                                  <td><?php echo ucwords($rs['state']);?></td>
                                                  <td><?php if($rs['isactive'] == 1) { echo "Active" ; } else { echo "<b>Pending...</b>"; }?></td>
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="web_user_details.php?action=edit&editId=<?php echo md5($rs['id']);?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>
                                            
                                             &nbsp;                                            
                                            <a class="btn btn-danger" style="background-color:#0066CC;border:#0066CC;padding:4px 10px;" title="View" href="web_user_view.php?action=edit&editId=<?php echo md5($rs['id']);?>">
                                            <span class="fa fa-eye" style="margin-right:0px;"></span>
                                            </a>   
                                            
                                             &nbsp;&nbsp;
                                                <a class="btn btn-danger" style="background-color:#FF0000;border:#0066CC;" title="Delete"  href="web_users.php?delId=<?php echo md5($rs['id']);?>" onClick="return delthis();" ><span class="fa fa-trash-o" style="margin-right:0px;"></span>
                                            </a>
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