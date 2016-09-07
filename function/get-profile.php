<?php


require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$userID=$_POST['userID'];

$sql ="SELECT * FROM g_user WHERE g_username='$userID' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo json_encode($row);

?>