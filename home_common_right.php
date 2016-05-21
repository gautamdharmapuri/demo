<div class="col-md-2 inner-left">
<?php
						
						$query = "SELECT * FROM us_ads
									WHERE image != '' AND edate >= now() AND ad_position = 'Home-Right-Bottom'
									AND NOW() <= sdate + INTERVAL 30 DAY
									AND status = 'Active'
									ORDER BY ad_position_no asc LIMIT 10;";
								   $result = mysql_query($query);
								   $i=1;
								   if(mysql_numrows($result) > 0) {
								   while($rs=mysql_fetch_array($result)) {
			?>
		<div class="inner-left-ad-wrap">
			<a href="<?php echo ($rs['url'] != '') ? $rs['url'] : 'javascript:;';?>" target="_blank">
				<img src="admin/uploads/us_ads/<?php echo $rs['image'];?>" alt="<?php echo $rs['ad_title'];?>">                        
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