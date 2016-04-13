<?php
	$size=$_GET['q'];
	
	if($size=='Home-Top-Small')
	{
		echo "Image Size : W : 331px  &nbsp;X&nbsp;  H : 100px";
		
	}
	
	
	if($size=='Home-Top-Large')
	{
			echo "Image Size : W : 581px  &nbsp;X&nbsp;  H : 100px";		
		
	}
	
	if($size=='Home-Top-Center-4')
	{
			echo "Image Size : W : 240px  &nbsp;X&nbsp;  H : 96px";		
		
	}
	
	if($size=='Home-Right-Top-8')
	{
		echo "Image Size : W : 165px  &nbsp;X&nbsp;  H : 30px";
		
	}	
	
	
	
	if($size=='Home-Left-Bottom' || $size=='Home-Right-Bottom')
	{
		echo "Image Size : W : 192px  &nbsp;X&nbsp;  H : 96px";
	}
	
	
	
	if($size=='Home-Bottom-Small')
	{
		echo "Image Size : W : 336px  &nbsp;X&nbsp;  H : 120px";
	}	
	
	if($size=='Home-Bottom-Large')
	{
		echo "Image Size : W : 960px  &nbsp;X&nbsp;  H : 120px";
	}	
	
	
	
	
?>
