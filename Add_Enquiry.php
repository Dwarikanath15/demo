<?php
	$conn = new mysqli('localhost','root','root','school');
	
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "Insert into admissionenq values('" . $_GET["TxtNameOfStudent"] .  "','" . $_GET["intAGE"] . "','" . $_GET["intClass"] .  "','" . $_GET["TxtFathersName"] .  "','" . $_GET["TxtMothersName"] .  "','" . $_GET["intMobile"] .  "')";
	if($conn->query($sql) ===TRUE)
	{
		echo "Data inserted successfully!";
	}
	
	else
	{
		echo "Error: " . $conn->error;
	}
	$conn->close();
?>