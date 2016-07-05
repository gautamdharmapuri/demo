<div class="stock-scroll">
<script src="widget/WBIHorizontalTicker2.js" type="text/javascript"></script>
<script>
    var gainTicker = new WBIHorizontalTicker('gainers');
    gainTicker.start();
    var loserTick = new WBIHorizontalTicker('losers');
    loserTick.start();
	</script> <!-- End Scrolling Ticker Widget -->
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        setTimeout(function(){
            jQuery('.wbiscroller').find('a').attr('href','javascript:;');
        },300);
    });
</script>