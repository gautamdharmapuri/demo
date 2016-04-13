<?php
  /* mysql_connect("localhost","root","");
   mysql_select_db("nris");*/
   
   
   mysql_connect("localhost","root","");
   mysql_select_db("angeldes_nris");
 
 if (!defined('SITE_BASE_URL')) {
	if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
	$site_url = $protocol . "://" .$_SERVER['SERVER_NAME'];
	if ($_SERVER['SERVER_NAME'] == 'localhost') {
		$site_url = $site_url. '/demo';
	}

	define('SITE_BASE_URL', $site_url);
	define('ADMIN_BASE_URL', $site_url.'/admin/');
}
if (!defined('BASE_PATH')) {
	DEFINE('BASE_PATH', $site_url);
}
   
?>
<script type="text/javascript">
		var site_url = '<?php echo SITE_BASE_URL.'/';?>';
		var admin_url = '<?php echo SITE_BASE_URL.'/admin/';?>';
	</script>