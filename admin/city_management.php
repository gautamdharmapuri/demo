<?php error_reporting(0);   session_start();
	include "config/connection.php";	  
	include "includes/state_code.php";	  
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>City Management | NRIs</title>            
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
                    <li class="active">City Management</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
				 <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="city_management_details.php" class="mylink">Add City</a></h3>
                </div>	
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-map-marker"></span>  <strong>Citys</strong> Details</h3>
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
                        <th>Sr. No.</th>
                        <th>City Name</th>                                              
                        <th>State</th>
                        <th>Action</th> 
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Sr. No.</th>
                        <th>City Name</th>                                              
                        <th>State</th>
                        <th>Action</th> 

					</tr>
				</tfoot>
				<tbody>
					  <?php
                                                if($noofstates==0) 
												{											   
											    	//$query="select * from  states order by state";
													$query="select * from  cities order by city";
												}
												if($noofstates==1)
												{
													//	$query="select * from  states where state_code = ".$join_states_list." order by state";
													$query="select * from  cities where state_code = ".$join_states_list." order by city";
												} 
												
												if($noofstates>1)
												{
													//$query="select * from  states where state_code in(".$join_states_list.") order by state";
													$query="select * from  cities where state_code in(".$join_states_list.") order by city";
												} 
												//echo $query;
													
                                                $result=mysql_query($query);  
												$i=1;                                              
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo ucwords($rs['city']);?></td>
                                                <td><?php echo ucwords($rs['state_code']);?></td>
                                               
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="city_management_details.php?action=edit&editId=<?php echo $rs['id'];?>">
                                            <span class="fa fa-pencil-square-o" style="margin-right:0px;"></span>
                                            </a>                                             </td>
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
