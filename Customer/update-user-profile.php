<?php

require_once("..\utilities\sqlConnection.php");


$contact=$_POST['contact'];
$id=$_POST['id'];
$query="UPDATE `customer` SET `first_name`= '{$_POST['first_name']}',`last_name`='{$_POST['last_name']}', `email`='{$_POST['email']}',`address`='{$_POST['address']}', `contact`=$contact where id='{$_POST['id']}'";


try{
    $conn->exec($query);
    echo "New record created successfully";

} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }

  


?>
