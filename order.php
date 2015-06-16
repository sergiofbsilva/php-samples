<?php 
	echo "Customer: " . $_GET["customer"] . "\n";
	echo "Date: " . $_GET["date"] . "\n";
	echo "Order: " . file_get_contents("php://input") . "\n";
?>