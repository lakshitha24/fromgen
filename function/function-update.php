<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$userID=$_POST['userID'];
 $formID=$_POST['formID'];
$formXML=$_POST['xml'];
$image=$_POST['image'];
$today = date("m.d.y"); 

$sql="INSERT INTO g_formRes(g_formID,g_formView,g_formimage,g_userID,g_time) VALUES('$formID','$formXML','$image','$userID','$today')";

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>