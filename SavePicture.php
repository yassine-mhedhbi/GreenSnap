<?php

	$name= $_POST["name"];
	$image = $_POST["image"]

	$decoded = base64_decode("$image");
	file_put_contents("Desktop/".$name."JPG", $decoded);

	$command = escapeshellcmd('/usr/custom/test.py');
	$output = shell_exec($command);
?>