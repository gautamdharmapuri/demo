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

<!DOCTYPE html>
<html lang="en">
    <head><base href="/">        
        <!-- META SECTION -->
        <title>Auto Category Management	 | NRIs</title>            
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



.mylink3
{
color:#FF0000;
font-weight:bold;
}

.mylink3:hover
{
color:#0066FF;
font-style:italic;
}

</style>                                          
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
                    <li><a href="#">Free Ads Category Management</a></li>                     
                    <li class="active">Autos</li>
                </ul>
                <!-- END BREADCRUMB -->

                
               

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                    
                    
                        <div class="col-md-4">
 <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="auto_cats_makes.php" class="mylink">Add Auto Makes</a></h3>
                </div>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-car"></span>  <strong>Auto </strong> Makes</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Auto Make Name</th>                                                                                              
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
                                                $query="select * from auto_makes order by id asc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><a href="<?php echo ADMIN_BASE_URL.'auto_cats.php?make_id='.$rs['id'];?>"><?php echo ucwords($rs['name']);?></a></td>
                                               
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="auto_cats_makes.php?action=edit&editId=<?php echo $rs['id'];?>">
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
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-md-4">
 <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="auto_cats_models.php" class="mylink2">Add Autos Models</a></h3>
                </div>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-car"></span>  <strong>Auto </strong> Models</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Model Name</th>                                                                                              
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
												$where = ' WHERE 1=2';
												if(isset($_GET['make_id']) && $_GET['make_id'] != '') {
													  $where = ' WHERE auto_make_id = "'.$_GET['make_id'].'"';
												}
                                                $query="select * from auto_models $where order by id desc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo ucwords($rs['model_name']);?></td>
                                               
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="auto_cats_models.php?action=edit&editId=<?php echo $rs['id'];?>">
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-md-4">
 <div class="page-title">                    
                    <h3><img src="img/hand.gif"><a href="auto_colors.php" class="mylink3">Add Autos Color</a></h3>
                </div>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-car"></span>  <strong>Auto </strong> Color</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Color Name</th>                                                                                              
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=1;
                                                $query="select * from  auto_color order by id desc";
                                                $result=mysql_query($query);                                                
                                                while($rs=mysql_fetch_array($result))
                                                {?>
                                        
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td>
												  <span style="background-color:<?php echo $rs['code'];  ?>">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span>&nbsp;
												<?php echo ucwords($rs['name']);?>
                                              	</td>
                                               
                                                <td>
			                                <a class="btn btn-danger" title="Edit" href="auto_colors.php?action=edit&editId=<?php echo $rs['id'];?>">
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