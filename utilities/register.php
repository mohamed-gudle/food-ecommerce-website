<?php

require_once("sqlConnection.php");

echo"starting";
$contact=$_POST['contact'];
print_r ($_POST);
$query="INSERT INTO `customer`(`first_name`, `last_name`, `email`, `pass_word`, `contact`) VALUES ('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['email']}','{$_POST['password']}',$contact)";

try{
    $conn->exec($query);
    echo "New record created successfully";
    $stmt = $conn->prepare("SELECT * FROM customer where email=:email AND pass_word=:pass_word");
$s1=$_POST['email'];
$s2=$_POST['password'];
$stmt->bindParam(':email', $s1, PDO::PARAM_STR,20);
$stmt->bindParam(':pass_word', $s2, PDO::PARAM_STR,20);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row){
    session_start();
    $_SESSION['ID']=$row['id'];
    echo $_SESSION['ID'];
    header("Location:http://localhost/smoothle/Utilities/index.php");
    
}


} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }
  
  


?>