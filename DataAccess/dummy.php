<?php
require 'connect.php';


   
    $query = "SELECT * FROM `student_test` ";
   $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;
  

?>