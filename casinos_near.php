<?php error_reporting(0);  include"config/connection.php";	  


if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}



	/*echo $_SESSION['state'];
	echo $_SESSION['type'];		*/


 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'];  ?> Casinos Near Me | NRIs</title>
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
  <!--[if !IE]><!-->
	            <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
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

</style>   
<style>
			th,td, tr {
			text-align:center;
			vertical-align:middle;
			height:35px;
		}
	/*
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
			text-align:center;
			vertical-align:central;
		    height: auto;
		    padding: 5px 0;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		tr { border: 1px solid #ccc; }

		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Title"; }
		td:nth-of-type(2):before { content: "Views"; }
		td:nth-of-type(3):before { content: "Replies"; }
	}

	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body {
			padding: 0;
			margin: 0;
			}
		}

	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
	
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
        <?php include_once('state_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 
   				
<div class="widget-temple">
	<h4><a href="state.php" style="color:#0033FF;">Home</a> >> Casinos Near Me</h4>
</div>    <br>

<div style="width: 100%; height: 500px; margin: 0 0 20px 0;" id="map_canvas"></div>
<div id="loadingMap" class="text-center"><center><img src="images/fancybox/fancybox_loading.gif"></center></div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
<script type="text/javascript" src="js/googlemap.js"></script>

<?php

$tableName="fam_casinos";		
	$targetpage = "casinos_near.php"; 	
	$limit = 10; 
	
	$query = "SELECT COUNT(id) as num FROM $tableName where state_code='".$_SESSION['state']."' order by total_views desc";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
    // Get page data
	$query1 = "SELECT $tableName.*,cities.city FROM $tableName,cities
				where $tableName.state_code='".$state."'
				AND cities.id = $tableName.city_id
				order by $tableName.id desc LIMIT 20";
				//echo $query1;exit;
	$result = mysql_query($query1);
	
	$address = $tempAddress = array();
	$i = 0;
	while($casinoData = mysql_fetch_array($result)) {
		$tempAddress = array();
		
		$tempAddress[] = str_replace("'",'',$casinoData['name']);
		if($casinoData['address'] != '') {
			$tempAddress[] = addslashes($casinoData['address']);
		}
		if($casinoData['city'] != '') {
			$tempAddress[] = addslashes($casinoData['city']);
		}
		if($casinoData['state_code'] != '') {
			$tempAddress[] = $casinoData['state_code'];
		}
		$address[] = implode(',',$tempAddress);
	}
	echo '<pre>';
	print_r($address);
?>

<script>
	
    var location_details = '<?php echo json_encode($address);?>';	
    var map;
    function initialize() {
        var latLng = new google.maps.LatLng(49.47805, -123.84716);
        map = new google.maps.Map(document.getElementById('map_canvas'), {
            zoom: 8,
            minZoom: 2,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        $('#loadingMap').hide();
		var infoWindow = new google.maps.InfoWindow();
    }
    initialize();
    geocoder = new google.maps.Geocoder();

    function codeAddress(address) {
        if (typeof address == 'undefined') {
            return false;
        }        
    }

    var markerArr = {};

    iter = 0;
	var location_detailsArr = $.parseJSON(location_details);
	
    $.each(location_detailsArr, function(index,location_details1) {
        address = location_details1;

        geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                map.setCenter(results[0].geometry.location);

                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();
                
				var addressArr = address.split(',');
				
                marker = new MarkerWithLabel({
                   position: new google.maps.LatLng(latitude, longitude),
                   draggable: false,
                   raiseOnDrag: true,
                   map: map,
                   labelContent: addressArr[0],
                   labelAnchor: new google.maps.Point(22, 0),
                   labelClass: "marker-label", // the CSS class for the label
                   labelStyle: {opacity: 1.0}
                });
				markerArr[iter] = marker;
                markerArr[iter]['address'] = location_details.address;
				
				var infoWindow = infoWindow+iter;
				infoWindow = new google.maps.InfoWindow();
				
				(function (marker, location_details1) {
					google.maps.event.addListener(marker, "click", function (e) {
						infoWindow.setContent(location_details1);
						infoWindow.open(map, marker);
					});
				})(marker, location_details1);
            } else {
                console.log("Geocode was not successful for the following reason: (for address " + address +") " + status);
                markerArr[iter] = null;
            }

			

            iter++;
        });

    });
	

    //infowindowsObj = {};
    //function get_info_window_for_markers(markerArr) {
    //    if (typeof markerArr == 'undefined') {
    //        return false;
    //    }
    //
    //    $.each(markerArr, function (key, markerObj) {
    //        if (typeof markerObj != 'undefined' && markerObj != null) {
    //            address = markerObj.address;
    //
    //            infowindowsObj[key] = new google.maps.InfoWindow({
    //                content: address
    //            });
    //
    //            google.maps.event.addListener(markerObj, "click", function (e) { 
    //                closeAllInfoWindows();
    //                infowindowsObj[key].open(map, this);
    //            });
    //        }
    //    })
    //}
    //
    //function closeAllInfoWindows() {
    //    $.each(infowindowsObj, function(i, infowindow) {
    //        infowindow.close();
    //    });
    //}

</script> 


                     <!--  <br><h5 id="classifieds">Home >> Temples</h5>-->



 <?php  echo "<br><br><center>".$paginate."</center>"; ?><br><br><br>
			
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('state_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
    	
	
    
    
    
	
	 <?php include "config/footer.php" ; ?><!--End footer -->
    



<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<!--<script src="js/custom.js"></script>-->
<!-- End js -->

<?php include "config/social.php" ;  ?>

</body>
</html>