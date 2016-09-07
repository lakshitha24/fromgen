<?php
require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$formID=$_POST['formID'];

$sql="UPDATE g_from SET g_formStaus=0 WHERE g_formID ='$formID'";

if ($conn->query($sql) === TRUE) {
	header("Location: ../home.php");
   // echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



?>