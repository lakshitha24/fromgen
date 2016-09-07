<?php
session_start();
if(!empty($_SESSION['username'])){

 $userID=$_SESSION['username'];

}
else{
    header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'template/header.php';?>
</head>
<body>
    <div id="wrapper">
        <?php include 'template/navigation.php';?>
        </div>





        </body>
        </html>