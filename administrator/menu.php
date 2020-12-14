<?php
require_once("..\utilities\sqlConnection.php");


$stmt = $conn->prepare("SELECT * FROM food_item");
$stmt->execute();
?>
    <link rel="stylesheet" href="menu.css">
    <a href="edit-item.php?add=true"></a>
    <div class="content">
    <a id="add" href="edit-item.php?add=true">Add item</a>
        <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        echo '<div class="card">
            <div class="header">
                <p>'.$row["name"].'</p>
                <p>price: '.$row["price"].' $</p>
            </div>
            <div class="center">
                <div class="image-container">
                    <img src="../graphicResources/foodImages/'.$row["image_URL"].'" alt="" srcset="">
                </div>
            </div>
            <div class="footer">
                <a href="edit-item.php?ID='.$row["id"].'">Edit Item</a>
                <a href="delete-item.php?ID='.$row["id"].'">Delete Item</a>
            </div>
        </div>';
        }
        ?>
    </div>
