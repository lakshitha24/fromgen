<?php


require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$userID=$_POST['userID'];

$sql ="SELECT * FROM g_from WHERE g_userID='$userID' AND g_formStaus='0' ";
$result = $conn->query($sql);

$rows = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[]=$row;
    }

 echo json_encode($rows);
 
 

} else {
    echo "0 results";
}

  






?>