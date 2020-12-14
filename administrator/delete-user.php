<?php

require_once("../utilities/sqlConnection.php");

$id=$_POST['id'];
$query="DELETE from `customer` where id='{$_POST['id']}'";


try{
    $conn->exec($query);
    echo "New record created successfully";

} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }
  
  


?>