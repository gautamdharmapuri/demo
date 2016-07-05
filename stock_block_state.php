<div class="stock-scroll" style="width: 100%;background: #2eb1fd;float: left;color: #fff;text-align: center;">
	<script src="js/tab/jquery-2.1.1.js"></script>
<script src="widget/WBIHorizontalTicker2.js" type="text/javascript"></script>
<link rel="stylesheet" href="widget/WBITickerblue.css" type="text/css">
<script>
	
    var gainTicker = new WBIHorizontalTicker('gainers');
    gainTicker.start();
    var loserTick = new WBIHorizontalTicker('losers');
    loserTick.start();
	</script> <!-- End Scrolling Ticker Widget -->
</div>
<script type="text/javascript">
				jQuery(function(){
				jQuery(document).ready(function(){
        setTimeout(function(){
            jQuery('.wbiscroller').find('a').attr('href','javascript:;');
        },300);
    });
				});		
</script>