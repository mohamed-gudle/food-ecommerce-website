<?php

$servername="localhost";
$dbname="smoothle";
$dbusername="root";
$dbpassword="";


try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname", $dbusername ,$dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }

?>