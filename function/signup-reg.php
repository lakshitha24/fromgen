<?php
require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$project=$_POST['project'];
$role=$_POST['role'];
$email=$_POST['email'];
$date= date("h:i:sa");

$sql="INSERT INTO g_user (g_fname,g_lname,g_username,g_password,g_project,g_role,g_email,g_date) VALUES
  ('$fname','$lname', '$username', '$password','$project','$role','$email','$date') ";

$sql2 ="INSERT INTO g_userauth(username,password) VALUES('$username','$password')" ; 




 if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
 
header("location:../index.php");


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>