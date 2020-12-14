<?php
require_once '..\utilities\sqlConnection.php';
include 'main-nav.php';
session_start();
if(isset($_POST['checkout'])){
$stmt = $conn->prepare("UPDATE cart SET order_status=true, timestamp=CURRENT_TIMESTAMP WHERE userid={$_SESSION['ID']} ");
$stmt->execute();

}



?>
<?php

$stmt = $conn->prepare("SELECT * FROM cart where userid={$_SESSION['ID']} AND order_status=0 ");
$stmt->execute();

echo '<link rel="stylesheet" href="../Utilities/table.css">
<link rel="stylesheet" href="../Customer/cartView.css">';
echo '<div class="table-wrapper">';
echo '<table class="fl-table" >';
echo '<thead>';

echo '<tr > <th >Product</th>';
echo '<th >Price</th>';
echo '<th >Quantity</th>';
echo '<th >Total</th>';
echo '<th >Remove</th>';
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
    
    <img src="../graphicResources/foodImages/'.$itemRow["image_URL"].'">
    
    
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
    
    
    
    <form action="addtoCart.php" method="POST">
    <input name="deleteID" value="'.$itemRow['id'].'" style="display:none">
    <td><button type="submit">remove</td>
    </form>
    
   
  
    
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
</td>
<td>
<h1>'.$totalPrice.'$</h1>
</td>
<form method="POST">
    <input name="checkout" value="checkout" style="display:none">
    <td><button type="submit">Check Out</td>
    </form>
</tr>
';
echo '<tbody>';

echo '</table>';
echo'</div>';
echo ' <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>'
?>