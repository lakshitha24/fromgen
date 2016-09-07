<?php


require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$userID=$_POST['userID'];


$sql ="SELECT g_formID from g_formrecevers WHERE g_recevers='$userID'";
$result = $conn->query($sql);



$rows = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$test =$row['g_formID'];
    	$sql1 ="SELECT * from g_from WHERE g_formID='$test'";
    	$result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        $rows[]=$row1;
    }

 echo json_encode($rows);
 

} else {
    echo "0 results";
}

  






?>