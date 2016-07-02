<?php error_reporting(0);
include"config/connection.php";

$title = $description = 'Carpool';
if ($_GET['type'] == 'interstate') {
    $title = 'Find Your Perfect Carpool | Interstate | NRIs';
    $description = "Look for commuters here who are already on the USA's biggest carpooling site. Find your perfect carpool to work or for any trip and save money on commuting!";
} elseif ($_GET['type'] == 'international') {
    $title = 'Share Your Journey With NRIs | International Carpool Ads- NRIs';
    $description = "NRIs connects car owners and co-travellers to share city-to-city journeys through the largest carpool classified services in the world.";
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head><base href="/">

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <meta name="description" content="<?php echo $description;?>">
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
        <style type="text/css">
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
        <style type="text/css">
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
        <?php include "config/menu.php"; ?>
        <div class="clearfix"></div>
        <?php include_once('stock_block.php'); ?>     

        <!-- Section-1 WRAP START-->	
        <div class="section-1-wrap" style="clear:both;">	
            <!-- Section-1 START-->	
            <div class="section-1">


                <!-- COLUMN LEFT -->	
                <?php include_once('home_common_left.php'); ?><!-- COLUMN LEFT ENDS -->	

                <!-- COLUMN MIDDLE -->	
                <div class="col-md-8 inner-middle-wrap">

                    <!-- FIRST TABLE -->
                    <div class="col-md-12" style="text-align:left;color:#000000;"> 

                        <div class="widget-temple">
                            <?php $state = $defaultState; ?>

                            <h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $defaultState; ?>" style="color:#0033FF;">Home</a> >> Carpool</h4>
                            <?php
                            if (isset($_SESSION['Nris_session'])) {
                                ?>

                                <a href="javascript:;" data-toggle="modal" data-target="#change_state" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a> 
                            <?php } else { ?> 
                                <a href="javascript:;"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif" alt=">"></a>
                            <?php } ?> 
                        </div>		


                        <form class="form-horizontal" role="form" method="get" action="" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="city_auto1" placeholder="Enter From City" style="width:100%;" tabindex="1" required/>
                                    <input type="hidden" name="City1" id="City1">
                                </div>

                                <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>">

                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="city_auto2" placeholder="Enter To City" style="width:100%;" tabindex="1" required/>
                                    <input type="hidden" name="City2" id="City2">
                                </div>

                                <button type="submit"  name="Submit" id="Submit" tabindex="28">Search</button>
                            </div>
                        </form>
                        <table align="center" >
                            <thead>
                                <tr>
                                    <th>From City</th>
                                    <th>To City</th>
                                    <th>Start Date</th>
                                    <th>Start Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $where = '';
                                if (isset($_GET['City1']) && $_GET['City1'] > 0 && isset($_GET['City2']) && $_GET['City2'] > 0) {
                                    $where = ' AND (carpool.from_city = "' . $_GET['City1'] . '" AND carpool.to_city = "' . $_GET['City2'] . '")';
                                }
                                if ($_GET['type'] == 'interstate') {
                                    //$where .= "AND c1.state_code = '$state' AND c2.state_code = '$state'";
                                }
                                $query1 = "SELECT carpool.*,c1.city as from_cityname,c2.city as to_cityname FROM carpool,cities c1, cities as c2
				WHERE type = '" . $_GET['type'] . "'
				AND c1.id = from_city AND c2.id = to_city $where";
                //echo $query1;
    
                                $result = mysql_query($query1);
                                if (mysql_numrows($result) > 0) {
                                    ?>

                                    <?php while ($data = mysql_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $siteUrlConstant;?>carpool_view?id=<?php echo md5($data['id']); ?>">
											<?php echo $data['from_cityname'].', '.$data['from_state']; ?>
										</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo $siteUrlConstant;?>carpool_view?id=<?php echo md5($data['id']); ?>">
											<?php echo $data['to_cityname'].', '.$data['to_state']; ?>
										</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo $siteUrlConstant;?>carpool_view?id=<?php echo md5($data['id']); ?>">
                                                    <?php echo $data['start_date']; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo $siteUrlConstant;?>carpool_view?id=<?php echo md5($data['id']); ?>">
                                                    <?php echo $data['start_time']; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                <?php } else { ?>
                                    <tr><td colspan="4">No data available</td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    
                    <br><br><br><br><br><br><br><br>
                    </div>
                    <!-- TOP BUTTONS ENDS-->


                </div><!-- COLUMN MIDDLE ENDS -->	






                <!-- COLUMN RIGHT -->	
                <?php include_once('home_common_right.php'); ?><!-- COLUMN RIGHT ENDS -->	








            </div><!-- Section-1 ENDS -->
        </div><!-- End Section-1 WRAP -->



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
                            $cnt = 0;
                            $qy_state_res = mysql_query("select state,state_code from states order by state");
                            while ($fs_state = mysql_fetch_array($qy_state_res)) {

                                if ($cnt % 3 == 0) {
                                    echo "<tr>";
                                }
                                $siteUrlConstant = $protocol . "://" .str_replace(' ','',$fs_state['state']).'.'.$_SERVER['SERVER_NAME'].'/';
                                ?>

                                <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
                                    <a href="<?php echo $siteUrlConstant;?>localcarpool_add?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color = 'red'" onMouseOut="this.style.color = 'black'">
                                        <?php
                                        if ($fs_state['state_code'] == $defaultState) {
                                            echo '<i class="fa fa-check"></i> ' . $fs_state['state'];
                                        } else {
                                            echo $fs_state['state'];
                                        }
                                        ?>
                                    </a>
                                </td>
                                <?php
                                if ($cnt % 3 == 0 && $cnt != 0) {
                                    echo "</tr>";
                                }
                                $cnt++;
                                if ($cnt == 3) {
                                    $cnt = 0;
                                }
                            }
                            ?>

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



<?php include "config/footer.php"; ?><!--End footer -->




        <div class="go-up"><i class="fa fa-chevron-up"></i></div>
        <script src="js/tab/jquery-2.1.1.js"></script>
        <script src="js/tab/main.js"></script> <!-- Resource jQuery -->


        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/html5.js"></script>
        <script src="js/custom.js"></script>
        <!-- End js -->

        <link rel="stylesheet" href="calender/jquery-ui.css">
        <script src="calender/jquery-1.10.2.js"></script>
        <script src="calender/jquery-ui.js"></script>

<?php $state = $defaultState; ?>
        <script>
                        $(function () {

                            var state = "<?php echo $state; ?>";

                            $("#city_auto1").autocomplete({
                                source: function (request, response) {
                                    $.getJSON("city_auto.php", {term: $('#city_auto1').val(), state: state}, response);
                                },
                                minLength: 1,
                                select: function (event, ui) {
                                    $('#City1').val(ui.item.id);
                                }
                            });
                            $("#city_auto2").autocomplete({
                                source: function (request, response) {
                                    $.getJSON("city_auto.php", {term: $('#city_auto2').val(), state: state}, response);
                                },
                                minLength: 1,
                                select: function (event, ui) {
                                    $('#City2').val(ui.item.id);
                                }
                            });

                            $('#city_auto1').keyup(function (e) {
                                if (e.keyCode == 8)
                                    $('#city_auto1, #City1').val('');
                            });
                            $('#city_auto2').keyup(function (e) {
                                if (e.keyCode == 8)
                                    $('#city_auto2, #City2').val('');
                            });

                        });
        </script>

<?php include "config/social.php"; ?>

    </body>
</html>