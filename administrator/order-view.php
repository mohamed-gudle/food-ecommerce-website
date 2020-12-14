<?php
require_once '..\utilities\sqlConnection.php';
session_start();
if(isset($_GET['userid'])){
  if(isset($_POST['ship'])){
    $stmt = $conn->prepare("DELETE FROM cart where userid={$_GET['userid']} AND order_status=1 ");
    $stmt->execute();
    header("Location:http://localhost/smoothle/administrator/admin-home-page.php?main=order");
  }


$stmt = $conn->prepare("SELECT * FROM cart where userid={$_GET['userid']} AND order_status=1 ");
$stmt->execute();
$stmt3 = $conn->prepare("SELECT * FROM customer where id={$_GET['userid']} ");
$stmt3->execute();


while($row3= $stmt3->fetch(PDO::FETCH_ASSOC)){
  $username=$row3['first_name'];
  $userAddress=$row3['address'];
}

echo '<link rel="stylesheet" href="../Utilities/table.css">
<link rel="stylesheet" href="../Customer/cartView.css">';

echo '<h3> order for :'.$username.'</h3>
<h3>delivery Address:'.$userAddress.'</h3>

<div class="table-wrapper">';
echo '<table class="fl-table">';
echo '<thead>';

echo '<tr > <th >Product</th>';
echo '<th >Price</th>';
echo '<th >Quantity</th>';
echo '<th >Total</th>';

echo '</tr>';
echo '</thead>';
echo '<tbody>';


$totalPrice=0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $quantity=$row['quantity'];

  echo'<tr >';

$stmt2 = $conn->prepare("SELECT * FROM food_item where id={$row['itemid']} ");
$stmt2->execute();


while($itemRow = $stmt2->fetch(PDO::FETCH_ASSOC)){
$price=$quantity*$itemRow["price"];
    
    echo '
    <td><div class="card">
    
    <h3>'.$itemRow["name"].'</h3>
   
  
    </div></td>
    <td>
    
    
    
    <h3>'.$itemRow["price"].'$</h3>
   
  
    </td>
    <td>
    
    
    
    <h3>'.$quantity.'</h3>
   
  
    </td>
    <td>
    
    
    
    <h3>'.$price.'$</h3>
   
  
    </td>
    
    
    

    
   
  
    
    ';
    
    
    

  echo '</tr>';
  $totalPrice=$totalPrice+$price;
}




}
echo '
<tr>
<td>
    <h1>Total amount</h1>
</td>
<td>
</td>
<td>
<h1>'.$totalPrice.'$</h1>
</td>
<form method="POST">
    <input name="ship" value="ship" style="display:none">
    <td><button type="submit">ship order</td>
    </form>
</tr>
';
echo '<tbody>';

echo '</table>';
echo'</div>';
echo ' <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>';
}

?>