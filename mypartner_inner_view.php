<?php error_reporting(0);  include"config/connection.php";	  


if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}


if(isset($_GET['ViewId']))
{
	$_SESSION['ViewId']=$_GET['ViewId'];
}
else
{
	$_SESSION['ViewId']=$_SESSION['ViewId'];
	
}

//	echo $_SESSION['state'];
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'];  ?> My Partner Ad View | NRIs</title>
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



		<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-12">
                SCROLLING TEXT GOES HERE
                </div>
       
        </div>     
	
	

     
     

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
        <div class="col-md-2 inner-left">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 

        <?php
			$query="select a.*, b.name from post_free_mypart a,  my_partner b where a.Category = b.id and md5(a.id) = '".$_GET['ViewId']."'"; 
			$result=mysql_query($query);
			$rs=mysql_fetch_array($result);	
			$total_views = $rs['total_views'] + 1 ;
			mysql_query("update post_free_mypart set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
			?>               
                       
        <div class="widget-temple">
	<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> My Partner</h4>
 <?php
if(isset($_SESSION['Nris_session']))	  
{ ?>
<a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/arrow.gif"></a>    
<a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif"></a>    
 <?php } else { ?> 
<a href="#"  data-toggle="modal" data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;" >Create Premium Ad&nbsp;<img src="images/arrow.gif"></a>   
<a href="#"  data-toggle="modal"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif"></a>
<?php } ?>  
</div><br>
                       
                       
        <table class="table table-bordered">
                                       
                                      
                                   
                                     
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
                                       		<th>Ad Category</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
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
                                                { echo ucwords($rs['ConatctNumber']);  } else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>                                                                                     
                                         	</tr>
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
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($rs['City']);   ?> </th>
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
                                       		<th>Ad Expiry Date</th>                                         
                                             <th> <?php echo date("d M, Y",strtotime($rs['EndDate'])); ?> </th>
                                         	</tr>
                                       </thead>
                                    
                                    
                                    
                                    
                                    
                                        <?php /*?><tr>
                                            
                                            <th colspan="2" align="center" style="text-align:center">

											<?php   if (strpos($rs['image1'],'.') !== false) {  ?>
                             			   <img src="uploads/my_partner/<?php echo $rs['image1'];?>" width="300" height="auto"> 	<?php }  else {  ?>
                                           <img src="admin/img/no_image.png" height="auto" width="300">
                                           <?php } ?>
                                           
                                           
                                          

                                            </th>                                               
                                        </tr><?php */?>
                                 
                                     
                                        
                                    </table>      
                       
                       
                       


					
 

                    
<br><br><br><br><br>

<?php /*?> <div class="dividerHeading">
    <h5 style="background:#ccc;padding:8px;font-weight:bold;text-align:center;"><span>Comment on this post</span></h5>
</div>
        
            <form novalidate="novalidate" method="post" action="#" class="comment-form">               
              <div class="form-div ">
                    <div class="form-label">Message:</div>
                    <div class="form-field">
                    <textarea placeholder="Message" name="comment" class="form-control tiny" id="message" required=""></textarea>
                    </div>            
               </div>      
             <div class="form-submit-buttons">               
                <input name="comment_submit" value="Post Comment" class="no-comment btn btn-premium" type="submit" style="float:right">
             </div>
                <input class="form-control" name="post_id" value="623" type="hidden">
                <input class="form-control" name="commented_by" value="" type="hidden"><br>
           </form> <?php */?>
<br><br><br><br><br><br><br><br><br>	
		
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <div class="col-md-2 inner-right">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
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




</body>
</html>