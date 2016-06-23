<?php error_reporting(0);   session_start();
	include "config/connection.php";	  
	include "includes/state_code.php";	  
?>

<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title>State Management | NRIs</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
         <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
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
                    <li class="active">State Management</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-map-marker"></span>  <strong>States</strong> Details</h3>
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
                        <th>Sr. No.</th>
                        <th>State Name</th>
                        <th>State Image</th>
                        <th>State Header</th>
                        <th>Action</th>  
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Sr. No.</th>
                        <th>State Name</th>
                        <th>State Image</th>
                        <th>State Header</th>
                        <th>Action</th>  

					</tr>
				</tfoot>
				<tbody>
					  <?php
                                                if($noofstates==0) 
												{											   
											    	$query="select * from  states order by state";
												}
												if($noofstates==1)
												{
													$query="select * from  states where state_code = ".$join_states_list." order by state";
												} 
												
												if($noofstates>1)
												{
													$query="select * from  states where state_code in(".$join_states_list.") order by state";
												} 
												//echo $query;
													
                                                $result=mysql_query($query);  
												$i=1;                                              
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo trim(ucwords($rs['state']));?></td>
                                                <td>
                                                <?php 
					                if (strpos($rs['image'],'.') !== false) {  ?>
                                <img src="uploads/state/<?php echo $rs['image'];?>" height="50" width="auto" style="padding:5px 5px 5px 5px;">	<?php }  else { ?>
                                No Image
                                <?php } ?>
                                                
                                                </td>
                                                
                                                  <td>
                                                <?php 
					                if (strpos($rs['state_header'],'.') !== false) {  ?>
                                <img src="uploads/state/<?php echo $rs['state_header'];?>" height="50" width="auto" style="padding:5px 5px 5px 5px;">	<?php }  else { ?>
                                No Image
                                <?php } ?>
                                                
                                                </td>
                                                
                                                
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="state_details.php?action=edit&editId=<?php echo $rs['state_code'];?>">
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
