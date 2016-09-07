<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();


 $result = $conn->query("SELECT * from g_userauth where username='$username' and password='$password'");


$row = $result->fetch_assoc();
$user =$row['username'];

if ($result->num_rows == 1) {

 $_SESSION['username'] = $user;
    
    header("location:../home.php");
  
	}

 else {
 	 header("location:../index.php");
    
}
 
?>