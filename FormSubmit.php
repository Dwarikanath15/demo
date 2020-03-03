<?php
	$conn = new mysqli('localhost','root','root','school');
	
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "Insert into enquiry values('" . $_GET["TxtEnquiryID"] .  "','" . $_GET["TxtName"] . "','" . $_GET["TxtFathersName"] . "','" . $_GET["TxtDOB"] . "' , '" . $_GET["TxtMOB"] . "' , '" . $_GET["TxtCity"] . "', '". $_GET["TxtPostOffice"] . "' , '" . $_GET["TxtPostOffice"] . "' , '" . $_Get["TxtPinCode"] . "', '" . $_GET["TxtPS"] ."' , '" . $_GET["TxtDistrict"] ."')";
	
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