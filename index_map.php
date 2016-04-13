<?php error_reporting(0);  include"config/connection.php";	   
$current_date = date('Y-m-d');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Home | NRIs</title>
	<meta name="description" content="NRI's">
	<meta name="author" content="NRIs">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<script type="text/javascript" src="map/overlibmws.js"></script>
<link rel="stylesheet" type="text/css" href="map/om_maps.css" />
    <!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.png">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
    <link rel="stylesheet" href="css/bootstrap.css"><!--
    <link rel="stylesheet" href="css/tab.css">-->
  	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/animate-custom.css">
	
	
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
		<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->

            <script src="css/modal/jquery.min.js"></script>
            <script src="js/jquery.bxslider.js"></script>
            <link rel="stylesheet" href="css/jquery.bxslider.css">
            <script src="css/modal/bootstrap.min.js"></script>
             <link rel="stylesheet" type="text/css" href="css/map-style.css" />
	<script src="js/map-config.js" type="text/javascript"></script>
	<script src="js/map-interact.js" type="text/javascript"></script>
           
            <script type="text/javascript">
                var j = jQuery.noConflict();
                j(document).ready(function(){
                    
                   j('#advert-grp').bxSlider({
                       auto:true,
                       autoHover:true,
                        controls:false,
                        slideWidth: 220,
                        minSlides: 3,
                        maxSlides: 3,
                        slideMargin: 10,
                        pager: false,
                        speed:6000
                    });
                });
            </script>
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>
	<?php   include "config/menu_home.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				
                 <!-- START Worden Top Gainers Ticker Widget -->
<script src="http://widgets.freestockcharts.com/js/jquery-1.3.1.min.js" type="text/javascript"></script> <script src="widget/WBIHorizontalTicker2.js?ver=12334" type="text/javascript"></script> 
<?php /*?><link href="http://widgets.freestockcharts.com/WidgetServer/WBITickerblue.css" rel="stylesheet" type="text/css" /><?php */?>
<link href="widget/WBITickerblue.css" rel="stylesheet" type="text/css" />
<script>
    var gainTicker = new WBIHorizontalTicker('gainers');
    gainTicker.start();
    var loserTick = new WBIHorizontalTicker('losers');
    loserTick.start();
	</script> <!-- End Scrolling Ticker Widget -->
                
       
        </div>     
	
	
	
<div class="section-1-wrap">	
	
		<div class="section-1">
			
            
<!-- WEATHER WIDGET -->
				<div class="left-section-1 col-md-2" >
				        <div class="weather-widget" id="weather-widget"></div>
					
                </div><!-- End Left-Section-1 -->
                
                

<!-- MAIN MIDDLE SECTION-->
<div class="middle-section">

				<!-- TOP HALF AD STARTS-->              
              
                <div class="top-half">
                    <ul class="advert-grp" id="advert-grp">
                        <?php
                        
                            $home_middle_query1 = "select * from us_ads where ad_position='Home-Top-Center-4' and status='Active' order by id desc";
                            $home_middle_res1 = mysql_query($home_middle_query1);
                            while ($home_dm1 = mysql_fetch_array($home_middle_res1)) {
                        ?>
                        <li>
                                <a href="#" >
									<?php
                                    if($home_dm1['edate'] >= $current_date) {
                                        echo '<a href="' . $home_dm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_dm1 ['image'].'"></a>';
                                    } else { 
                                        $home_middle_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Center-4' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		            
                                        <img src="img/middle.jpg" alt="Advertisement">
                                    <?php } ?>                      
                                </a>
                            </li>	
                        <?php } ?>
                    	
                    
                  </ul><!-- TOP ADVERT FROUP ENDS -->
              </div>            
              
              <!-- TOP HALF AD SECTION ENDS -->
              
              
                
               <!-- MIDDLE MAP SECTION -->                
				<div class="right-section-map-wrap">
                
                   
                   
                    <!--<div class="right-section-map">-->
                    	
                        
                        
                       <div id="map_base">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790 500" xml:space="preserve">
		<image overflow="visible" width="790" height="500" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxYAAAH0CAMAAACXc0s1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEz
NDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1MDU2NTQwQTlDMDBFNTExQjZDN0FBNERDMDA0
MDJDMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFNjZFQ0JCRDE0MDIxMUU1OUYyQkFDOERF
QzlDQTEwQiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFNjZFQ0JCQzE0MDIxMUU1OUYyQkFD
OERFQzlDQTEwQiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3Mi
PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4RDRGOTdBM0ZG
MTNFNTExOUJBRjhDNjJFOTBCRENGNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MDU2NTQw
QTlDMDBFNTExQjZDN0FBNERDMDA0MDJDMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRG
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
u/N1cI7/FWAAwuL1LpbcIO8AAAAASUVORK5CYII=" transform="matrix(1 0 0 1 0 1)">
</image>


			<g id="regions">
				<path id="map_1" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M542.59,375.175c2.947-0.28,37.604-4.069,37.604-4.069c-4.35-7.296-0.281-9.541-2.666-11.786c-2.387-2.245-2.387-8.138,0-10.103c2.385-1.964-1.402-3.227,0-5.24c1.404-2.014-4.35-5.844-4.35-5.844l-11.529-38.391c-11.566,1.187-23.971,2.383-35.072,3.402l-0.965,57.157l3.697,26.753c6.564,1.71,2.803-2.806,4.395-5.052c1.041-1.469,4.305,0.655,2.992,2.807c-1.309,2.15,1.471,1.972,2.059,3.462c1.404,3.555,2.504-3.93,5.52-3.93c-0.559-1.293,0.422-2.713-1.684-4.677C540.487,377.7,539.645,375.455,542.59,375.175z"/>

				<path id="map_2" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M194.055,438.175c-13.657-12.956-18.053-10.804-28.483-20.626c-1.23-1.158-3.189,4.195-3.368,5.191c-1.917,10.711-13.177-1.833-14.171-3.086c-2.338-2.947-6.08,4.35-9.261,1.543s-24.695-84.047-24.695-84.047c-3.718-2.456-13.002,1.449-16.346-0.632c-3.345-2.08-4.701,2.549-8.629-0.561c-3.929-3.11-11.973,2.829-13.119-0.772c-1.146-3.601-4.139-1.333-4.911-0.491c-0.771,0.843-5.612,0.211-6.735-0.28s0.561-3.297-2.104-3.578c-2.666-0.28-3.354,8.755-10.523,7.857c-3.368-0.421-9.07,4.864-9.471,7.857c-1.216,9.073-9.634,3.835-11.365,8.209c-0.77,1.945,3.939,4.71,4.279,6.875c1.38,8.77,7.296,7.577,8.98,8.419c1.684,0.842,0.07,2.946,1.333,4.489c1.263,1.544,5.122-1.823,4.771,1.614c-0.221,2.168-2.175,3.788-3.858,2.315c-1.684-1.474-3.997,1.03-5.262,1.052c-3.999,0.07-2.97-1.801-3.227-3.508c-0.772-5.121-7.296,3.929-13.168,3.719c-3.561-0.128,0.189,4.209,2.014,5.262c1.824,1.052,0.07,1.473-0.559,3.858c-0.629,2.385,1.751,2.666,4.137,4.49c2.385,1.823,8.98-0.772,10.734,0.49c1.754,1.264,3.999-3.156,6.525-3.577c2.525-0.421,0.351,7.226,0.771,10.663s-5.542,1.544-5.753,2.877s-5.612,4.068-6.384,1.964c-0.771-2.104-3.929,2.386-2.946,4.409c0.982,2.023-3.157,2.817-4.069,2.747c-0.912-0.07-2.697,7.804-2.946,8.77c-0.935,3.624,3.386,4.23,5.753,5.332c7.085,3.297-3.869,0.917-3.017,2.385c4.222,7.27,2.245,10.944,10.594,6.595c0.934-0.486,0.443-8.645,2.876-3.508c3.157,6.665-1.964,9.893,1.473,17.259c0.997,2.137,6.875-8.349,11.225-0.281c2.179,4.043,9.471-5.472,11.436-3.297c1.938,2.146-3.789,6.665-3.017,11.646c0.539,3.478-2.888,3.067-3.228,4.631c-1.052,4.841-11.646,7.086-10.453,10.944c0.754,2.44-1.641,2.982-2.876,1.474c-1.894-2.315-8.629,4.139-10.874,6.454s3.267,3.071,3.999,1.824c3.788-6.455,4.63-0.141,11.505-6.174c0.972-0.854,11.856-3.858,7.998-5.473c-2.12-0.887,5.348-5.05,6.455-5.542c5.683-2.525,3.999-8.278,12.417-11.997c5.416-2.392-3.999-2.362,5.683-7.646c1.88-1.026-2.636-1.198-4.069-2.104c-4.583-2.901,5.265-5.757,4.279-8.77c-1.66-5.076,2.362-1.428,2.526-5.753c0.07-1.856,5.191-8.63,7.366-8.278c2.175,0.351,2.736-2.035,3.999-1.685c1.263,0.352-1.263,2.315,0.281,3.017c1.543,0.702,1.364,1.887-0.912,1.685c-7.857-0.702-3.297,4.35-6.455,7.928c-5.087,5.766,4.911,2.244-0.491,8.138c-0.959,1.046,2.194,0.821,2.736-0.07c1.45-2.385,4.245-2.599,5.893-5.332c2.666-4.42,3.157-0.701,6.735-2.735c3.368-1.915-2.701-7.749,0.21-9.472c8.068-4.771,7.016-0.842,10.804,1.965c1.558,1.153,4.305-2.977,4.63-0.141c0.585,5.098,12.745-1.918,16.627-0.211c6.697,2.947,7.016-2.665,8.419-1.894c1.403,0.771,0.982,4.139,2.525,4.139s8.068,2.877,9.19,4.28c1.123,1.402,9.05,1.333,8.349,1.473c-0.702,0.141-0.421,6.665,5.262,6.595c2.028-0.025,5.402,7.507,8.068,7.507s-5.513-7.341-5.191-8.84c0.561-2.62-7.016-6.104-7.086-7.226c-0.07-1.123,3.157,0.21,2.806-0.351c-0.351-0.562-2.946-4.42-2.736-5.613c0.21-1.192,7.437,4.631,5.122,5.543c-0.981,0.387,3.297,4.56,3.648,5.262c0.351,0.701,1.65,5.221,2.315,3.718c1.614-3.647-4.625-10.123-3.648-9.892c6.127,1.449,10.523,10.103,5.122,11.154c-1.002,0.195,0.167,1.629,1.684,4.35s1.473-1.333,1.894-2.175s3.602,2.432,3.859,5.122c0.257,2.689,3.952,1.426,4.069,3.788s3.251,0.632,4.069,3.438c1.052,1.333,1.543,0,2.806,0c1.263,0-4.35-4.56-4.771-5.823c-0.421-1.263-1.099-4.092-3.999-4.068c-2.9,0.022-1.474-2.104-1.964-3.508c-0.491-1.403,0.764-0.826,2.385-0.07c6.22,2.899,4.63,6.548,6.524,5.753c2.831-1.188,3.718,3.087,6.384,3.227c2.666,0.141,2.806-1.402,3.367-2.806c0.562-1.403-3.004-4.756-2.946-7.156C203.97,436.537,195.117,439.184,194.055,438.175z M14.339,399.87c-2.339-2.807-2.641-1.035-5.52-1.403c-8.044-1.029,3.368,2.058,4.116,3.648c0.749,1.59,2.899,1.776,4.583,1.496C19.203,403.33,15.521,401.287,14.339,399.87z M23.24,431.954c-0.796-0.647-4.669,0.562-4.669,1.824s4.958,2.572,6.148,1.824C25.909,434.854,23.682,432.313,23.24,431.954z M88.914,453.563c-1.309-0.281,0.883-3.631,0-4.116c-1.871-1.029-2.824,2.889-2.806,4.396c0.046,3.906-3.251-1.075-7.016,6.548c-1.186,2.4,4.958,4.864,5.612,2.339c0.655-2.525,2.62-4.864,3.788-3.929C89.661,459.737,90.224,453.843,88.914,453.563z M28.954,483.965c-1.59-0.747-3.367,2.993-2.806,3.835c0.562,0.842,3.087-2.245,4.116-1.497c1.029,0.749,3.794-0.731,3.181-2.338C32.229,480.785,30.544,484.713,28.954,483.965z"/>

				<path id="map_3" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M151.271,251.144c-1.338,7.147-2.967,12.196-2.397,12.623c1.684,1.263-0.982,7.857-4.069,3.087s-8.138,2.807-6.168,4.068c1.97,1.263-0.988,6.876-0.146,8.981c0.842,2.104-2.245,0.14-1.964,6.313c2.526,1.684,0,8.84,2.807,10.383c2.806,1.544,0.701,4.771-3.368,6.595c-4.069,1.824-3.087,10.664-5.937,11.085s-1.781,6.174,1.025,7.156c2.807,0.982-0.421,4.49-3.134,5.004c-0.654,1.029-1.777,2.058-2.245,3.555c2.058,1.029,45.742,26.472,53.038,30.774c3.849,0.735,19.035,2.499,30.428,3.777c1.21-6.713,7.063-53.441,13.179-102.238C207.252,260.48,179.015,256.408,151.271,251.144z"/>

				<path id="map_4" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M495.913,299.687c1.918-1.543-0.096-4.209,2.246-5.331c2.338-1.123,0.65-4.021,2.961-6.922c-3.336-0.094-6.73,1.452-8.293,0.28c-3.74-2.806,5.799-5.706,0.654-8.261c-24.32,0.965-64.355,2.273-64.355,2.273c1.123,5.427,2.619,14.143,3.365,18.016c0.188,7.241,0,29.13-0.186,33.619c5.26,4.863,6.051-4.104,6.734,11.506c13.281-0.094,32.928-1.028,43.498-1.684c-2.525-3.087,2.711-6.828,0.35-7.684c-2.357-0.854-3.281-4.518-0.445-5.88c4.678-2.244-1.121-5.986,4.678-10.523c5.801-4.537-1.871-5.939,3.742-9.308c3.207-1.925-1.123-2.059,2.619-3.929C498.717,303.242,493.995,301.23,495.913,299.687z"/>

				<path id="map_5" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M131.054,321.436c-2.806-0.982-3.875-6.735-1.025-7.156s1.868-9.261,5.937-11.085c4.069-1.823,6.174-5.051,3.368-6.595c-2.807-1.543-0.281-8.699-2.807-10.383l-60.24-88.677l13.185-52.39c-20.068-4.705-39.211-9.737-54.344-14.68c-1.123,3.461,0.748,13.378-3.087,16.37s-2.075,6.318-5.706,7.857c-5.519,2.34,5.145,17.681,1.777,21.14s1.31,5.614-0.748,7.951c-2.058,2.337,0.467,7.483,2.338,8.887c1.872,1.403,2.807,6.267,3.929,7.576c1.123,1.31,1.029,2.058-0.749,2.62c-1.777,0.561,1.871,5.145,3.455,6.36s1.596-1.403,1.877-3.087c0.28-1.684,4.163,10.618,1.31,9.448c-2.854-1.17-2.058-3.461-2.927-2.619c-0.869,0.842,0.775,4.677,0.121,6.548c-0.654,1.871,1.699,6.308,2.993,7.109c7.857,4.866-4.677,6.737,1.497,16.183c1.136,1.738,1.793,7.596,3.929,8.792c4.677,2.62,2.338,11.602,4.583,11.786c2.246,0.186,1.684,5.707-0.094,7.391c-1.777,1.684,1.451,4.49,3.274,6.08c1.824,1.589,13.47,2.153,13.844,8.138c0.166,2.656,3.648,5.146,6.922,5.239c3.274,0.092,3.586,4.333,3.929,5.705c0.749,2.995,5.707,1.03,8.794,7.11c3.087,6.077,4.583,12.814,3.928,13.75c-0.655,0.936,1.684,6.36,2.525,6.455c0.842,0.093,32.365,3.367,35.078,3.18C130.633,325.926,133.861,322.418,131.054,321.436z"/>

				<path id="map_6" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M324.479,216.068c0.356-10.733,0.626-18.528,0.626-18.528c-4.413-0.096-13.633-0.734-25.115-1.673l0,0l0,0c-20.367-1.665-47.874-4.276-68.472-6.5c-2.718,21.245-5.993,47.377-9.197,72.941c21.165,2.566,39.013,5.713,86.327,7.74c3.369,0.292,10.752,0.781,14.21,0.874C323.049,265.638,324.091,227.747,324.479,216.068z"/>

				<path id="map_7" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M706.764,141.976l3.174,15.248l-2.246,2.151l1.777,2.151c1.684-1.684,11.412-8.325,13.002-8.605s0.748-2.058,2.057-2.712c1.311-0.655,4.223,0.12,7.016-1.216l-2.336-12.254C729.208,136.738,711.809,140.854,706.764,141.976z M758.215,178.843c0-2.675-2.172-4.843-4.85-4.843h-15.301c-2.68,0-4.85,2.168-4.85,4.843v9.313c0,2.675,2.17,4.843,4.85,4.843h15.301c2.678,0,4.85-2.168,4.85-4.843V178.843z"/>

				<path id="map_8" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M691.655,187.624c-6.309-0.562-5.104,3.742-5.104,3.742l5.611,21.702l7.951-1.123c-0.443-8.606-5.074-5.917-8.887-14.593c-0.561-1.275-3.184-5.477-0.842-5.987C689.684,190.128,689.463,188.077,691.655,187.624z M742.215,230.844c0-2.675-2.172-4.844-4.85-4.844h-15.301c-2.68,0-4.85,2.168-4.85,4.844v9.313c0,2.675,2.17,4.844,4.85,4.844h15.301c2.678,0,4.85-2.168,4.85-4.844V230.844z"/>

				<path id="map_9" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M629.583,368.019c-7.574-2.244,2.949,12.769-6.172,5.052c-10.244,0.701-28.186,2.237-37.744,2.666c-3.369,0.151-3.223-0.857-5.473-4.631c0,0-34.656,3.789-37.604,4.069c-2.945,0.28-2.104,2.525,0,4.49c2.105,1.964,1.125,3.384,1.684,4.677c1.246,0-0.375,2.433,1.871,2.713c2.246,0.279,1.611-4.579,3.742-5.052c2.525-0.56,0.371,2.441,2.619,2.9c4.115,0.842,4.303-0.842,4.863-2.433c0.563-1.59,6.359-1.59,5.518,0.374c-0.84,1.965,2.809,2.807,5.053,3.555c2.244,0.749,2.605-1.716,3.93-1.684c3.834,0.095-0.096,5.427,3.646,5.332c1.775-0.045,2.994,1.965,2.994,3.835s5.049,1.029,5.145-0.374c0.375-5.424,6.361-0.561,11.6-8.139c1.77-2.561,4.115,1.583,6.641,1.216c4.49-0.653,3.564,3.476,5.145,3.648c5.146,0.563,0.375,5.427,5.707,6.454c7.189,1.385,3.928,4.117,9.729,6.549c3.016,1.265,0.279,7.202-0.467,13.002c-0.75,5.8,0.934,7.577,2.898,7.952c1.965,0.374,0.281-2.245-0.188-3.368c-0.469-1.122,1.684-1.217,3.93-0.468c2.242,0.749-4.957,8.326-1.404,9.635c3.555,1.308,3.127,6.598,5.426,8.699c5.426,4.958-1.029-4.115,4.303-2.245c1.178,0.413-0.654,6.736,1.123,7.203s2.525-4.583,4.023-3.368c1.496,1.216-3.367,4.023-0.938,4.678c2.432,0.654,2.064,4.377,3.367,6.828c2.34,4.397,10.664,0.188,11.225,9.822c0.125,2.148,3.334,2.218,4.68,2.245c7.359,0.147-2.516,3.872,1.891,3.409c1.826-0.191,6.262-5.009,6.715-6.777c0.285-1.118-0.934-3.74-0.281-4.864c4.396-7.576,0-23.104-1.029-24.882c-1.027-1.776-3.199-1.158-2.9-3.181c0.098-0.666-1.811-6.108-4.021-9.167c-2.365-3.273-9.822-16.183-9.541-16.744c0.281-0.561,4.209,1.476,2.338,0c-11.973-9.445-15.059-26.285-16.275-28.25c-1.215-1.964-2.713-3.834-2.244-5.612C633.887,368.532,632.112,368.768,629.583,368.019z M654.278,469.314c-0.338,0.982-2.988,2.018-2.424,2.95c0.564,0.932,2.256-0.155,2.932-1.034c0.678-0.881,3.244-0.436,3.215-1.141C657.944,468.796,654.616,468.332,654.278,469.314z"/>

				<path id="map_10" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M633.653,335.326c-3.5-0.233-2.807-7.437-7.295-9.12c-4.492-1.684-3.65-7.437-7.719-7.296c-4.068,0.14-0.842-4.771-5.893-5.613s-3.367-6.734-10.523-9.4s-6.174-4.49-3.789-8.419c-4.117,0.601-10.322,1.387-17.713,2.221c-5.777,0.653-12.279,1.347-19.072,2.044l11.529,38.391c0,0,5.754,3.83,4.35,5.844c-1.402,2.014,2.385,3.276,0,5.24c-2.387,1.965-2.387,7.857,0,10.103c2.385,2.245-1.684,4.49,2.666,11.786c2.25,3.773,2.104,4.782,5.473,4.631c9.559-0.429,27.5-1.965,37.744-2.666c9.121,7.717-1.402-7.296,6.172-5.052c2.529,0.749,4.305,0.514,5.521-0.234c0.467-1.778-1.637-7.877,1.027-8.886c3.463-1.31-2.994-3.555,0.561-4.303c3.934-0.827-1.963-7.389,1.404-7.203c3.367,0.187,1.965-3.46,2.807-4.676C633.092,342.717,635.758,335.467,633.653,335.326z"/>

				<path id="map_11" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M335.349,478.585c-2.222-1.302-2.678-6.881-6.455-7.437c-4.771-0.701-10.523-6.875-8.278-1.543c2.245,5.331-6.314,4.63-1.824,9.681c2.146,2.414-0.421,9.963,2.947,11.226c3.367,1.263,2.666,0,4.771-2.104c2.104-2.105,6.581-3.66,8.84-4.911S339.418,480.971,335.349,478.585z M306.304,453.188c-4.659-1.14,1.263,2.946,2.245,5.76c0.982,2.813,3.648-0.147,5.332-0.007c1.684,0.141,0.842-1.824-0.982-3.648C311.075,453.469,308.424,453.707,306.304,453.188z M297.821,448.382c-6.769-1.973-3.696,1.453-0.385,2.069c3.311,0.616,3.183,1.306,4.277,0.795C302.807,450.736,301.19,449.365,297.821,448.382z M281.329,445.752c1.543,1.543,3.265,1.629,3.228-1.17c-0.021-1.554-2.832-1.236-3.228-3.039c-0.892-4.069-7.016-0.141-5.472,1.402C280.434,447.523,279.785,444.209,281.329,445.752z M251.723,428.774c-3.228,1.684-5.473,2.66-2.807,4.35c1.59,1.007,4.476,1.846,5.472,0.701C258.177,429.476,253.469,427.863,251.723,428.774z M299.214,466.843c0-2.675-2.171-4.843-4.85-4.843h-15.301c-2.678,0-4.85,2.168-4.85,4.843v9.314c0,2.675,2.171,4.843,4.85,4.843h15.301c2.678,0,4.85-2.168,4.85-4.843V466.843z"/>

				<path id="map_12" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M144.665,82.904c-1.684,4.209,7.577,5.613,3.508,9.261c-4.069,3.648-5.472,10.383-7.156,10.944c-1.684,0.562-7.437,8.326-5.191,10.617c2.245,2.292,1.64,2.292-0.513,7.062c-2.153,4.771-6.419,29.885-7.232,32.832c14.175,2.921,27.828,5.543,39.86,7.72c17.697,3.201,31.887,5.436,39.07,6.231l6.737-44.833c-1.311-3.634-4.117,1.621-8.046-3.072c-3.264-3.899-5.472,4.069-9.962,0c-4.49-4.069-8.326,4.094-7.156-1.029c2.104-9.214-5.525-4.983-3.929-8.933c2.666-6.595-4.771-1.964-2.526-7.437c2.245-5.472-1.403-8.138-4.069-5.472s-5.748-1.102-4.49-2.385c6.875-7.016-1.964-5.332,2.666-10.804c2.288-2.703,4.209-7.577,0-7.437c-4.209,0.141-3.763-2.408-4.49-5.871c-1.684-8.02-3.929-5.775-5.893-8.44c-1.964-2.666,2.525-5.472-2.807-12.067c0.842-5.753,3.152-17.06,3.152-17.06c-4.246-0.868-8.389-1.74-12.423-2.613c-1.273,5.724-7.688,36.655-9.109,41.982C144.104,74.205,146.349,78.695,144.665,82.904z"/>

				<path id="map_13" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M483.098,173.546c0.139,3.788,5.473,3.788,4.068,6.314c-1.402,2.525,0.281,6.174-3.787,7.156c-4.07,0.982-8.139,1.614-8.559,4.771c-0.422,3.157,4.232,4.181,2.664,5.613c-6.455,5.893,0.773,3.367-6.455,11.786c-0.531,0.621-2.385,13.891,7.619,16.557c2.568,0.685,3.92,2.692,3.449,5.753c-0.182,1.172,0.902,5.005,3.205,3.04c2.301-1.965,7.752,0.497,5.092,4.817c-4.939,8.019,3.998,14.803,7.996,14.452c3.797-0.333,5.824,7.998,4.35,9.962c-1.473,1.965,3.51,4.631,4.492,4.21c0.98-0.421,0.559-5.332,5.051-3.368c4.49,1.965,5.078,1.766,4.629-1.402c-0.98-6.946,6.875-2.175,5.332-10.805c-0.402-2.248-3.861-6.569,0.035-8.195c3.895-1.626,2.211-6.678,4.035-7.379c1.822-0.702,2.807-4.069,0.842-5.332s-1.965-4.63-1.123-6.875l-3.928-44.479c-2.057-1.497-5.24-9.729-5.428-13.47l-36.949,2.666C480.012,171.582,482.958,169.758,483.098,173.546z"/>

				<path id="map_14" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M527.157,231.495c1.965,1.263,0.98,4.63-0.842,5.332c-1.824,0.701-0.141,5.752-4.035,7.379c-3.896,1.626-0.438,5.947-0.035,8.195c9.682-5.963,11.811,0.912,14.08-2.104c2.268-3.017,7.67,0.936,7.67-3.554c0-4.49,7.012,0.493,7.857-3.742c1.332-6.665,6.361-2.666,5.986-9.167c-0.313-5.43,11.199-0.795,6.361-9.354l-5.986-48.641l-27.127,2.058c-2.807,3.367-6.924,3.742-8.98,2.245l3.928,44.479C525.192,226.865,525.192,230.232,527.157,231.495z"/>

				<path id="map_15" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M400.624,163.865c-2.498,3.742-1.375,3.789,0,8.418c1.375,4.63-1.291,5.192,3.479,7.437c4.771,2.245-0.701,7.296,3.227,10.383c3.93,3.087,1.404,9.682,4.209,16.978c8.842,0.982,52.197-2.526,54.162-2.807c1.963-0.28,4.068,3.648,5.33,4.911c7.229-8.419,0-5.893,6.455-11.786c1.568-1.432-3.086-2.456-2.664-5.613c0.42-3.157,4.488-3.788,8.559-4.771c4.068-0.982,2.385-4.63,3.787-7.156c1.404-2.526-3.93-2.526-4.068-6.314c-0.141-3.789-3.086-1.964-3.369-4.209c-0.279-2.245-2.949-2.079-5.471-4.35c-6.596-5.94,2.197-8.232-4.35-13.189c-12.16,0.842-54.629,1.964-67.91,1.684C399.096,156.849,403.12,160.123,400.624,163.865z"/>

				<path id="map_16" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M421.922,226.725c-1.369-2.426,3.648-2.526,1.965-5.893c-1.684-3.368-2.666,2.104-6.455-3.087c-10.805,1.123-77.866-0.267-92.954-1.677c-0.387,11.679-1.43,49.57-1.621,54.854c13.099,1.077,73.396,2.76,106.201,1.825c-0.113-12.418-0.738-33.745-1.057-37.978C427.534,228.549,426.27,234.442,421.922,226.725z"/>

				<path id="map_17" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M599.932,240.194c-0.186-2.525-3.461-2.385-2.619-6.922c0.49-2.633-2.432-2.058-3.93-4.303c-1.496-2.245-2.992-0.562-4.115,1.122c-1.123,1.684-3.555-1.871-6.547,0.188s-2.738-2.853-5.801-1.122c-3.063,1.73-3.951-7.414-12.721-4.678c4.838,8.559-6.674,3.925-6.361,9.354c0.375,6.501-4.654,2.502-5.986,9.167c-0.846,4.235-7.857-0.749-7.857,3.742c0,4.49-5.402,0.538-7.67,3.554c-2.27,3.017-4.398-3.858-14.08,2.104c1.543,8.63-6.313,3.858-5.332,10.805c0.449,3.168-0.139,3.367-4.629,1.402c-4.492-1.964-4.07,2.947-5.051,3.368c0.467,1.216-1.174,2.74,0,4.303c2.525,3.367-4.938,2.548-3.93,5.779c6.828-0.447,19.363-2.131,21.047-2.131c-0.375-1.31-1.871-2.924,0-3.146s32.678-2.65,62.299-5.362c0.5-2.688,8.422-4.079,8.605-6.459c0.305-3.929,3.461-0.632,4.117-5.8c0.42-3.325,4.957-0.795,8.418-7.296C604.625,244.848,600.12,242.72,599.932,240.194z"/>

				<path id="map_18" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M507.7,378.356c-10.383,0.654-25.725,1.496-29.01,1.59c-0.178-1.872-2.047-5.613,0.572-6.361c2.621-0.747,0.467-2.339,1.871-6.828c1.404-4.488,5.988-5.612,2.621-8.605c-3.367-2.994,4.957-2.899,1.215-5.706s0.094-6.175-2.432-9.262c-10.57,0.655-30.217,1.59-43.498,1.684c0.748,17.077,0.748,19.738,2.807,20.112s2.082,7.567,4.303,9.728c6.734,6.549-2.619,13.096,0,18.147c2.619,5.051-3.557,7.671-1.777,10.851c2.898-1.028,2.619,0.094,4.77,0.094c2.154,0,1.779-1.965,2.713-3.274c0.936-1.311,2.525-0.562,1.871,1.871s16.275,3.274,18.148,2.713c1.871-0.562-1.404-4.771,2.338-3.181c3.742,1.589,4.057-1.233,5.426,1.59c2.9,5.987,7.482,0.095,8.42,6.923c0.434,3.185,8.699,3.087,7.949,1.216c-0.748-1.871,0.375-1.871,2.898-2.058c2.527-0.187,2.221,4.149,3.836,2.806c4.279-3.555-0.842-5.706-0.748-7.764s6.49,2.397,7.391,3.929c1.871,3.181,6.828,0.75,8.324,3.274s2.621-0.749,1.965-3.087c-0.656-2.339-9.166-0.936-9.166-5.612c0-4.678,3.145-1.274,3.648-3.648c1.309-6.173-2.223-0.996-3.742-0.655c-5.217,1.169-1.076-5.285-5.426-3.273c-1.383,0.639-10.57,0.937-5.799-3.367c2.607-2.353,4.863-2.526,6.547-0.375c1.684,2.15,2.115-0.103,4.77,1.029C511.817,387.243,502.274,386.12,507.7,378.356z"/>

				<path id="map_19" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M737.905,114.475c0.563-2.525,1.777-17.118,5.332-14.873s-0.787-6.113,4.021-4.396c6.221,2.221,5.35-8.626,5.613-10.29c0.936-5.893,2.432,5.425,6.828-3.274c1.113-2.204,4.959,1.964,5.801-2.339c0.813-4.157,9.354-5.519,9.729-8.605c0.314-2.6-3.93-1.123-3.742-5.332c0.186-4.209-4.584,2.433-5.707-4.957c-0.543-3.573-4.678,0.093-5.986-5.238c-1.309-5.332-8.324-20.86-11.785-22.918s-6.643,4.116-8.793,4.209c-2.15,0.093-3.461-3.554-4.398-3.835c-0.934-0.28-7.67,15.341-5.893,17.866c1.779,2.526-0.111,7.8-0.842,9.261c-1.684,3.368,3.555,2.806,1.123,4.958c-4.477,3.959-1.193,9.775-6.922,12.348l11.037,33.675C733.321,110.733,737.063,112.23,737.905,114.475z"/>

				<path id="map_20" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M686.551,191.366l-50.527,9.456l1.887,9.813c0,0,2.432-6.735,6.359-6.174c3.93,0.562,0-3.367,3.367-2.619c3.369,0.748,4.492-3.742,8.047-2.62c3.553,1.123,5.607,0.744,5.611,4.116c6.641,0,2.621,5.425,6.174,4.303c3.555-1.123,7.793,2.739,5.051,5.426c-4.584,4.49-2.805,8.418,2.057,5.332c1.309-1.403,5.801,1.684,6.828,2.432c1.029,0.748,3.088,0.936,3.555,0.094c0.469-0.842-3.18-1.778-3.271-2.526c-0.094-0.748,4.863,1.101,2.057-1.684c-2.174-2.157-1.965-3.368-3.461-5.426s1.123-2.338-0.654-4.49c-1.779-2.152-2.434-6.479,1.496-8.792c1.229-0.723,2.432-3.648,4.115-2.9c1.684,0.748-0.375,3.835-2.15,4.396c-1.777,0.562,3.271,4.397,0.842,5.52c-2.432,1.123,0.373,2.806,0.561,4.49c0.188,1.684,3.953,0.654,3.648,2.432c-0.303,1.777-3.516-0.709-2.9,1.684c1.311,5.098,5.293,2.133,5.613,3.648c1.24,5.87,5.705,2.338,6.174,3.18l2.15-0.467c0.563-1.403,2.246-6.455,0.936-8.044l-7.951,1.123L686.551,191.366z M746.215,256.843c0-2.675-2.172-4.843-4.85-4.843h-15.301c-2.68,0-4.85,2.168-4.85,4.843v9.314c0,2.675,2.17,4.843,4.85,4.843h15.301c2.678,0,4.85-2.168,4.85-4.843V256.843z"/>

				<path id="map_21" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M730.375,123.642c-1.803,0.406-8.602,1.914-14.445,3.208c-4.926,1.091-9.174,2.031-9.174,2.031c-0.188,2.432,0.008,13.096,0.008,13.096c5.045-1.123,22.443-5.238,22.443-5.238s5.049-2.245,6.172,1.216c7.154,8.442,8.35-2.502,10.287,1.964c0.984,2.265,0.938,0.187,5.24-1.591c4.303-1.777,3.93-4.302,3.555-5.425c-0.373-1.123-2.525-0.655-1.402,0.748c1.123,1.403-4.303,3.368-6.08,3.087c-1.779-0.281-4.865-2.058-4.396-6.08c0.174-1.501-4.209,0.374-5.053-2.994c-0.842-3.368,3.949-4.773,3.836-5.519c-0.375-2.433-3.834,0.654-4.395-3.461C733.696,118.59,734.819,121.771,730.375,123.642z M778.215,108.843c0-2.675-2.172-4.843-4.85-4.843h-15.301c-2.68,0-4.85,2.168-4.85,4.843v9.313c0,2.675,2.17,4.843,4.85,4.843h15.301c2.678,0,4.85-2.168,4.85-4.843V108.843z"/>

				<path id="map_22" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M573.928,133.557c-3.555-1.684-3.93,5.426-6.549,5.051s-5.799-0.771-1.496-4.033c4.303-3.263-1.123-1.018,3.367-6.256c4.49-5.238-3.18-8.98-0.375-16.276c1.832-4.766-10.477-2.432-9.914-5.613c0.561-3.18-4.863-1.497-5.613-2.432c-0.748-0.936-2.807-2.058-4.678-0.187s0.563,7.109-1.871,7.484c-2.43,0.374-3.74,2.806-3.18,6.173c0.563,3.368-2.432,5.987-3.18,1.497c-0.748-4.49-4.49-1.123-4.303,1.684s-3.371,1.685-2.621,6.361s-5.236,7.67-2.244,11.038c2.992,3.367,0.561,8.418,4.865,16.837c4.305,8.418-2.246,19.644-5.051,23.011l27.127-2.058l17.586-1.871c0-1.684,4.863-5.242,5.799-5.613c-1.633,0.758-2.061-4.115-0.938-5.799c-3.557-6.36,2.902-7.016,5.988-7.016c0.467-0.936,0.373-3.087,0-5.612c0-7.016-5.051-10.384-6.174-17.493C579.354,125.326,577.481,135.241,573.928,133.557z M541,86.6c-5.426,4.116-8.045,2.807-11.785,3.368c-3.742,0.561-4.486,7.531-7.813,3.929c-5.283-5.723-7.902-0.375-13.408-6.735c-2.148-2.482-4.412,3.742-6.842-0.562c-2.432-4.303,2.992-6.735,5.426-7.296c2.432-0.562,2.512-5.274-1.871-2.994c-4.383,2.28-12.021,10.017-15.529,13.657c-4.863,5.051-8.045-1.794-13.471,5.051c2.059,1.497,0.521,4.383,6.395,4.677c14.936,0.748,5.58,4.49,19.238,4.303c4.301-0.059,4.488,3.929,8.418,3.929s-2.18,5.433,2.992,6.548c1.789,0.386,2.684,1.074,2.982,1.955c2.816-4.012,5.625-15.237,7.121-11.87c1.496,3.368,3.742,3.742,4.115,0.562c0.375-3.181,8.047-1.123,8.793-4.303c0.748-3.181,8.045-3.929,10.479-2.058c2.432,1.871,4.676-3.428,6.922-1.059c2.244,2.369,6.17,1.005,6.17-1.56c-0.842,1.123-2.617-1.216-3.086-3.929c-0.467-2.713-2.711-2.807-4.957-2.058C546.987,94.831,544.936,83.615,541,86.6z M488.616,71.259c2.246,1.496,9.543-5.051,8.607-6.361S487.059,70.221,488.616,71.259z"/>

				<path id="map_23" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M392.742,69.715c5.749,8.98,2.801,29.465,5.465,31.149c2.668,1.684,2.143,7.617,1.773,9.495c0,5.659-9.068,5.659,1.596,10.009c1.047,0.428,0.561,29.887,0.422,33.114c13.281,0.281,55.75-0.842,67.91-1.684c-2.063-1.562,3.555-7.951-3.742-9.448c-7.295-1.497-5.238-7.483-11.225-8.793c-5.986-1.309-6.361-5.425-5.801-10.664c0.563-5.238,2.807-1.871-0.188-7.483c-2.992-5.612,6.551-9.167,5.613-12.534c-0.934-3.368-2.432-7.203,1.592-9.308c-2.025-2.048,8.324-6.407,10.57-12.02c2.244-5.612,13.281-6.548,15.059-12.441c-2.434,1.777-1.121-2.432-8.791-0.655c-1.934,0.447-1.498-2.338-3.275-2.338c-1.779,0-5.145,8.512-15.246-0.562c-1.838-1.649-3.65,3.18-7.297-3.742c-1.744-3.311-6.08-1.403-10.758,1.029c-4.678,2.432-1.59-4.771-11.225-3.368c-3.246,0.473-2.994-4.06-3.367-7.577c-0.375-3.517,0.795-3.368-4.678-3.835c0.094,1.684,0.561,4.022,0.373,6.174c-8.449,0.493-16.945,0.824-25.461,1.007C396.159,62.61,389.807,65.129,392.742,69.715z"/>

				<path id="map_24" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M526.577,303.145c-15.568,1.427-28.568,2.615-33.096,2.716c-3.742,1.87,0.588,2.004-2.619,3.929c-5.613,3.368,2.059,4.771-3.742,9.308c-5.799,4.537,0,8.279-4.678,10.523c-2.836,1.362-1.912,5.025,0.445,5.88c2.361,0.855-2.875,4.597-0.35,7.684s-1.311,6.455,2.432,9.262s-4.582,2.712-1.215,5.706c3.367,2.993-1.217,4.117-2.621,8.605c-1.404,4.489,0.75,6.081-1.871,6.828c-2.619,0.748-0.75,4.489-0.572,6.361c3.285-0.094,18.627-0.936,29.01-1.59c-5.426,7.764,4.117,8.887,2.805,14.498c4.398,1.872,2.787-6.799,9.822-4.397c4.865,1.661,4.584-2.548,8.982-1.402l-3.697-26.753L526.577,303.145z"/>

				<path id="map_25" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M502.741,263.767c1.475-1.964-0.553-10.295-4.35-9.962c-3.998,0.351-12.936-6.433-7.996-14.452c2.66-4.321-2.791-6.782-5.092-4.817c-2.303,1.965-3.387-1.868-3.205-3.04c0.471-3.061-0.881-5.068-3.449-5.753c-10.004-2.666-8.15-15.936-7.619-16.557c-1.262-1.263-3.367-5.191-5.33-4.911c-1.965,0.281-45.32,3.789-54.162,2.807c0.703,2.245,7.045,10.544,5.895,10.664c3.789,5.191,4.771-0.281,6.455,3.087c1.684,3.367-3.334,3.467-1.965,5.893c4.348,7.717,5.611,1.824,6.08,8.044c0.318,4.233,0.943,25.56,1.057,37.978c0.049,5.307,0.066,8.979,0.066,8.979s40.035-1.309,64.355-2.273c5.145,2.555-4.395,5.455-0.654,8.261c1.563,1.172,4.957-0.374,8.293-0.28c-0.406-10.384,3.211-6.08,2.184-9.375c-1.008-3.231,6.455-2.412,3.93-5.779c-1.174-1.563,0.467-3.087,0-4.303C506.25,268.397,501.268,265.731,502.741,263.767z"/>

				<path id="map_26" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M165.852,61.858c1.964,2.666,4.209,0.421,5.893,8.44c0.727,3.463,0.28,6.012,4.49,5.871c4.209-0.14,2.288,4.733,0,7.437c-4.63,5.472,4.209,3.789-2.666,10.804c-1.258,1.283,1.824,5.051,4.49,2.385s6.314,0,4.069,5.472c-2.245,5.472,5.192,0.842,2.526,7.437c-1.597,3.95,6.033-0.281,3.929,8.933c-1.17,5.124,2.666-3.04,7.156,1.029c4.49,4.069,6.699-3.899,9.962,0c3.929,4.693,6.735-0.562,8.046,3.072l1.354-9.012c14.218,2.993,77.516,9.846,89.832,10.536c0.414-6.078,0.824-12.146,1.219-18.035c1.799-26.849,3.266-49.991,3.202-53.375c-52.597-3.918-102.543-11.819-143.157-20.122c0,0-2.31,11.307-3.152,17.06C168.377,56.386,163.888,59.192,165.852,61.858z"/>

				<path id="map_27" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M417.432,217.745c1.15-0.12-5.191-8.419-5.895-10.664c-2.805-7.296-0.279-13.891-4.209-16.978c-3.928-3.087,1.545-8.138-3.227-10.383c-4.77-2.245-2.104-2.806-3.479-7.437c-7.419-9.916-9.29,0-13.78-6.454c-2.89-4.155-4.209,4.069-12.067-2.806c-20.486,0.28-58.802-1.151-72.336-2.54c-1.167,16.82-2.111,30.328-2.451,35.384c11.482,0.938,20.703,1.577,25.115,1.673c0,0-0.27,7.795-0.626,18.528C339.566,217.478,406.627,218.867,417.432,217.745z"/>

				<path id="map_28" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M128.08,153.621c-12.714-2.62-25.849-5.479-38.608-8.471l-13.185,52.39l60.24,88.677c-0.28-6.174,2.807-4.209,1.964-6.313c-0.842-2.105,2.116-7.719,0.146-8.981c-1.97-1.262,3.082-8.839,6.168-4.068s5.752-1.824,4.069-3.087c-0.57-0.427,1.059-5.476,2.397-12.623c5.138-27.448,16.668-89.803,16.668-89.803C155.908,159.164,142.255,156.542,128.08,153.621z"/>

				<path id="map_29" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M718.262,90.341c4.021,5.425-4.465,6.782-3.275,9.167c2.809,5.626-2.115,9.541-0.402,13.844c1.713,4.303,1.346,13.498,1.346,13.498c5.844-1.294,12.643-2.801,14.445-3.208c4.443-1.871,3.32-5.052,6.596-4.958c-0.563-4.116,0.373-1.684,0.934-4.209c-0.842-2.245-4.584-3.741-4.584-3.741l-11.037-33.675c-4.305-0.188-3.93,4.21-4.021,6.361C719.854,86.787,715.383,86.461,718.262,90.341z M716.215,58.843c0-2.675-2.174-4.843-4.852-4.843h-15.297c-2.68,0-4.852,2.168-4.852,4.843v9.313c0,2.675,2.172,4.843,4.852,4.843h15.297c2.678,0,4.852-2.168,4.852-4.843V58.843z"/>

				<path id="map_30" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M703.481,169.367c0.023-1.32-0.654-2.322,2.525-3.631c-0.373-1.31,0-3.555,0-3.555l-12.533-3.929c0,0-0.748,5.988-2.807,7.484s1.309,3.367,0,4.303s-0.496,3.742,1.063,4.303c1.559,0.562,8.291,4.116,5.674,6.361c-2.619,2.245-1.217,5.987-5.748,6.922c-2.191,0.453-1.971,2.504-1.27,3.742c2.902-0.631-1.52,3.508,8.98,6.829c2.244,0.71,0.086,3.251,1.963,3.835c4.209,1.31,1.219-9.729,4.584-10.944c3.369-1.216,0.498-7.06,1.592-10.29C711.969,167.603,703.317,178.738,703.481,169.367z M747.215,204.844c0-2.675-2.172-4.844-4.85-4.844h-15.301c-2.68,0-4.85,2.168-4.85,4.844v9.313c0,2.675,2.17,4.844,4.85,4.844h15.301c2.678,0,4.85-2.168,4.85-4.844V204.844z"/>

				<path id="map_31" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M247.093,356.794c2.245,0.421,54.959,5.378,54.959,5.378s4.367-57.06,6.037-82.719c0.262-4.019,0.554-7.08,0.559-9.405c-47.314-2.027-65.163-5.174-86.327-7.74c-6.116,48.797-11.969,95.525-13.179,102.238c7.435,0.835,13.255,1.462,13.255,1.462l1.31-7.577c0,0,23.479,2.058,24.602,2.151C247.794,358.898,246.04,357.986,247.093,356.794z"/>

				<path id="map_32" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M624.067,156.756l0.748,3.741c0,0,49.764-10.289,57.994-11.786c0.936,2.245,4.49,1.871,4.865,4.49c0.375,2.619,5.799,5.051,5.799,5.051l12.533,3.929c0,0-0.373,2.245,0,3.555c-1.123,2.526,0.188,2.525,0.936,3.554s19.178-8.606,19.551-9.916c0.373-1.309,3.74-2.712,2.898-3.461c-0.842-0.749-2.125,0.65-3.367,0.374c-2.523-0.561-3.424,5.795-8.604,3.555c-2.574-1.112-3.438,4.022-8.607,5.145c-1.293,0.28-1.027-1.778,0.656-3.461l-1.777-2.151l2.246-2.151l-3.174-15.248c0,0-0.195-10.664-0.008-13.096c0.188-2.432-2.994-13.657-4.49-14.178c-1.496-0.521-1.871-4.343-4.117-8.272c-2.242-3.929,0.938-7.67-0.934-10.664s-0.561-3.18-1.498-6.267c-2.807,0.842-12.799,3.819-16.742,4.116c-12.441,0.936-8.047,19.363-19.084,21.328c13.191-1.591,1.217,5.145,5.146,7.389c3.928,2.245-4.68,1.684-3.555,4.303c1.121,2.62-3.182,5.986-6.361,4.303c-3.18-1.684-2.805,2.994-9.729,1.31c-6.922-1.684-15.527,4.302-15.998,6.36c2.104-1.039,4.865,5.987,3.369,6.268C634.354,149.833,626.311,155.633,624.067,156.756z"/>

				<path id="map_33" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M612.186,270.782c-0.563,2.666-5.754-0.701-6.455,3.087c-0.701,3.789-5.611,0.421-5.893,4.49s-5.754-0.141-6.314,5.052c-0.561,5.191-9.682,0.561-8.559,5.752c1.123,5.192-5.262,1.777-4.244,8.535c7.391-0.834,13.596-1.62,17.713-2.221c1.67-0.243,8.84-5.051,11.227-5.753c2.385-0.701,12.205-1.543,17.678-2.245c5.473-0.701,5.613,4.911,5.613,4.911l16.836-2.245l19.365,13.564c11.598-2.245,3.273-5.8,9.26-6.829c2.881-0.496,1.029-8.324,5.332-8.605c4.303-0.28,3.834-5.332,9.541-5.146c4.131,0.136,3.461-2.712,4.396-4.49c0.934-1.777-1.496-1.496-1.871-0.373c-0.373,1.122-5.611,2.058-7.482,1.402c-1.871-0.654-0.842-3.18,0.559-2.058c1.404,1.122,2.996-0.374,4.961-3.181c1.963-2.807-0.75-1.216-3.088-3.18c-2.338-1.965,2.23-2.474,5.705-1.685c4.117,0.936,2.504-3.273,5.332-3.835c1.98-0.394,2.152-4.49,0.094-5.706s-1.965,2.433-2.338,3.648c-0.375,1.216-2.549,0.584-1.684-2.169c1.408-4.484-2.408,0.929-9.262-0.264c-1.971-0.343-2.434-4.677-1.404-5.332c1.029-0.654,0.232,2.051,2.34,2.994c3.555,1.59,5.146-5.333,7.109-4.771c1.965,0.562,2.619-1.029,1.965-2.152c-0.654-1.122-2.432-2.245-2.432-4.115c-25.725,6.548-64.637,13.844-80.988,15.922C615.717,266.533,612.747,268.116,612.186,270.782z"/>

				<path id="map_34" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M306.152,106.227c20.825,2.261,73.816,4.179,93.829,4.132c0.369-1.877,0.895-7.811-1.773-9.495c-2.665-1.684,0.283-22.169-5.465-31.149c-2.936-4.586,3.417-7.105-0.68-14.474c-27.663,0.595-55.54-0.366-82.708-2.389C309.417,56.236,307.951,79.378,306.152,106.227z"/>

				<path id="map_35" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M576.92,229.157c3.063-1.731,2.809,3.18,5.801,1.122s5.424,1.497,6.547-0.188c1.123-1.684,2.619-3.367,4.115-1.122c1.498,2.245,4.42,1.669,3.93,4.303c3.367,0.562,4.678-2.994,4.678-8.901s6.172-1.202,5.799-7.001s2.146-6.479,3.93-5.051c0.934,0.749,7.902-4.864,6.463-7.483c-2.092-3.808,1.02-4.864,0-7.483c-1.02-2.619,0.645-4.303-1.039-7.67s2.479-2.44,2.479-2.44l-4.348-23.751c-2.059,1.123-14.783,11.973-17.773,11.973c-2.994,0-6.361,3.367-9.729,2.432s-11.973-2.245-11.973-3.929l-17.586,1.871l5.986,48.641C572.969,221.744,573.858,230.888,576.92,229.157z"/>

				<path id="map_36" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M432.491,299.742c-0.746-3.873-2.242-12.589-3.365-18.016c0,0-0.018-3.673-0.066-8.979c-32.805,0.935-93.102-0.748-106.201-1.825c-3.458-0.093-10.841-0.582-14.21-0.874c-0.005,2.325-0.297,5.387-0.559,9.405c7.476,0.403,39.654,2.273,43.208,2.273c-0.374,5.427-0.936,29.479-0.936,34.384c6.922,7.71,9.367,0.494,11.6,5.091c3.18,6.548,13.283,1.684,17.398,6.548c4.116,4.865,4.303-0.935,8.98,2.433s6.478-4.065,12.723,0c8.045,5.239,9.779-3.337,14.217-0.749c6.736,3.929,7.111-5.237,17.025,3.929C432.491,328.872,432.678,306.983,432.491,299.742z"/>

				<path id="map_37" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M128.08,153.621c0.813-2.947,5.08-28.061,7.232-32.832c2.153-4.771,2.758-4.771,0.513-7.062c-2.245-2.292,3.508-10.056,5.191-10.617c1.684-0.561,3.087-7.296,7.156-10.944c4.069-3.648-5.191-5.051-3.508-9.261c-3.648-0.842-27.922-7.717-40.55-5.009c-10.41,2.232-16.136-5.795-23.432-3.55c-4.861,1.496-11.084-3.368-8.418-8.98c0.754-1.587,0.421-4.63-2.385-4.069c-2.806,0.562-5.051-4.209-10.244-3.508c-8.886,24.416-13.75,47.146-18.333,48.454c-2.704,0.772-6.081,6.736-5.52,9.916c0.562,3.18,0.468,10.851-0.654,14.312c15.132,4.943,34.275,9.976,54.344,14.68C102.231,148.142,115.365,151.001,128.08,153.621z"/>

				<path id="map_38" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M687.674,153.201c-0.375-2.62-3.93-2.245-4.865-4.49c-8.23,1.497-57.994,11.786-57.994,11.786l-0.748-3.741c-2.246,1.123-6.734,5.612-8.793,6.735l4.348,23.751l2.947,16.097l13.455-2.518l50.527-9.456c0,0-1.205-4.304,5.104-3.742c4.531-0.935,3.129-4.677,5.748-6.922c2.617-2.245-4.115-5.799-5.674-6.361c-1.559-0.561-2.371-3.367-1.063-4.303s-2.059-2.807,0-4.303s2.807-7.484,2.807-7.484S688.049,155.82,687.674,153.201z"/>

				<path id="map_39" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M729.208,136.738l2.336,12.254c7.623-3.648,2.645-6.665,3.836-11.038C734.256,134.493,729.208,136.738,729.208,136.738z M775.215,152.843c0-2.675-2.172-4.843-4.85-4.843h-15.301c-2.68,0-4.85,2.168-4.85,4.843v9.313c0,2.675,2.17,4.843,4.85,4.843h15.301c2.678,0,4.85-2.168,4.85-4.843V152.843z"/>

				<path id="map_40" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M632.952,292.391c0,0-0.141-5.612-5.613-4.911c-5.473,0.702-15.293,1.544-17.678,2.245c-2.387,0.702-9.557,5.51-11.227,5.753c-2.385,3.929-3.367,5.753,3.789,8.419s5.473,8.559,10.523,9.4s1.824,5.753,5.893,5.613c4.068-0.141,3.227,5.612,7.719,7.296c4.488,1.684,3.795,8.887,7.295,9.12c2.105,0.141-0.561,7.391,7.25,7.391c0.842-1.216-0.842-3.742-0.75-6.642c0.094-2.899,3.088,1.59,4.117,1.59s1.215-2.339,0.188-2.9c-1.029-0.561-0.154-2.58,3.553-1.403c5.895,1.872,2.994-6.173,7.111-6.359c4.115-0.188,0.006-2.717,2.711-4.023c5.426-2.62,0-7.202,4.584-9.446c2.16-1.06,0.449-8.605,6.736-9.822l-19.365-13.564L632.952,292.391z"/>

				<path id="map_41" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M374.777,163.023c7.857,6.875,9.177-1.349,12.067,2.806c4.49,6.454,6.36-3.461,13.78,6.454c-1.375-4.63-2.498-4.677,0-8.418c2.496-3.742-1.527-7.016,1.375-10.383c0.139-3.227,0.625-32.686-0.422-33.114c-10.664-4.35-1.596-4.35-1.596-10.009c-20.013,0.047-73.004-1.871-93.829-4.132c-0.395,5.89-0.805,11.958-1.219,18.035c-0.854,12.53-1.722,25.099-2.493,36.221C315.975,161.872,354.291,163.303,374.777,163.023z"/>

				<path id="map_42" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M524.35,275.928c-1.684,0-14.219,1.684-21.047,2.131c1.027,3.295-2.59-1.009-2.184,9.375c-2.311,2.901-0.623,5.799-2.961,6.922c-2.342,1.122-0.328,3.788-2.246,5.331c-1.918,1.544,2.805,3.556-2.432,6.174c4.527-0.101,17.527-1.289,33.096-2.716c11.102-1.02,23.506-2.216,35.072-3.402c6.793-0.697,13.295-1.391,19.072-2.044c-1.018-6.758,5.367-3.343,4.244-8.535c-1.123-5.191,7.998-0.561,8.559-5.752c0.561-5.192,6.033-0.982,6.314-5.052s5.191-0.701,5.893-4.49c0.701-3.788,5.893-0.421,6.455-3.087c0.561-2.666,3.531-4.249,3.012-6.995c-5.582,0.779-18.072,2.412-28.549,3.633c-29.621,2.712-60.428,5.141-62.299,5.362S523.975,274.618,524.35,275.928z"/>

				<path id="map_43" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M446.149,392.854c-2.619-5.052,6.734-11.599,0-18.147c-2.221-2.16-2.244-9.354-4.303-9.728s-2.059-3.035-2.807-20.112c-0.684-15.61-1.475-6.643-6.734-11.506c-9.914-9.166-10.289,0-17.025-3.929c-4.438-2.588-6.172,5.988-14.217,0.749c-6.245-4.065-8.046,3.367-12.723,0s-4.864,2.433-8.98-2.433c-4.116-4.864-14.218,0-17.398-6.548c-2.233-4.597-4.677,2.619-11.6-5.091c0-4.904,0.562-28.957,0.936-34.384c-3.554,0-35.733-1.87-43.208-2.273c-1.67,25.659-6.037,82.719-6.037,82.719s-52.715-4.957-54.959-5.378c-1.053,1.192,0.701,2.104,1.215,3.788c1.123,0.095,4.49,0.469,4.116,3.274c-0.374,2.807,6.142,5.454,7.203,7.764c4.771,10.384,11.599,7.858,11.225,11.974c-0.374,4.115,4.49,3.461,3.554,6.548c-0.936,3.086,1.31,6.734,2.058,10.289c0.748,3.556,6.455,3.837,6.642,7.202c0.187,3.365,6.977,3.812,9.822,6.081c7.389,5.894,9.073-14.592,16.463-11.692c4.093,1.606,3.181-2.806,5.332-0.748c2.151,2.057,9.447-1.402,11.786,3.086c2.339,4.489,11.505,9.636,11.786,14.687c0.281,5.05,4.678,7.577,4.397,11.692s8.138,2.34,7.764,9.448c-0.186,3.535,6.828,2.9,5.238,10.195c-0.745,3.415,3.742,6.455,3.835,10.757c0.094,4.303,5.612,1.873,6.547,5.146c0.935,3.272,4.487,1.219,6.735,3.646c4.677,5.053,9.729-1.495,15.061,5.051c1.922,2.36,1.964-1.215,2.619-2.057s-1.336-3.238-0.748-4.303c1.496-2.712-5.051-4.489-2.151-7.391s-3.742-4.207-1.31-6.641c2.432-2.434,1.029-4.023-0.093-4.304s-1.31-1.59,0.374-1.87c1.684-0.28,3.67-4.699,3.367-5.987c-1.497-6.359,4.396-2.431,3.181-6.268c-0.683-2.153,3.555-4.863,4.677-4.302c1.121,0.561,7.998-2.105,4.303-3.743c-1.082-0.479-3.588-5.472,0.094-3.367c8.512,4.865,11.564-4.957,19.924-5.145c3.6-0.081,3.275-4.771,4.863-5.425c1.592-0.654,1.029-3.836,0.188-5.146s1.684-4.677,3.275-4.49c1.59,0.187,1.309,3.462,3.74,3.462c2.434,0,7.297-3.274,10.197-4.303C442.592,400.525,448.768,397.905,446.149,392.854z"/>

				<path id="map_44" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M204.25,185.941l2.76-18.369c-7.184-0.795-21.374-3.03-39.07-6.231c0,0-11.53,62.355-16.668,89.803c27.744,5.265,55.981,9.337,71.05,11.164c3.204-25.564,6.479-51.696,9.197-72.941C218.433,187.954,208.141,186.697,204.25,185.941z"/>

				<path id="map_45" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M698.149,106.43c2.246,3.929,2.621,7.751,4.117,8.272c1.496,0.521,4.678,11.746,4.49,14.178c0,0,4.248-0.939,9.174-2.031c0,0,0.367-9.194-1.346-13.498c-1.713-4.303,3.211-8.218,0.402-13.844c-1.189-2.386,7.297-3.742,3.275-9.167c-2.879-3.88,1.592-3.554,0-6.922c-1.592,0.749-19.738,5.238-22.545,6.08c0.938,3.087-0.373,3.273,1.498,6.267S695.907,102.501,698.149,106.43z M685.215,71.844c0-2.675-2.172-4.844-4.85-4.844h-15.301c-2.68,0-4.85,2.168-4.85,4.844v9.313c0,2.675,2.17,4.844,4.85,4.844h15.301c2.678,0,4.85-2.168,4.85-4.844V71.844z"/>

				<path id="map_46" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M694.036,225.79c-1.123,0.749-0.281,5.332-0.938,5.893c-0.656,0.561-0.186,4.958,0.938,5.145c1.121,0.187,1.121-4.303,1.027-6.455s2.059-0.842,2.432-1.777c0.375-0.935,1.123-7.203,1.684-8.606l-2.15,0.467C697.495,221.299,695.157,225.041,694.036,225.79z M672.52,213.068c2.742-2.687-1.496-6.548-5.051-5.426c-3.553,1.123,0.467-4.303-6.174-4.303c0.012,8.044-7.857-3.554-8.605,2.993c-0.748,6.548-5.002,3.368-3.998,6.735c1.004,3.367-3.537,2.613-4.234,6.547c-1.369,7.746-8.23-0.403-7.67,4.756c0.563,5.159-6.547,12.269-5.238,15.075s1.871,5.217-2.434,4.76c-4.301-0.457-4.301,9.271-10.85,4.588c-3.801-2.719-1.871,5.619-10.477-0.929c-3.461,6.501-7.998,3.971-8.418,7.296c-0.656,5.168-3.813,1.871-4.117,5.8c-0.184,2.38-8.105,3.771-8.605,6.459c10.477-1.221,22.967-2.854,28.549-3.633c16.352-2.078,55.264-9.374,80.988-15.922c0-1.871-0.467-2.9-1.029-4.958c-0.561-2.058-5.24,0.561-6.453,0.655c-1.217,0.094-3.109-1.87-4.117-3.209c-1.332-1.772,3.91,1.655,5.051-0.439c0.842-1.543-2.482-1.413-3.275-2.338c-1.775-2.082,2.504-1.801,2.525-3.742c0.025-1.941-2.43-2.339-3.74-2.9c-1.309-0.562-1.309-2.526,0.656-1.216c1.963,1.31,0.676-2.854,1.496-4.397c0.816-1.543-3.182,0.281-4.771-1.777s-9.26-3.741-7.951-5.145C669.715,221.486,667.936,217.558,672.52,213.068z"/>

				<path id="map_47" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M69.878,61.296c2.806-0.561,3.139,2.481,2.385,4.069c-2.666,5.613,3.558,10.476,8.418,8.98c7.296-2.245,13.022,5.782,23.432,3.55c12.628-2.708,36.902,4.167,40.55,5.009c1.684-4.209-0.561-8.699,0-10.804c1.421-5.328,7.836-36.259,9.109-41.982c-29.142-6.304-52.563-12.624-67.385-17.417c-2.81-0.909,5.11,6.397,2.712,9.26c-6.033,7.203,2.807,4.256-1.403,12.348c-5.11,9.822-4.489,4.677-3.835,0.187c0.165-1.13-3.181-1.123-1.403-1.777c1.777-0.654,0.842-3.461-1.403-3.181c-2.245,0.281-1.5-1.861-4.677-2.712c-9.074-2.431-12.77-8.541-13.47-8.138c-6.174,3.556,1.761,10.347-1.216,17.492c-3.04,7.296,5.379,8.56,1.029,13.75c-2.499,2.982-2.349,5.828-3.087,7.857C64.827,57.087,67.072,61.858,69.878,61.296z"/>

				<path id="map_48" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M619.622,187.242c0,0-4.162-0.928-2.479,2.44s0.02,5.052,1.039,7.67c1.02,2.619-2.092,3.675,0,7.483c1.439,2.619-5.529,8.232-6.463,7.483c-1.783-1.427-4.303-0.749-3.93,5.051s-5.799,1.094-5.799,7.001s-1.311,9.462-4.678,8.901c-0.842,4.537,2.434,4.396,2.619,6.922c0.188,2.526,4.693,4.653,7.857,7.671c8.605,6.548,6.676-1.79,10.477,0.929c6.549,4.684,6.549-5.045,10.85-4.588c4.305,0.457,3.742-1.954,2.434-4.76s5.801-9.916,5.238-15.075c-0.561-5.159,6.301,2.99,7.67-4.756c0.697-3.935,5.238-3.18,4.234-6.547c-1.004-3.368,3.25-0.188,3.998-6.735c0.748-6.547,8.617,5.051,8.605-2.993c-0.004-3.372-2.059-2.994-5.611-4.116c-3.555-1.122-4.678,3.368-8.047,2.62c-3.367-0.748,0.563,3.18-3.367,2.619c-3.928-0.561-6.359,6.174-6.359,6.174l-1.887-9.813l-13.455,2.518L619.622,187.242z"/>

				<path id="map_49" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M474.258,164.987c2.521,2.271,5.191,2.104,5.471,4.35l36.949-2.666c-0.188-3.742,0.563-10.477-2.99-14.031c-3.555-3.554,2.803-7.109,1.309-10.477c-1.496-3.368,4.49-6.548,2.432-8.793c-2.057-2.245,1.871-9.541,0-10.29c-1.871-0.749-2.807,8.98-6.922,6.548c-3.344-1.976,6.527-9.386,5.227-13.199c-0.299-0.88-1.193-1.568-2.982-1.955c-5.172-1.115,0.938-6.548-2.992-6.548s-4.117-3.988-8.418-3.929c-13.658,0.188-4.303-3.555-19.238-4.303c-5.873-0.294-4.336-3.181-6.395-4.677c-2.059-1.497-2.992,2.058-5.799,0c-2.809-2.058,3.182-4.49,2.059-6.548c-1.123-2.057-11.973,8.98-15.809,5.098c-4.023,2.104-2.525,5.94-1.592,9.308c0.938,3.368-8.605,6.922-5.613,12.534c2.994,5.613,0.75,2.245,0.188,7.483c-0.561,5.238-0.186,9.354,5.801,10.664c5.986,1.31,3.93,7.296,11.225,8.793c7.297,1.497,1.68,7.886,3.742,9.448C476.456,156.755,467.663,159.047,474.258,164.987z"/>

				<path id="map_50" stroke-width="1" fill="#EBECED" stroke="#FFFFFF" d="M231.518,189.366c20.599,2.225,48.105,4.836,68.472,6.5c0.339-5.056,1.284-18.564,2.451-35.384c0.771-11.122,1.639-23.69,2.493-36.221c-12.316-0.689-75.614-7.542-89.832-10.536l-1.354,9.012l-6.737,44.833l-2.76,18.369C208.141,186.697,218.433,187.954,231.518,189.366z"/>
			</g><!--regions-->

			<g id="lakes">
				<path stroke-width="1" d="M575.799,173.967c0,1.684,8.605,2.994,11.973,3.929s6.734-2.432,9.729-2.432c2.99,0,15.715-10.851,17.773-11.973s6.547-5.612,8.793-6.735c2.244-1.123,10.287-6.922,8.697-11.88c-1.498,0.281-16.836,4.879-17.68,6.641c-2.057,4.303-12.439-5.051-18.895,9.167c-1.971,4.343-5.457,2.613-5.988,4.116c-2.244,6.361-3.365,1.123-8.604,3.554C580.663,168.726,575.799,172.283,575.799,173.967z M580.661,162.555c7.857,1.684,10.664-2.058,5.988-7.016C583.563,155.54,577.104,156.195,580.661,162.555z M645.393,132.248c6.924,1.684,6.549-2.994,9.729-1.31c3.18,1.684,7.482-1.683,6.361-4.303c-1.125-2.619,7.482-2.058,3.555-4.303c-3.93-2.245,8.045-8.98-5.146-7.389c-1.68,0.299-5.33,2.658-4.49,4.209c2.105,3.881-6.08,4.116-7.109,1.496c-1.027-2.619-15.768,5.022-18.896,7.016c-11.598,7.39-8.324,15.06,0,10.944C629.866,136.55,638.471,130.564,645.393,132.248z M466.729,81.548c-2.246,5.613-12.596,9.972-10.57,12.02c3.836,3.882,14.686-7.155,15.809-5.098c1.123,2.058-4.867,4.49-2.059,6.548c2.807,2.058,3.74-1.497,5.799,0c5.426-6.845,8.607,0,13.471-5.051c3.508-3.641,11.146-11.377,15.529-13.657c4.383-2.28,4.303,2.432,1.871,2.994c-2.434,0.561-7.857,2.993-5.426,7.296c2.43,4.303,4.693-1.92,6.842,0.562c5.506,6.36,8.125,1.012,13.408,6.735c3.326,3.602,4.07-3.368,7.813-3.929c3.74-0.561,6.359,0.748,11.785-3.368c3.936-2.985,5.986,8.231,10.289,3.555c-2.244,0.749-3.787-4.8-1.59-5.519c3.469-1.135-4.904-3.16-3.18-5.893c3.834-6.081-5.895-7.577-3.836-11.599c2.057-4.022-2.15-3.648-4.303-2.339s-9.916,3.461-14.219-9.915c-1.859-5.778-10.758-0.936-13.377-2.807s-7.109-2.619-9.914-2.338c-2.809,0.281,1.215,2.619,3.086,2.338c1.871-0.281,5.518,1.871,2.432,1.59c-3.086-0.28-6.643,4.923-8.699,4.49c-1.777-0.375,2.9-3.742,0.842-4.864c-2.057-1.123-3.928,4.022-4.115,5.799s-2.059,2.806-2.152,0.842s-5.145,1.029-4.678,3.461c0.471,2.432-3.365,3.929-5.799,5.707C480.01,75,468.973,75.936,466.729,81.548z M497.223,64.898c0.936,1.31-6.361,7.857-8.607,6.361C487.059,70.221,496.288,63.588,497.223,64.898z M553.163,97.701c-2.246-2.369-4.49,2.93-6.922,1.059c-2.434-1.871-9.73-1.123-10.479,2.058c-0.746,3.181-8.418,1.123-8.793,4.303c-0.373,3.181-2.619,2.806-4.115-0.562c-1.496-3.367-4.305,7.857-7.121,11.87c1.301,3.813-8.57,11.223-5.227,13.199c4.115,2.432,5.051-7.297,6.922-6.548c1.871,0.749-2.057,8.045,0,10.29c2.059,2.245-3.928,5.425-2.432,8.793c1.494,3.367-4.863,6.922-1.309,10.477c3.553,3.554,2.803,10.29,2.99,14.031s3.371,11.973,5.428,13.47c2.057,1.497,6.174,1.122,8.98-2.245c2.805-3.368,9.355-14.593,5.051-23.011c-4.305-8.419-1.873-13.47-4.865-16.837c-2.992-3.368,2.994-6.361,2.244-11.038s2.809-3.555,2.621-6.361s3.555-6.174,4.303-1.684c0.748,4.49,3.742,1.871,3.18-1.497c-0.561-3.367,0.75-5.799,3.18-6.173c2.434-0.375,0-5.613,1.871-7.484s3.93-0.749,4.678,0.187c0.75,0.936,6.174-0.748,5.613,2.432c-0.563,3.181,11.746,0.847,9.914,5.613c-2.805,7.296,4.865,11.038,0.375,16.276c-4.49,5.238,0.936,2.993-3.367,6.256c-4.303,3.263-1.123,3.659,1.496,4.033s2.994-6.735,6.549-5.051c3.553,1.684,5.426-8.231,6.547-1.123c1.123,7.109,6.174,10.477,6.174,17.493c3.459-1.59,12.254-7.857,7.482-16.276c-2.125-3.749-0.369-9.464,1.498-12.909c5.424-10.009-2.059-5.799-3.65-11.974c-0.826-3.213,5.707,0,7.203,4.022s2.713,0.187,5.426,2.806c2.713,2.62,4.068,3.068,6.455,2.432c7.016-1.871,0.996-9.298,0.094-13.283c-1.592-7.016-6.174-0.842-9.637-9.354c-2.027-4.99-16.555-0.187-20.951-2.899c-4.398-2.712-6.641,2.245-19.832-0.094c-2.688-0.476-0.563,2.62-1.404,3.742C559.333,98.706,555.407,100.07,553.163,97.701z M563.262,95.018c1.684,1.31,11.787,2.208,13.471,1.666s3.555-2.6,4.678-0.542s6.361-2.62,7.857,1.496s-0.002,7.483-3.555,5.613c-3.553-1.871-18.709-5.425-22.451-4.677C561.979,98.83,561.579,93.708,563.262,95.018z"/>
			</g>
			<g id="text-abb">
				<text id="map_1" transform="matrix(1 0 0 1 540 349)" font-family="'Arial'" font-size="16">AL</text>
				<text id="map_2" transform="matrix(1 0 0 1 73 391)" font-family="'Arial'" font-size="16">AK</text>
				<text id="map_3" transform="matrix(1 0 0 1 166 311)" font-family="'Arial'" font-size="16">AZ</text>
				<text id="map_4" transform="matrix(1 0 0 1 451 318)" font-family="'Arial'" font-size="16">AR</text>
				<text id="map_5" transform="matrix(1 0 0 1 73 270)" font-family="'Arial'" font-size="16">CA</text>
				<text id="map_6" transform="matrix(1 0 0 1 261 238)" font-family="'Arial'" font-size="16">CO</text>
				<text id="map_7" transform="matrix(1 0 0 1 736 189)" font-family="'Arial'" font-size="14">CT</text>
				<text id="map_8" transform="matrix(1 0 0 1 720 241)" font-family="'Arial'" font-size="14">DE</text>
				<text id="map_9" transform="matrix(1 0 0 1 635 427)" font-family="'Arial'" font-size="16">FL</text>
				<text id="map_10" transform="matrix(1 0 0 1 590 346)" font-family="'Arial'" font-size="16">GA</text>
				<text id="map_11" transform="matrix(1 0 0 1 280 477)" font-family="'Arial'" font-size="14">HI</text>
				<text id="map_12" transform="matrix(1 0 0 1 163 139)" font-family="'Arial'" font-size="16">ID</text>
				<text id="map_13" transform="matrix(1 0 0 1 498 219)" font-family="'Arial'" font-size="16">IL</text>
				<text id="map_14" transform="matrix(1 0 0 1 536 218)" font-family="'Arial'" font-size="16">IN</text>
				<text id="map_15" transform="matrix(1 0 0 1 433 185)" font-family="'Arial'" font-size="16">IA</text>
				<text id="map_16" transform="matrix(1 0 0 1 366 252)" font-family="'Arial'" font-size="16">KS</text>
				<text id="map_17" transform="matrix(1 0 0 1 553 261)" font-family="'Arial'" font-size="16">KY</text>
				<text id="map_18" transform="matrix(1 0 0 1 454 390)" font-family="'Arial'" font-size="16">LA</text>
				<text id="map_19" transform="matrix(1 0 0 1 733 77)" font-family="'Arial'" font-size="16">ME</text>
				<text id="map_20" transform="matrix(1 0 0 1 723 267)" font-family="'Arial'" font-size="14">MD</text>
				<text id="map_21" transform="matrix(1 0 0 1 755 119)" font-family="'Arial'" font-size="14">MA</text>
				<text id="map_22" transform="matrix(1 0 0 1 548 158)" font-family="'Arial'" font-size="16">MI</text>
				<text id="map_23" transform="matrix(1 0 0 1 413 121)" font-family="'Arial'" font-size="16">MN</text>
				<text id="map_24" transform="matrix(1 0 0 1 492 354)" font-family="'Arial'" font-size="16">MS</text>
				<text id="map_25" transform="matrix(1 0 0 1 444 252)" font-family="'Arial'" font-size="16">MO</text>
				<text id="map_26" transform="matrix(1 0 0 1 229 90)" font-family="'Arial'" font-size="16">MT</text>
				<text id="map_27" transform="matrix(1 0 0 1 348 196)" font-family="'Arial'" font-size="16">NE</text>
				<text id="map_28" transform="matrix(1 0 0 1 110 208)" font-family="'Arial'" font-size="16">NV</text>
				<text id="map_29" transform="matrix(1 0 0 1 693 69)" font-family="'Arial'" font-size="14">NH</text>
				<text id="map_30" transform="matrix(1 0 0 1 725 215)" font-family="'Arial'" font-size="14">NJ</text>
				<text id="map_31" transform="matrix(1 0 0 1 246 321)" font-family="'Arial'" font-size="16">NM</text>
				<text id="map_32" transform="matrix(1 0 0 1 668 140)" font-family="'Arial'" font-size="16">NY</text>
				<text id="map_33" transform="matrix(1 0 0 1 643 281)" font-family="'Arial'" font-size="16">NC</text>
				<text id="map_34" transform="matrix(1 0 0 1 344 89)" font-family="'Arial'" font-size="16">ND</text>
				<text id="map_35" transform="matrix(1 0 0 1 574 206)" font-family="'Arial'" font-size="16">OH</text>
				<text id="map_36" transform="matrix(1 0 0 1 379 307)" font-family="'Arial'" font-size="16">OK</text>
				<text id="map_37" transform="matrix(1 0 0 1 82 117)" font-family="'Arial'" font-size="16">OR</text>
				<text id="map_38" transform="matrix(1 0 0 1 642 182)" font-family="'Arial'" font-size="16">PA</text>
				<text id="map_39" transform="matrix(1 0 0 1 755 163)" font-family="'Arial'" font-size="14">RI</text>
				<text id="map_40" transform="matrix(1 0 0 1 626 315)" font-family="'Arial'" font-size="16">SC</text>
				<text id="map_41" transform="matrix(1 0 0 1 343 141)" font-family="'Arial'" font-size="16">SD</text>
				<text id="map_42" transform="matrix(1 0 0 1 536 292)" font-family="'Arial'" font-size="16">TN</text>
				<text id="map_43" transform="matrix(1 0 0 1 352 383)" font-family="'Arial'" font-size="16">TX</text>
				<text id="map_44" transform="matrix(1 0 0 1 182 225)" font-family="'Arial'" font-size="16">UT</text>
				<text id="map_45" transform="matrix(1 0 0 1 664 82)" font-family="'Arial'" font-size="14">VT</text>
				<text id="map_46" transform="matrix(1 0 0 1 644 244)" font-family="'Arial'" font-size="16">VA</text>
				<text id="map_47" transform="matrix(1 0 0 1 95 60)" font-family="'Arial'" font-size="16">WA</text>
				<text id="map_48" transform="matrix(1 0 0 1 606 235)" font-family="'Arial'" font-size="16">WV</text>
				<text id="map_49" transform="matrix(1 0 0 1 479 142)" font-family="'Arial'" font-size="16">WI</text>
				<text id="map_50" transform="matrix(1 0 0 1 242 162)" font-family="'Arial'" font-size="16">WY</text>
			</g>

		</svg>
	</div>
                        
                        
                        
                   <!-- </div> -->
                       
				</div><!-- MAP MODULE  ENDS-->
                
                
