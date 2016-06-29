<?php error_reporting(0);   session_start();
	include "config/connection.php";	  
	include "includes/state_code.php";	  
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Temple Management | NRIs</title>           
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
                    <li class="active">Famous Temples</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
				 <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="temples_details.php" class="mylink">Add Temples</a></h3>
                </div>	
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <h3 class="panel-title"><span class="fa fa-bell"></span>  <strong>Famous Temples</strong> Details</h3>
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
                        <th>Sr. No.</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Temple Type</th>
                        <th>Temple Name</th>
                        <th>Status</th>
                        <th>Action</th>   
					</tr>
				</thead>
				<tfoot>
					<tr>
                        <th>Sr. No.</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Temple Type</th>
                        <th>Temple Name</th>
                        <th>Status</th>
                        <th>Action</th>   
					</tr>
				</tfoot>
				<tbody>
					  <?php
                                                if($noofstates==0) 
												{											   
											    	$query="select a.*, b.state from fam_temples a, states b where a.state_code = b.state_code order by a.id desc";
												}
												if($noofstates==1)
												{
													//$query="select * from  states where state_code = ".$join_states_list." order by state";
													$query="select a.*, b.state from fam_temples a, states b where a.state_code = ".$join_states_list." and  a.state_code = b.state_code order by a.id desc";
												} 
												
												if($noofstates>1)
												{
													//$query="select * from  states where state_code in(".$join_states_list.") order by state";
													$query="select  a.*, b.state from fam_temples a, states b where a.state_code in(".$join_states_list.") and a.state_code = b.state_code order by a.id desc";
													
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
                                                <td><?php echo ucwords($rs['temple_type']);?></td>
                                                <td><?php echo ucwords($rs['temple_name']);?></td>
                                                <td><?php echo ucwords($rs['status']);?></td>
                                                
                                                <td>
			                                <a class="btn btn-danger" title="Edit" style="padding:4px 10px;" href="temples_details.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>
                                            
                                            <a class="btn btn-danger" style="background-color:#0066CC;border:#0066CC;padding:4px 10px;" title="View" href="temple_view.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-eye" style="margin-right:0px;"></span>
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
