<?php
require_once("..\utilities\sqlConnection.php");

$loggedIn=false;
if($_POST['typeOfUser']=="customer"){
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



 
}
elseif($_POST['typeOfUser']=="Employee"){
    $stmt = $conn->prepare("SELECT * FROM employee where email=:email AND pass_word=:pass_word");
    $s1=$_POST['email'];
    $s2=$_POST['password'];
    $stmt->bindParam(':email', $s1, PDO::PARAM_STR,20);
    $stmt->bindParam(':pass_word', $s2, PDO::PARAM_STR,20);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row){
        session_start();
        $_SESSION['EID']=$row['id'];
        echo $_SESSION['EID'];
        if($row['sector']="Administrator"){
            header("Location:http://localhost/smoothle/administrator/admin-home-page.php");
        }
        else{
            header("Location:http://localhost/smoothle/Customer/index.php");
        }
        
        
    }
}

?>