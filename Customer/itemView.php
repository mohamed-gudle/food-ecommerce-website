
<!DOCTYPE html>
<html>
<body>
    <link rel="stylesheet" href="..\utilities\style.css">
    <link rel="stylesheet" href="item-view.css">



<main class='content'>
 
 
 <?php
 require_once ("..\utilities\sqlConnection.php");
 include 'main-nav.php';
 if (isset($_GET["ID"])) 
   {
     $id = $_GET['ID'];
     $stmt = $conn->prepare("SELECT * FROM food_item where id=:id");
     $stmt->bindParam(':id', $id, PDO::PARAM_INT);


     $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     if ($row) {
         
     echo '



     <div class="main">
     <div class="first">
       <h1>'.$row['name'].'</h1>
       <div class="info">
         <div class="orange"></div>
         <div class="orange"></div>
         <div class="orange"></div>
         <div class="orange"></div>
         <div class="gray"></div>
       </div>
       <h1>Description</h1>
       <p>'.$row['description'].'</p>
       <h1>Ingredients</h1>
       <p>'.$row['ingredients'].'</p>
       <form action="addtoCart.php" method="post">
       <input type="text" name="id" value='.$row["id"].' style="display:none;">
       <div class="amount">
  
       <div class="sign">-</div>
       <input type="number" id="quantity" name="quantity" min="1" max="5" value=1 class="one">
       <div class="sign">+</div>
       

       <button  type="submit">add to cart</button>
       </form>
       </div>
       
     </div>
     <div class="second">
     <img src="../graphicResources/foodImages/'.$row["image_URL"].'">
     </div>
   </div>



   
     
     
  
     ';

         
    }
 }
 
 ?>


</main>
</body>
</html>
