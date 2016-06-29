<?php error_reporting(0);   session_start();
	include "config/connection.php";	  
	include "includes/state_code.php";	  
?>

<?php  if (isset($_GET['delId']))
	  	{
		$temp="select image from fam_near_casinos where id='".$_GET['delId']."'";
		$run=mysql_query($temp);
		$ans=mysql_fetch_array($run);
	
		unlink('uploads/casinos/'.$ans['image']);
		$qy="delete from fam_near_casinos where id='".$_GET['delId']."'";
		mysql_query($qy);
		
	
		echo "<script language='javascript' type='text/javascript'>alert('Casino Deleted Successfully...');</script>";
		echo "<script language='javascript' type='text/javascript'>document.location='nearest_casinos.php';</script>";
		exit;
} ?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
       	<title>Casinos Near Me Management | NRIs</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
         <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
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
		var ans=confirm("Are you sure You want to Delete this Casino Details\?");
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
    <body class="dt-example">
        <!-- START PAGE CONTAINER -->
         <div class="page-container page-navigation-top">
            
          
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <?php include "includes/top.php" ; ?>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>                    
                    <li><a href="#">State Famous Places</a></li>                                        
                    <li class="active">Famous Casinos Near Me</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
				 <div class="page-title">                    
                      <h3><img src="img/hand.gif"><a href="nearest_casino_details.php" class="mylink">Add Casinos Near Me</a></h3>
                </div>	
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><span class="fa fa-heart"></span>  <strong>Famous Casinos Near Me</strong> Details</h3>
								  
								  <div class="col-md-2 col-xs-12" style="float:right">
												<script type="text/javascript">
													  function change_state() {
															var sel = $('select[name="state_filter"] option:selected').val();
															if (sel != '') {
																  window.location.href = admin_url+'nearest_casinos.php?state='+sel;    
                                                            } else {
																  window.location.href = admin_url+'nearest_casinos.php';
															}
															
                                                      }
												</script>
                                            <div class="input-group">
                                                <select class="form-control" name="state_filter" onchange="change_state();">
													  <option value=''>Select state</option>
													  <?php
															$query1 = "SELECT a.state_code,s.state,count(a.id) as cnt FROM fam_near_casinos a,states s WHERE a.state_code = s.state_code AND a.state_code != '' GROUP BY a.state_code ORDER BY a.state_code ASC";
															$result1 = mysql_query($query1);                                                
															while($rs1 = mysql_fetch_array($result1))
															{
													  ?>
															<option <?php if(isset($_GET['state']) && $_GET['state'] == ucwords($rs1['state_code']))
																		echo 'selected="selected"';
																  ?>
																  value="<?php echo ucwords($rs1['state_code']); ?>">
																  <?php echo ucwords($rs1['state']).' ('.$rs1['cnt'].')'; ?>
															</option>
													  <?php } ?>
												</select>
                                            </div>                                            
                                            <span class="help-block">Statewise Search</span>
										</div>
								  
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
                        <th>Sr. No.</th>
                        <th>State</th>
                        <th>City</th>                                              
                        <th>Casinos Name</th>
                        <th>Status</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
                        <th>Sr. No.</th>
                        <th>State</th>
                        <th>City</th>                                              
                        <th>Casinos Name</th>
                        <th>Status</th>
                        <th>Action</th>                      

					</tr>
				</tfoot>
				<tbody>
					  <?php
					  $where = '';
												if(isset($_GET['state']) && $_GET['state'] != '') {
													  $where = ' AND a.state_code = "'.$_GET['state'].'"';
												}
                                                if($noofstates==0) 
												{											   
											    	$query="select a.*, b.state from fam_near_casinos a, states b where a.state_code = b.state_code $where order by a.id desc";
												}
												if($noofstates==1)
												{
													//$query="select * from  states where state_code = ".$join_states_list." order by state";
													$query="select a.*, b.state from fam_near_casinos a, states b where a.state_code = ".$join_states_list." and  a.state_code = b.state_code $where order by a.id desc";
												} 
												
												if($noofstates>1)
												{
													//$query="select * from  states where state_code in(".$join_states_list.") order by state";
													$query="select  a.*, b.state from fam_near_casinos a, states b where a.state_code in(".$join_states_list.") and a.state_code = b.state_code $where order by a.id desc";
													
												} 
											//	echo $query;
													
                                                $result=mysql_query($query);  
												$i=1;                                              
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                         <tr>
                                                <td><?php echo $i;?></td>                                              
                                                <td><?php echo ucwords($rs['state']);?></td>
                                                  <td><?php
															$query_city=mysql_query("select id,city from  cities where id='".$rs['city_id']."'");
															$rcity = mysql_fetch_array($query_city);
															echo $rcity['city'];
												?></td>
                                                <td><?php echo ucwords($rs['name']);?></td>
                                                <td><?php echo ucwords($rs['status']);?></td>
                                                
                                                <td>
			                                <a class="btn btn-danger" title="Edit" style="padding:4px 10px;" href="nearest_casino_details.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>
                                            &nbsp;
                                            <a class="btn btn-danger" style="background-color:#0066CC;border:#0066CC;padding:4px 10px;" title="View" href="nearest_casino_view.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-eye" style="margin-right:0px;"></span>
                                            </a>
                                               <?php 
                                            if ($_SESSION['USNRIs_session']['category']!='Clerk')
                                            {  ?> 
                                            &nbsp;
                                            <a class="btn btn-danger" style="background-color:#FF0000;border:#0066CC;padding:4px 10px;" title="Delete" href="nearest_casinos.php?delId=<?php echo $rs['id'];?>" onClick="return delthis();" >
                                            <span class="fa fa-trash-o" style="margin-right:0px;"></span>
                                            </a>
                                            <?php }   ?>
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
<?php /*?>        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js">	</script><?php */?>
        <script type="text/javascript" language="javascript" src="resources/jquery-1.11.3.min.js">	</script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
       <?php /*?> <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    <?php */?>
       
       

	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="resources/demo.js">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable( {
		"order": [[ 3, "desc" ]]
	} );
} );

	</script>
       
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
    </body>
</html>
