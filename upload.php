<?php 
	$content = file_get_contents("php://input");
	$content = str_replace("data:image/png;base64,", "", $content);
	
  	$encodedData = str_replace(' ','+',$content);
  	$decodedData = base64_decode($encodedData);
  	$fname = uniqid("img") . ".png";
  	print $fname;
  	$handle = fopen($fname, "wb");
  	fwrite($handle, $decodedData);
  	fclose($handle);
?>