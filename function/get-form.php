<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

 $formID=$_POST['formID'];

 $sql3="SELECT * from g_formdetail WHERE g_formID='$formID'";
 $result = $conn->query($sql3);
  $row = $result->fetch_assoc();

echo json_encode($row);
 // echo $row['g_formView'];
 // echo 