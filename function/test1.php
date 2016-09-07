<?php

require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$formID=39;

$sql3="SELECT g_formView from g_formdetail WHERE g_formID='$formID'";
 $result = $conn->query($sql3);
  $row = $result->fetch_assoc();


$xml=simplexml_load_string($row['g_formView']) or die("Error: Cannot create object");
print_r($xml);
echo "<br>";
echo $xml->fields->field[0]['name'];


