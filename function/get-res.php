<?php


require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$formID=$_POST['formID'];

 $sql ="SELECT * FROM g_formres WHERE g_formID='$formID' ";
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