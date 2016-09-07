





<!DOCTYPE html>
<html lang="en">
  <head>
   
  </head>
  <body>
    <div id="wrapper">
      

<?php
require_once 'connection.php';
 
 $db = new dbConnect();
 $conn = $db->connect();

$sql3="SELECT g_formView from g_formdetail WHERE g_formID='30'";
 $result = $conn->query($sql3);
  $row = $result->fetch_assoc();

 $test1= $row['g_formView'];

?>





      </div>

      <script type="text/javascript" src="/formgen/resources/js/jquery.js" ></script>

      <script type="text/javascript">
      	
      	var rawXML ='<?php echo $test1; ?>';
      	var xmlParsed = $.parseXML(rawXML);

      	console.log(xmlParsed);
      </script>
      </body>













