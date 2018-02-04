<?php

	//$name= $_POST["name"];
	//$image = $_POST["image"]

	//$decoded = base64_decode("$image");
	//file_put_contents("Desktop/".$name."JPG", $decoded);

	$command = escapeshellcmd('/home/ymhedh/Documents/GreenSnap/test.py');
	$output = shell_exec($command);
	echo $output
?>