<?php
require_once '../utilities/sqlConnection.php';

$stmt = $conn->prepare("SELECT timestamp,sum(total) as total,sum(quantity) as numberOfItems, userid FROM cart WHERE order_status=1 GROUP BY userid order by timestamp asc");
$stmt->execute();

echo '<link rel="stylesheet" href="../Utilities/table.css">
<link rel="stylesheet" href="../Customer/cartView.css">';
echo '<div class="table-wrapper">';
echo '<table class="fl-table" >';
echo '<thead>';

echo '<tr > <th >user ID</th>';
echo '<th >Total Number Of Items Ordered</th>';
echo '<th >Total amount</th>
<th> time </th>
<th> view Order</th>
';


echo '</tr>';
echo '</thead>';
echo '<tbody>';


$totalPrice=0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   

  echo'<tr >';

    
    echo '
    <td>
    <h3>'.$row["userid"].'</h3>
    </td>
    <td>
    
    
    
    <h3>'.$row["numberOfItems"].'</h3>
   
  
    </td>
    <td>
    
    
    
    <h3>'.$row['total'].'$</h3>
   
  
    </td>
    <td>
    
    
    
    <h3>'.$row['timestamp'].'</h3>
   
  
    </td>
    <td>
    
  <a  href="order-view.php?userid='.$row["userid"].'">View Order</a>
   
  
    </td>
    
    
    
   
  
    
    ';
    
    
    

  echo '</tr>';
 
}

echo '<tbody>';

echo '</table>';
echo'</div>';
?>