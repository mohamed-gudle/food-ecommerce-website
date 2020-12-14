<?php
require_once '..\utilities\sqlConnection.php';
session_start();
if(isset($_POST['id'])){
    $total=$_POST['quantity']*$_POST['price'];
$stmt = $conn->prepare("INSERT INTO cart(userid,itemid,quantity,total) VALUES({$_SESSION['ID']},{$_POST['id']},{$_POST['quantity']},$total)");
$stmt->execute();
header("Location:http://localhost/smoothle/Customer/customer-menu-view.php");
}
elseif(isset($_POST['deleteID'])){
$stmt = $conn->prepare("DELETE FROM cart WHERE itemid={$_POST['deleteID']} AND userid={$_SESSION['ID']}");
$stmt->execute();
header("Location:http://localhost/smoothle/Customer/cartView.php");
}
?>