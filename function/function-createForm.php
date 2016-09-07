<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$formID=$_POST['formID'];
$formXML=$_POST['xml'];
$image=$_POST['image'];


$sql2="INSERT INTO g_formdetail(g_formID,g_formView,g_formimage) VALUES ('$formID','$formXML','$image')";

if ($conn->query($sql2) === TRUE) {
   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>