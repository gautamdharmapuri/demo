<?php error_reporting(0);  include"config/connection.php";	  
if(isset($_GET['ViewId']))
{
	$_SESSION['ViewId']=$_GET['ViewId'];
}
else
{
	$_SESSION['ViewId']=$_SESSION['ViewId'];
	
}
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>National Auto Ad View | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="NRIs">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/bootstrap.css"><!--
    <link rel="stylesheet" href="css/tab.css">-->
  	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
    
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
  <!--[if !IE]><!-->
	
	<!--<![endif]-->
<style>
.mydata { color:#000000;text-align:justify;line-height:22px; }

.famous_btn
{
	background: #f73040 none repeat scroll 0 0;
    border-radius: 5px;
    color: #fff;    
    font-family: "Montserrat",sans-serif;
    font-size: 11px;
    font-weight: 500;
    height: auto;
    margin: 5px 15px;
    padding: 10px 5px;
	color:#FFFFFF;	
    width: auto !important;
	text-align:center;
}
.famous_btn a
{ color:#FFFFFF;
}


.polaroid img {
  border: 10px solid #fff;
  border-bottom: 45px solid #fff;
  -webkit-box-shadow: 3px 3px 3px #777;
     -moz-box-shadow: 3px 3px 3px #777;
          box-shadow: 3px 3px 3px #777;
}
th
{
background-color:#f1f5f9;
color:#56688a;
font-size:12px;
}
</style>    
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



		<?php   include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>    
	
	
<?php include_once('top_container_links.php');?>

     
     

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
        <?php include_once('home_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 

	<?php
	$query="select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.Brand = b.id and a.SubBrand=c.id  and md5(a.id) = '".$_GET['ViewId']."'"; 
	$result=mysql_query($query);
	$rs=mysql_fetch_array($result);	
	$total_views = $rs['total_views'] + 1 ;
	mysql_query("update post_free_auto set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
	?>         
                       
        <div class="widget-temple">
	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> National Auto</h4>

<?php
if(isset($_SESSION['Nris_session']))	  
{ ?>

<a href="#" data-toggle="modal" data-target="#change_state" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a> 
 <?php } else { ?> 
<a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif" alt=">"></a>
<?php } ?>    
</div><br>
                       
                       
        <table class="table table-bordered">
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Make</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Model</th>                                         
                                             <th> <?php    echo ucwords($rs['model_name']);   ?> </th>
                                         	</tr>
                                       </thead>    
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Condition</th>                                         
                                             <th> <?php    echo ucwords($rs['BCondition']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Transmission</th>                                         
                                             <th> <?php    echo ucwords($rs['Transmission']);   ?> </th>
                                         	</tr>
                                       </thead>   
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Cylinder</th>                                         
                                             <th> <?php    echo ucwords($rs['Cylinder']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Type</th>                                         
                                             <th> <?php    echo ucwords($rs['BType']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Drive Train</th>                                         
                                             <th> <?php    echo ucwords($rs['DriveTrain']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Year</th>                                         
                                             <th> <?php    echo ucwords($rs['Year']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Color</th>                                         
                                              <th>
												<div style="background-color:<?php echo ucwords($rs['Color']);?>;" class="color-div"></div>
                                              </th>
                                         	</tr>
                                       </thead>                                   
                                      
                                      <thead>
                                       		<tr>
                                       		<th>VIN Number</th>                                         
                                             <th> <?php    echo ucwords($rs['VINNo']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>ODO Meter Reading</th>                                         
                                             <th> <?php    echo ucwords($rs['ODO']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Price</th>                                         
                                             <th> <?php    echo $rs['Price'];   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                         <thead>
                                       		<tr>
                                       		<th>Current MPG</th>                                         
                                             <th> <?php    echo $rs['MPG'];   ?> </th>
                                         	</tr>
                                       </thead>
                                     
                                    
                                     <thead>
                                       		<tr>
                                       		<th>Address</th>                                         
                                             <th> <?php    echo ucwords($rs['Address']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>State</th>                                         
                                             <th> <?php echo $rs['state'];  ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     
                                     <thead>
                                       		<tr>
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($rs['City']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Title</th>                                         
                                             <th> <?php    echo ucwords($rs['TitleAD']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Description</th>                                         
                                             <th> <?php    echo ucfirst($rs['Message']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>URL</th>                                         
                                             <th> <?php    echo strtolower($rs['URL']);   ?> </th>
                                         	</tr>
                                     </thead>
                                    
                                    <thead>
                                       		<tr>
                                       		<th>Contact Name</th>                                         
                                             <th> <?php    echo ucwords($rs['ConatctNAME']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Contact Number</th>                                         
                                            <th>   
                                              <?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                {
													?>
													<a class="call_link" href="tel:<?php echo $rs['ConatctNumber']; ?>"><?php echo ucwords($rs['ConatctNumber']); ?></a>
												<?php
												} else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>
                                       </thead>
                                       
                                    
                                    <?php  if($rs['ShowEmail']=='Yes') { ?>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Email</th>                                         
                                             <th> 
												<?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                { echo strtolower($rs['ConatctEmail']);  } else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>
                                         	</tr>
                                       </thead>
                                   <?php } ?>    
                                       
                                     
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Ad Expiry Date</th>                                         
                                             <th> <?php echo date("d M, Y",strtotime($rs['EndDate'])); ?> </th>
                                         	</tr>
                                       </thead>
                                    
                                    </table>      
                       
<br><br><br><br><br><br><br><br>	
		
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('home_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
    	
	
    
    
    
	
	 <?php include "config/footer.php" ; ?><!--End footer -->
    



<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

<?php include "config/social.php" ;  ?>



<!-- Modal  Switch State  Start-->
<div class="modal fade" id="change_state" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Switch State</h4>
</div>
<div class="modal-body">

<table border="0" cellpadding="2" cellspacing="1" width="100%" style="line-height:28px;">
           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%3==0){						
				echo "<tr>";
				}
								$siteUrlConstant = $protocol . "://" .str_replace(' ','',$fs_state['state']).'.'.$_SERVER['SERVER_NAME'].'/';
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
            <a href="<?php echo $siteUrlConstant;?>auto_create?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$defaultState) { 
			echo '<i class="fa fa-check"></i> '.$fs_state['state']; }
			else { 	echo $fs_state['state'];  } ?>
            </a>
            </td>
          <?php 
		 					  if($cnt%3==0 && $cnt != 0){
                                    echo "</tr>";						
                                    }
                                    $cnt++;
                                    if($cnt==3)
                                    {
                                        $cnt=0;
                                    }
		 } ?>
            
                </tr>
            </table>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>  
<!-- Modal  Switch State  End --> 

</body>
</html>