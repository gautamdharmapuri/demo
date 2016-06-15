<script src="widget/astrovisionjs.js"></script>
<link href="widget/astrovisioncss.css" rel="stylesheet">
<div id="astro_widget"><div id="astro_widget_content">
</div>
</div>
    <script>var widget = new avWidgetAstroCalendar('astro_widget');</script>

    <script src="widget/jquery.simpleWeather.min.js"></script>
    <script src="widget/moment.js"></script>
    <script src="widget/moment-timezone.js"></script>
    <script src="widget/jstz.min.js"></script>
    <script src="widget/jqIpLocation.js"></script>
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function () {
            setInterval(function () {
                jQuery.getJSON("http://www.telize.com/geoip?callback=?", function (data) {
                    bwea(data);
                });
            }, 10000);


            var bwea = function (pos) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
                }, function(){
                    loadWeather(pos.latitude + ',' + pos.longitude); //load weather using your lat/lng coordinates
                });

                function loadWeather(location, woeid) {
                    jQuery.simpleWeather({
                        location: location,
                        woeid: woeid,
                        unit: 'f',
                        success: function (weather) {
                            var url = weather.image;
                            var city = weather.city;
                            var region = weather.region;
                            var place = city + ", " + region;

                            var tz = jstz.determine();
                            var name = tz.name();

                            var d = new Date();
                            //                            var day = moment(d).tz(name).format('hh:mma z');
                            var day = moment(d).format('hh:mma z');

                            var n = '<div id="wrap" style="line-height: 31px; width: 144px; text-align: center; float: left; color: black; font-weight: bold;"><div id="temp" style="line-height: 31px; width: 48px; text-align: center; float: left; color: black; font-weight: bold; }">' + weather.temp + '&deg;' + 'F' + '</div><div id="place" style="float: left; height: 50%; width: 95px; font-size: 9px; text-align: center; line-height: 14px;">' + place + '</div><div id="time" style=" text-align: center; font-size: 11px; line-height: 14px; float: left; height: 50%; width: 95px;">' + day + '</div></div>';
                            var durl = 'images/daysky.JPG';
                            jQuery('#astro_widget').css({ "background": "url('" + durl + "')", "background-repeat": "no-repeat"});
                            jQuery('#astro_widget_content11').css({ "background": "url('" + url + "')", "background-repeat": "no-repeat", "background-size":"auto 147px"  });
                            jQuery('div').find('.place.ac.fa.grey.pt10.cp').remove('.place.ac.fa.grey.pt10.cp');
                            var l = jQuery('div').find('.haeder div#wrap').length;

                            if (l == 0) {                                
                                jQuery(n).appendTo('.haeder');
                            } else {
                                jQuery('.haeder div#wrap').replaceWith(n);
                            }
                        },
                        error: function (error) {
                            alert(error.message);
                        }
                    });
                }
            }
        });
    </script>