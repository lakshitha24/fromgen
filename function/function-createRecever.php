<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$formrecevers = json_decode(stripslashes($_POST['data']));


$formID=$_POST['formID'];
//$formrecevers=$_POST['recivers'];



foreach($formrecevers as $d){
$sql2="INSERT INTO g_formrecevers(g_formID,g_recevers) VALUES ('$formID','$d->value')";
if ($conn->query($sql2) === TRUE) {
	 //echo "hi";
	}
	else{
		//echo "bad";
	}
}

//if ($conn->query($sql2) === TRUE) {
 //  echo "New record created successfully";

$sql3="SELECT g_formView from g_formdetail WHERE g_formID='$formID'";
 $result = $conn->query($sql3);
  $row = $result->fetch_assoc();

  echo $row['g_formView'];



//} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
?>