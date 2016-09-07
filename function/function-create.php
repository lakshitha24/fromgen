<?php 

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

 $g_user=$_POST['g_user'];
 $g_title=$_POST['g_title'];
 $g_project=$_POST['g_project'];
 $g_date=$_POST['g_date'];
 $g_description=$_POST['g_description'];
 $g_formStaus=1;

 $sql="INSERT INTO g_from (g_userID,g_formTitle,g_project,g_formDate,g_formDes,g_formStaus) VALUES
  ('$g_user','$g_title', '$g_project', '$g_date','$g_description','$g_formStaus') ";




 if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
 	$sql2="SELECT g_formID from g_from ORDER BY g_formID DESC LIMIT 1;";
 $result = $conn->query($sql2);
  $row = $result->fetch_assoc();

  echo $row['g_formID'];


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

 