</div><!-- MAIN MIDDLE SECTION  ENDS-->


                

                
                <!-- RIGHT AD SECTION -->
				<div class="right-section-ad">
                
                   <div class="padding-no ad-right-top">
                
					<div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query1 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res1 = mysql_query($home_righttop_query1);                               
								$home_righttop1 = mysql_fetch_array($home_righttop_ad_res1);
								 if($home_righttop1['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop1['image'].'"></a>';
                                } else { 
								$home_righttop_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='1' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>    
                        </a>
                    </div>	
					
					<div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query2 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='2' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res2 = mysql_query($home_righttop_query2);
								$home_righttop2 = mysql_fetch_array($home_righttop_ad_res2);
                                 if($home_righttop2['edate'] >= $current_date)
                                {
                                
                                echo '<a href="' . $home_righttop2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop2['image'].'"></a>';
                                } else { 
								$home_righttop_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='2' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>    
                     
                        </a>
                    </div>	
                    
                    <div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query3 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='3' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res3 = mysql_query($home_righttop_query3);
								$home_righttop3 = mysql_fetch_array($home_righttop_ad_res3);
                                 if($home_righttop3['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop3['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop3['image'].'"></a>';
                                } else { 
								$home_righttop_query3 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='3' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                         
                        </a>
                    </div>	
					
					<div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query4 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='4' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res4 = mysql_query($home_righttop_query4);
								$home_righttop4 = mysql_fetch_array($home_righttop_ad_res4);
                                 if($home_righttop4['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop4['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop4['image'].'"></a>';
                                } else { 
								$home_righttop_query4 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='4' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                    
                        </a>
                    </div>	
                    
                    <div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query5 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='5' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res5 = mysql_query($home_righttop_query5);
								$home_righttop5 = mysql_fetch_array($home_righttop_ad_res5);
                                 if($home_righttop5['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop5['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop5['image'].'"></a>';
                                } else { 
								$home_righttop_query5 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='5' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                      
                        </a>
                    </div>	
					
					<div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query6 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='6' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res6 = mysql_query($home_righttop_query6);
                                $home_righttop6 = mysql_fetch_array($home_righttop_ad_res6);								
                                 if($home_righttop6['edate'] >= $current_date)
                                {

                                echo '<a href="' . $home_righttop6['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop6['image'].'"></a>';
                                } else { 
								$home_righttop_query6 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='6' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                        
                        </a>
                    </div>	
                    
                    <div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query7 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='7' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res7 = mysql_query($home_righttop_query7);
								$home_righttop7 = mysql_fetch_array($home_righttop_ad_res7);
                                 if($home_righttop7['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop7['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop7['image'].'"></a>';
                                } else {
								$home_righttop_query7 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='7' and edate < '".$current_date."' ");  
                                ?>		                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                      
                        </a>
                    </div>	
                    
                    <div class="advertise-1">
                        <a href="#" >
							<?php                                    
                                $home_righttop_query8 = "select * from us_ads where ad_position='Home-Right-Top-8' and ad_position_no='8' and status='Active' order by id desc limit 1";
                                $home_righttop_ad_res8 = mysql_query($home_righttop_query8);
								$home_righttop8 = mysql_fetch_array($home_righttop_ad_res8);
                                 if($home_righttop8['edate'] >= $current_date)
                                {                                
                                echo '<a href="' . $home_righttop8['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_righttop8['image'].'"></a>';
                                } else { 
								$home_righttop_query8 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Top-8' and ad_position_no='8' and edate < '".$current_date."' "); 
                                ?>		
                                
                                <img src="img/home_right_top.jpg">
                            <?php } ?>                    
                        </a>
                    </div>	
                 </div><!-- RIGHT AD SECTION ENDS -->   
                 
                 
<!-- EVENTS SECTION -->                 
                     <div class="events col-md-12 padding-no">
                        
                            <div class="head-title">
                                <h3>National Events</h3>
                            </div>
        
                              <div class="cd-tabs">
                                  <nav>
                                      <ul class="cd-tabs-navigation">
                                          <li><a data-content="cultural" class="selected" href="#0">Cultural</a></li>
                                          <li><a data-content="relegious" href="#0">Religious</a></li>                                          
                                      </ul> <!-- cd-tabs-navigation -->
                                  </nav>
                                  
                                  <ul class="cd-tabs-content cd-tabs-content-2">
                                      <li data-content="cultural" class="selected">
                                          <div class="content-tab">                                             
											<?php
												$query_Nation_evnts_Cul="select * from national_events where category='Cultural' and edate>'".$current_date."' and status='Active' order by sdate limit 5";																
												$result_Events_cul=mysql_query($query_Nation_evnts_Cul);                                                
												if(mysql_num_rows($result_Events_cul) > 0) {
												while($rs_event1=mysql_fetch_array($result_Events_cul))
												{?>   
                                                <p><a href="national_events.php?ViewId=Cultural"><?php echo date("d M ",strtotime($rs_event1['date'])); ?><span>&nbsp; <?php echo ucwords($rs_event1['title']);?></span></a></p>
                                                <?php } } else {  ?>
                                                <p><h4>No Data Found.</h4></p>
                                                <?php } ?>
                                              
                                          </div>    
                                          <a href="national_events.php?ViewId=Cultural" class="read-btn-tab">View more</a>
                                      </li>
                                      
                                      <li data-content="relegious">
                                      <div class="content-tab">
                                             
                                             <?php
												$query_Nation_evnts_Reg="select * from national_events where category='Religious' and edate>'".$current_date."' and status='Active' order by sdate limit 5";																
												$result_Events_Reg=mysql_query($query_Nation_evnts_Reg);                                                
												if(mysql_num_rows($result_Events_Reg) > 0) {
												while($rs_event2=mysql_fetch_array($result_Events_Reg))
												{?>   
                                                <p><a href="national_events.php?ViewId=Religious"><?php echo date("d M ",strtotime($rs_event2['date'])); ?><span>&nbsp; <?php echo ucwords($rs_event2['title']);?></span></a></p>
                                                <?php } } else {  ?>
                                                <p><h4>No Data Found.</h4></p>
                                                <?php } ?>
                                          </div>    
                                          <a href="national_events.php?ViewId=Religious" class="read-btn-tab">View more</a>
                                      </li>
                                      
                                      
                                      
                                      
                                      
                                  </ul> <!-- cd-tabs-content ends -->
                                  
                              </div> <!-- cd-tabs ends-->
    
                </div><!-- EVENTS ENDS -->
                    
            </div><!-- RIGHT AD AND EVENTS SECTION ENDS -->
                 
                 
   <div class="btn-module col-md-8">
           
           <!-- BUTTON COLUMN FIRST -->
           		<div class="col-md-4 full-wid">
                    <div class="btn-1"><a href="temples.php">Famous Temples<br> rated by NRI's</a></div>
                    <div class="btn-1"><a href="restaurants.php">Famous Restaurants<br> rated by NRI's</a></div>
                </div>
          <!-- BUTTON COLUMN SECOND -->
           		<div class="col-md-4 full-wid">
                	<div class="btn-round-wrap">
                      	<div class="btn-round"><a href="#" data-toggle="modal" data-target="#free_post">Create<br><span>Free Post</span></a></div>
                        <div class="btn-round-red"><a id="premium_post" href="#" data-toggle="modal" data-target="#premium_post">Create<br><span>Premium Post</span></a></div>
                    </div>    
                </div>
          <!-- BUTTON COLUMN THIRD -->
           		<div class="col-md-4 full-wid">
                    <div class="btn-1"><a href="casinos.php">Famous Casinos<br> rated by NRI's</a></div>
                    <div class="btn-1"><a href="pubs.php">Famous Pubs/Bars<br> rated by NRI's</a></div>
                </div>      
                      
               
           </div> <!-- btn-module ENDS -->
                
                                   
    
    
    
    
     <!-- Modal  Free Post  -->
  <div class="modal fade" id="free_post" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Free Post</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
  <!-- Modal  Free Post  End -->
  
  
  
   <!-- Modal  Premium Post  -->
  <div class="modal fade" id="premium_post" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Premium Post</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal  Premium Post  End -->  
    
    
               
               
                <!-- SECTION 2 NEW -->
                <div class="section-new-2">
                
                <!-- RIGHT AD SECTION -->
                <div class="left-ad">
                    
                    
                           <div class="padding-no">
                        
                                <div class="advert-big">
                                    <a href="#" >
                                          <?php                                    
                                    $home_left_query1 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res1 = mysql_query($home_left_query1);
									$home_left1 = mysql_fetch_array($home_left_ad_res1);
                                    if($home_left1['edate'] >= $current_date)
                                    {
                                  		 
                                   	 	echo '<a href="' . $home_left1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left1['image'].'"></a>';
                                    } else {
									 $home_left1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		
                                       <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                        

                                          <?php } ?>        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_left_query2 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='2' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res2 = mysql_query($home_left_query2);
									$home_left2 = mysql_fetch_array($home_left_ad_res2);
                                     if($home_left2['edate'] >= $current_date)
                                    {
                                  		 
                                   	 	echo '<a href="' . $home_left2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left2['image'].'"></a>';
                                    } else {
							 $home_left2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='2' and edate < '".$current_date."' "); 
                                    ?>		
                                        
                                        <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>                     
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                       <?php                                    
                                    $home_left_query3 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='3' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res3 = mysql_query($home_left_query3);
									$home_left3 = mysql_fetch_array($home_left_ad_res3);
                                    if($home_left3['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_left3['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left3['image'].'"></a>';
                                    } else { 
									 $home_left3 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='3' and edate < '".$current_date."' ");   ?>		
                                        
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>               
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                       <?php                                    
                                    $home_left_query4 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='4' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res4 = mysql_query($home_left_query4);
									$home_left4 = mysql_fetch_array($home_left_ad_res4);
                                    if($home_left4['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_left4['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left4['image'].'"></a>';
                                    } else { 
									$home_left4 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='4' and edate < '".$current_date."' ");   ?>			
                                        
                                        <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>                 
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                      <?php                                    
                                    $home_left_query5 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='5' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res5 = mysql_query($home_left_query5);
									$home_left5 = mysql_fetch_array($home_left_ad_res5);
                                    if($home_left5['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_left5['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left5['image'].'"></a>';
                                    } else { 
									$home_left5 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='5' and edate < '".$current_date."' ");   ?>			   
                                       <img src="images/ads1.gif" height="96" width="192" style="height:96px; width="192px;">
                                          <?php } ?>                    
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                       <?php                                    
                                    $home_left_query6 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='6' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res6 = mysql_query($home_left_query6);
									 $home_left6 = mysql_fetch_array($home_left_ad_res6);
                                     if($home_left6['edate'] >= $current_date)
                                    {
                                  		
                                   	 	echo '<a href="' . $home_left6['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left6['image'].'"></a>';
                                    } else { 
                                    $home_left6 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='6' and edate < '".$current_date."' ");   ?>			   
                                       <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>                        
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_left_query7 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='7' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res7 = mysql_query($home_left_query7);
									 $home_left7 = mysql_fetch_array($home_left_ad_res7);
                                    if($home_left7['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_left7['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left7['image'].'"></a>';
                                    } else { 
                                      $home_left7 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='7' and edate < '".$current_date."' ");   ?>			   
                                       <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>                                
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_left_query8 = "select * from us_ads where ad_position='Home-Left-Bottom' and ad_position_no='8' and status='Active' order by id desc limit 1";
                                    $home_left_ad_res8 = mysql_query($home_left_query8);
									$home_left8 = mysql_fetch_array($home_left_ad_res8);
                                    if($home_left8['edate'] >= $current_date)
                                    {                                  		 
                                   	 	echo '<a href="' . $home_left8['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left8['image'].'"></a>';
                                    } else { 
                                     $home_left8 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Left-Bottom' and ad_position_no='8' and edate < '".$current_date."' ");   ?>			   
                                       <img src="images/ads1.gif" height="96" width="192" style="height:96px;width="192px;">
                                          <?php } ?>                             
                                    </a>
                                </div>
                            
                           </div> 
                            
               </div><!-- RIGHT AD SECTION ENDS -->   

                    
              
                    
               <div class="middle-column-section-2">
                    
                                <div class="events col-md-12 padding-no">
                                    
                                        <div class="head-title">
                                            <h3>National Training &amp; Placement</h3>
                                        </div>
                    
                                          <div class="cd-tabs">
                                              <nav>
                                                  <ul class="cd-tabs-navigation">
                                                   <?php 
															$query_cat="select * from national_batch_cat order by name";
															$result_cat = mysql_query($query_cat);
															$edudata = 1;
															while($rsfs = mysql_fetch_array($result_cat))
															{ 
															if($edudata==1) { ?>
                                                            <li><a data-content="<?php echo $rsfs['id'] ; ?>" class="selected" href=""><?php echo $rsfs['name'] ; ?></a></li>
                                                            <?php } else { ?>
		                                                      <li><a data-content="<?php echo $rsfs['id'] ; ?>" href=""><?php echo $rsfs['name'] ; ?></a></li>                                                            
                                                            <?php } $edudata++ ; } ?>
                                                      <!--<li><a data-content="sap" class="selected" href="">SAP</a></li>
                                                      <li><a data-content="php" href="">PHP</a></li>
                                                       <li><a data-content="ba-qa" href="">BA/QA Training</a></li>
                                                      <li><a data-content="mysql" href="">My SQL</a></li>-->
                                                  </ul> <!-- cd-tabs-navigation -->
                                              </nav>
                                              
                                              <ul class="cd-tabs-content" style="min-height:161px;">
                                              
                                              <?php
													$query_cat="select * from national_batch_cat order by name";
													$result_cat = mysql_query($query_cat);													
													$edudata = 1;
													while($rsfs = mysql_fetch_array($result_cat))
													{  
														if($edudata==1) { ?>                                              
                                                  
                                                  <li data-content="<?php echo $rsfs['id'] ; ?>" class="selected">
                                                    <?php } else { ?>
                                                     <li data-content="<?php echo $rsfs['id'] ; ?>">
                                                     <?php } ?>
                                                      <div class="content-tab">
                                                      	
                                                        <?php
																$query_Nation_tran_SAP="select  * from  natioal_batches where expdate>='".$current_date."' and  category = '".$rsfs['id']."' and status='Active' order by date desc limit 5";								
								
																$result_SAP=mysql_query($query_Nation_tran_SAP);                                                
																if(mysql_num_rows($result_SAP) > 0) {
																while($rs_SAP=mysql_fetch_array($result_SAP))
																{?>												
                                                      
                                                          <p><a href="national_training.php?ViewId=<?php echo $rsfs['id'] ; ?>"><?php echo date("d M ",strtotime($rs_SAP['date'])); ?><span>&nbsp; <?php echo ucwords($rs_SAP['title']);?></span></a></p>
                                                        <?php } } else {  ?>
                                                        <p><h4>No Data Found.</h4></p>
                                                        <?php } ?>
                                                      </div>    
                                                      <a href="national_training.php?ViewId=<?php echo $rsfs['id'] ; ?>" class="read-btn-tab">View more</a>
                                                  </li>
                                                <?php  $edudata++ ; } ?>  
                                                  
                                               
                                                  
                                              </ul> <!-- cd-tabs-content ends -->
                                              
                                          </div> <!-- cd-tabs ends-->
                
                            </div><!-- EVENTS ENDS -->
            
            <!-- DESI MARKET SECTION -->                
                            <div class="market col-md-6">
                                  <div class="head-title-w">
                                      <h3>Desi Market</h3>
                                  </div>
                                    <ul>
										<?php
                                        $query_groceries="select  * from  fam_groceries order by id desc limit 5";																
                                        $result_Groceries=mysql_query($query_groceries);                                                
                                        if(mysql_num_rows($result_Groceries) > 0) {
                                        while($fs_gro=mysql_fetch_array($result_Groceries))
                                        {?>		
                                        <li><a href="grocery_view.php?ViewId=<?php echo md5($fs_gro['id']);?>"><?php echo ucwords($fs_gro['name']);?></a></li>
                                        <?php } } else {  ?>
                                                        <li><h4>No Data Found.</h4></li>
                                                        <?php } ?>
                                        
                                    </ul>
                                    <a href="#" class="read-btn" data-toggle="modal" data-target="#desi_market">View more</a>
                            </div>
              
              
              
              
                                                  
                                                  <!-- Modal -->
                                      <div class="modal fade" id="desi_market" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Desi Market</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p style="color:#000000;font-size:14px;">Select your state at the top map to check more data.</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
              
              
              
              
              
              
              
              
              
              
              
                            
            <!-- NRI TALK SECTION -->                                            
                            <div class="nri-talk col-md-6">
                            	<div class="head-title-no-pad">
                                      <h3>National NRI's Talk</h3>
                                </div>
                                 <ul>
                                        <li><a href="#">Glover Park Market</a></li>
                                        <li><a href="#">Orient Foods</a></li>
                                        <li><a href="#">Spice Merchant</a></li>
                                        <li><a href="#">India House</a></li>
                                        <li><a href="#">Bombay Bazaar</a></li>
                                        <li><a href="#">Kassar Food & Gifts</a></li>
                                        
                                    </ul>    
                                      <a href="#" class="read-btn-b">View more</a>
                             </div>
                            
                            
                            
             <!-- 3 AD SECTION -->                                            
                            <div class="three-ad-wrap">
                                <div class="thr-ad">
                                	<a href="#">
									<?php      
									                              
                                    $home_bottom_query1 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res1 = mysql_query($home_bottom_query1);
									$home_btm1 = mysql_fetch_array($home_bottom_ad_res1);
                                    if($home_btm1['edate'] >= $current_date)
                                    {                                  		 
                                   	 	echo '<a href="' . $home_btm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm1['image'].'"><a/>';
                                    } else { 
							$home_bottom_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='1' and edate < '".$current_date."' ");
                                    ?>		
                                        
                                        <img src="images/ads1.gif" height="115" width="336" style="height:115px;" width="336px;">
                                          <?php } ?>
                                    </a>
                                </div>
                                
                                <div class="thr-ad">
                                	<a href="#">
									<?php                                    
                                    $home_bottom_query2 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='2' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res2 = mysql_query($home_bottom_query2);
									$home_btm2 = mysql_fetch_array($home_bottom_ad_res2);
                                    if($home_btm2['edate'] >= $current_date)
                                    {
                                  		 
                                   	 	echo '<a href="' . $home_btm2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm2['image'].'"></a>';
                                    } else {
									$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='2' and edate < '".$current_date."' "); 
                                    ?>		
                                        
                                       <img src="images/ads1.gif" height="115" width="336" style="height:115px;" width="336px;">
                                          <?php } ?>
                                    </a>
                                </div>
                                
                                <div class="thr-ad">
                                	<a href="#">
									<?php                                    
                                    $home_bottom_query3 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='3' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res3 = mysql_query($home_bottom_query3);
									 $home_btm3 = mysql_fetch_array($home_bottom_ad_res3);
                                    if($home_btm3['edate'] >= $current_date)
                                    {
                                  		
                                   	 	echo '<a href="' . $home_btm3['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm3['image'].'"></a>';
                                    } else { 
							$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='3' and edate < '".$current_date."' "); 		
                                    ?>		
                                        
                                        <img src="images/ads1.gif" height="115" width="336" style="height:115px;" width="336px;">
                                          <?php } ?>
                                    </a>
                                </div>
                            </div>
                            
                            
                            
               <!-- 1 AD SECTION -->
                            <div class="single-ad">
                            	<?php                                    
                                    $home_bottom_query4 = "select * from us_ads where ad_position='Home-Bottom-Large' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res4 = mysql_query($home_bottom_query4);
									$home_btm4 = mysql_fetch_array($home_bottom_ad_res4);
                                     if($home_btm4['edate'] >= $current_date)
                                    {
                                  		 
										 echo '<a href="' . $home_btm4['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm4['image'].'"></a>';
                                   	 	
                                    } else {
								$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Large' and ad_position_no='1' and edate < '".$current_date."' "); 			 
                                    ?>		
                                        
                                        <img src="img/home_bottom2.jpg">
                                          <?php } ?>
                            </div><!-- 1 AD SECTION ENDS -->
                
                
                    </div><!-- MIDDLE SECTION ENDS -->
                    
                     <!-- LEFT AD SECTION -->
                    <div class="right-ad">
                    	<div class="col-md-12 padding-no">
                        
                                <div class="advert-big">
                                    <a href="#" >
                                       <?php                                    
                                    $home_right_query1 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res1 = mysql_query($home_right_query1);
									$home_right1 = mysql_fetch_array($home_right_ad_res1);
                                    if($home_right1['edate'] >= $current_date)
                                    {                                  		 
                                   	 	echo '<a href="' . $home_right1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right1['image'].'"></a>';
                                    } else {
							$home_right_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		
                                        
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>           
                                    </a>
                                </div>
                              
                              
                              
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_right_query2 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='2' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res2 = mysql_query($home_right_query2);
									$home_right2 = mysql_fetch_array($home_right_ad_res2);
                                    if($home_right2['edate'] >= $current_date)
                                    {                                  		 
                                   	 	echo '<a href="' . $home_right2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right2['image'].'"></a>';
                                    } else { 
                                   $home_right_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='2' and edate < '".$current_date."' "); 
                                    ?>		                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                
                                    </a>
                                </div>
                                
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_right_query3 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='3' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res3 = mysql_query($home_right_query3);
									 $home_right3 = mysql_fetch_array($home_right_ad_res3);
                                    if($home_right3['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_right3['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right3['image'].'"></a>';
                                    } else { 
                                    $home_right_query3 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='3' and edate < '".$current_date."' "); 
                                    ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>        
                                    </a>
                                </div>	
                                
                                <div class="advert-big">
                                    <a href="#" >
                                         <?php                                    
                                    $home_right_query4 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='4' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res4 = mysql_query($home_right_query4);
									$home_right4 = mysql_fetch_array($home_right_ad_res4);
                                    if($home_right4['edate'] >= $current_date)
                                    {
                                  		 
                                   	 	echo '<a href="' . $home_right4['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right4['image'].'"></a>';
                                    } else { 
                                     $home_right_query4 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='4' and edate < '".$current_date."' ");  ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                        
                                    </a>
                                </div>
                                
                                <div class="advert-big">
                                    <a href="#" >
                                         <?php                                    
                                    $home_right_query5 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='5' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res5 = mysql_query($home_right_query5);
									 $home_right5 = mysql_fetch_array($home_right_ad_res5);
                                     if($home_right5['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_right5['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right5['image'].'"></a>';
                                    } else { 
                                    $home_right_query5 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='5' and edate < '".$current_date."' ");  ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                         <?php                                    
                                    $home_right_query6 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='6' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res6 = mysql_query($home_right_query6);
									 $home_right6 = mysql_fetch_array($home_right_ad_res6);
                                     if($home_right6['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_right6['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right6['image'].'"></a>';
                                    } else { 
                                    $home_right_query6 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='6' and edate < '".$current_date."' ");  ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                        
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                         <?php                                    
                                    $home_right_query2 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='7' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res7 = mysql_query($home_right_query7);
									$home_right7 = mysql_fetch_array($home_right_ad_res7);
                                    if($home_right7['edate'] >= $current_date)
                                    {                                  		 
                                   	 	echo '<a href="' . $home_right7['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right7['image'].'"></a>';
                                    } else { 
                                     $home_right_query7 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='7' and edate < '".$current_date."' ");  ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <?php                                    
                                    $home_right_query2 = "select * from us_ads where ad_position='Home-Right-Bottom' and ad_position_no='8' and status='Active' order by id desc limit 1";
                                    $home_right_ad_res8 = mysql_query($home_right_query8);
									 $home_right8 = mysql_fetch_array($home_right_ad_res8);
                                    if($home_right8['edate'] >= $current_date)
                                    {                                  		
                                   	 	echo '<a href="' . $home_right8['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right8['image'].'"></a>';
                                    } else { 
                                    $home_right_query8 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Right-Bottom' and ad_position_no='8' and edate < '".$current_date."' ");  ?>	                                       
                                         <img src="images/ads1.gif" height="96" width="192" style="height:96px;" width="192px;">
                                          <?php } ?>                       
                                    </a>
                                </div>
                               
                           </div> 
                    </div><!-- LEFT AD SECTION ENDS-->
                    
                </div> <!--SECTION 2 ENDS -->
                 
                </div><!-- right-section-1 ENDS -->

</div><!-- End Section-1 -->

	 <?php include "config/footer.php" ; ?>
     <!--End footer -->

<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->

<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
            $('.wbiscroller').find('a').attr('target','_blank');
        },500);
		
		setInterval(function(){
			$.ajax({
				url : 'weather.php',
				async:false,
				success:function(data){
					$('#weather-widget').html(data);
				}
			});
		},2000);
    });
</script>
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->


<?php include "config/social.php" ;  ?>

</body>
</html>