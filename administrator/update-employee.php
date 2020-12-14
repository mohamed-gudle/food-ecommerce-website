<?php

require_once("../utilities/sqlConnection.php");

    
    $query="UPDATE `employee` SET `first_name`= '{$_POST['first_name']}',`last_name`='{$_POST['last_name']}', `email`='{$_POST['email']}',`address`='{$_POST['address']}',`sector`='{$_POST['sector']}' where id='{$_POST['id']}'";
    
    
    try{
        $conn->exec($query);
        echo "New record created successfully";
    
    } catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
      }
  


?>