<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

	if(isset($_REQUEST)){
		$image_id = $_REQUEST["imageId"];
		$image = $_REQUEST["image"];
		$image = str_replace('data:image/png;base64,', '', $image);
		$image = str_replace(' ', '+', $image);
		$image = base64_decode($image);
		$path = "images/";
		$filePath = $path.$image_id.'.png';
		file_put_contents($filePath, $image);
		echo $filePath;
		
	}


?>