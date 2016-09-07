<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

 $g_userID=$_POST['g_user'];

 $sql="SELECT COUNT(g_formStaus) AS count FROM g_from where g_formStaus=1 AND g_userID='$g_userID'";

 $result = $conn->query($sql);

 $row = $result->fetch_assoc();

 echo  $row['count'];
 //date_default_timezone_set("India/Mumbai");
 //echo "The time is " . date("h:i:sa");
// $time=time();
//echo $time;