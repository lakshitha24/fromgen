<?php


require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$resID=$_POST['resID'];

 $sql ="SELECT * FROM g_formres WHERE g_formResID='$resID' ";
$result = $conn->query($sql);

//$rows = array();

if ($result->num_rows > 0) {
    // output data of each row
  $row = $result->fetch_assoc();
   //     $rows[]=$row;
  //  }

 echo json_encode($row);
 
 

} else {
    echo "0 results";
}

  






?>