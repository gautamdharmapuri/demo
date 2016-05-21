<div class="col-md-2 inner-left">
<?php
						$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
						$query = "SELECT * FROM fam_advertisement
									WHERE image != '' AND edate >= now() AND ad_position = 'Left Side'
									AND NOW() <= sdate + INTERVAL 30 DAY
									AND state_code = '".$state."'
									AND status = 'Active'
									ORDER BY ad_position_no asc LIMIT 10;";
								   $result = mysql_query($query);
								   $i=1;
								   if(mysql_numrows($result) > 0) {
								   while($rs=mysql_fetch_array($result)) {
			?>
		<div class="inner-left-ad-wrap">
			<a href="<?php echo ($rs['url'] != '') ? $rs['url'] : 'javascript:;';?>" target="_blank">
				<img src="admin/uploads/myadimg/<?php echo $rs['image'];?>" alt="<?php echo $rs['ad_title'];?>">                        
			</a>
		</div>
		<?php } } else { ?>
						<div class="inner-left-ad-wrap">
						<a href="javascript:;">
							<img src="img/2_x_1-ad.jpg">
						</a>
					</div>
		<?php } ?>
</div>