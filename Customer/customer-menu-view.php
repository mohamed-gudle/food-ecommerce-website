<?php
require_once("..\utilities\sqlConnection.php");

include_once "main-nav.php";
$stmt = $conn->prepare("SELECT * FROM food_item");
$stmt->execute();
?>

    <link rel="stylesheet" href="../administrator/menu.css">
    <link rel="stylesheet" href="../Customer/customer-menu.css">
    <div class="content">
    
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
                <a href="../Customer/itemView.php?ID='.$row["id"].'">view item</a>
               
            </div>
        </div>';
        }
        ?>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
