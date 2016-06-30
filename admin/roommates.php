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
		
		$temp="select image1 from post_free_roommates where id='".$_GET['delId']."'";
		$run=mysql_query($temp);
		$ans=mysql_fetch_array($run);
	
		unlink('../uploads/roommates/'.$ans['image']);

		
		
		$qy="delete from post_free_roommates where id='".$_GET['delId']."'";
		mysql_query($qy);
	
		echo "<script language='javascript' type='text/javascript'>alert('Room Mate Classified Deleted Successfully...');</script>";
		echo "<script language='javascript' type='text/javascript'>document.location='roommates.php';</script>";
		exit;
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Room Mate Classifieds Management	 | NRIs</title>            
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
		var ans=confirm("Are you sure You want to Delete this Room Mate Ad\?");
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
                    <li><a href="javascript:;">Free Ads Management</a></li>                     
                    <li class="active">Room Mate Classifieds</li>
                </ul>
                <!-- END BREADCRUMB -->

                
               

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                    
                    
                        <div class="col-md-12">
 <?php /*?><div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="Jobs_details.php" class="mylink">Add Room Mate Classified</a></h3>
                </div><?php */?>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-university"></span>  <strong>Room Mate </strong> Classifieds</h3>
                                    <div class="col-md-3 col-xs-12" style="float:right"> 
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                                <input type="text" name="txtsearch" id="txtsearch" class="form-control" value=""  placeholder="Keyword Search"/>
                                            </div>                                            
                                            <span class="help-block">Keyword Search</span>                                        </div>
                                    <div class="col-md-2 col-xs-12" style="float:right">
												<script type="text/javascript">
													  function change_state() {
															var sel = $('select[name="state_filter"] option:selected').val();
															if (sel != '') {
																  window.location.href = admin_url+'roommates.php?state='+sel;    
                                                            } else {
																  window.location.href = admin_url+'roommates.php';
															}
															
                                                      }
												</script>
                                            <div class="input-group">
                                                <select class="form-control" name="state_filter" onchange="change_state();">
													  <option value=''>Select state</option>
													  <?php
															$query1 = "SELECT a.* FROM post_free_roommates a WHERE a.States != '' GROUP BY a.States ORDER BY States ASC";
															$result1 = mysql_query($query1);                                                
															while($rs1 = mysql_fetch_array($result1))
															{
													  ?>
															<option <?php if(isset($_GET['state']) && $_GET['state'] == ucwords($rs1['States']))
																		echo 'selected="selected"';
																  ?>
																  val="<?php echo ucwords($rs1['States']); ?>">
																  <?php echo ucwords($rs1['States']); ?>
															</option>
													  <?php } ?>
												</select>
                                            </div>                                            
                                            <span class="help-block">Statewise Search</span>
										</div>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Title</th>
                                                <th>Category</th>       
                                                <th>Rent</th>                                                                                              
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
												$where = '';
												if(isset($_GET['state']) && $_GET['state'] != '') {
													  $where = ' AND a.States = "'.$_GET['state'].'"';
												}
												$query="select a.*, b.name from post_free_roommates a,  room_mates b
												where a.Category = b.id $where order by a.id desc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo ucwords($rs['TitleAD']);?></td>
                                                <td><?php echo ucwords($rs['name']);?></td>
                                                <td><?php echo ucwords($rs['Rent']);?></td>
                                               
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="roommates_view.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>   
                                            
                                             &nbsp;&nbsp;
                                                <a class="btn btn-danger" style="background-color:#FF0000;border:#0066CC;" title="Delete"  href="mypartner.php?delId=<?php echo $rs['id'];?>" onClick="return delthis();" ><span class="fa fa-trash-o" style="margin-right:0px;"></span>
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