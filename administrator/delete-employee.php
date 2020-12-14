<?php

require_once("../utilities/sqlConnection.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
$query="DELETE from `employee` where id='$id'";


try{
    $conn->exec($query);
    echo "employee deleted";

} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }

}

  


?>