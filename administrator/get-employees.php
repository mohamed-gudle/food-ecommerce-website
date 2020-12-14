<?php
require_once("../utilities/sqlConnection.php");
echo '<link rel="stylesheet" href="../utilities/table.css">';
$stmt = $conn->prepare("SELECT * FROM employee");
$stmt->execute();

echo '<h1>Employee data</h1>';
echo '<a id="add" href="update-employee-view.php">Add Employee</a>';
echo '<div class="table-wrapper">';
echo '<table class="fl-table" >';
echo '<thead>';
echo '<tr > <th >ID</th>'.' <th >Firstname</th>';
echo '<th >Lastname</th>';
echo '<th >email</th>';
echo '<th >address</th>';
echo '<th >sector</th>';
echo '<th >update user</th>';
echo '<th >delete user</th>';
echo '</tr>';
echo '</thead>';

echo '<tbody>';

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

  echo'<tr style="border-right:2px solid black;">';
  $id=$row['id'];
  $f=$row['first_name'];
  $l=$row['last_name'];
  $e=$row['email'];
  $a=$row['address'];
  $c=$row['sector'];
  
  echo '<form action="update-employee.php" method="POST">';
  echo  '<td ><input name="id" type="text" value="'.$id.'"></td>';
  echo  '<td><input name="first_name" type="text" value="'.$f.'"></td>';
  echo '<td><input name="last_name" type="text" value="'.$l.'"></td>';
  echo '<td><input name="email" type="text" value="'.$e.'"></td>';
  echo '<td><input name="address" type="text" value="'.$a.'"></td>';
  echo '<td><input name="sector" type="text" value="'.$c.'"></td>';
  echo '<td><button type="submit"><i class="far fa-check-circle"></i></button></td>';
  echo '</form>';
  echo '<form action="delete-employee.php" method="DELETE">';
  echo '<td><button type="submit"><i class="fas fa-window-close"></i></button></td>';
  echo '</form>';
    

  echo '</tr>';
 


}

echo '<tbody>';

echo '</table>';
echo'</div>';
echo ' <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>'

?>