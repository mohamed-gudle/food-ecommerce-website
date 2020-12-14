<?php
require_once ("../utilities/sqlConnection.php");

if(isset($_POST['add'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = '../graphicResources/foodImages/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$stmt = $conn->prepare("INSERT INTO `food_item`( `name`, `description`, `category`, `ingredients`, `price`, `image_URL`) VALUES ('{$_POST["name"]}','{$_POST["description"]}','{$_POST["category"]}','{$_POST["ingredients"]}','{$_POST["price"]}','$filename') ");
$stmt->execute();
header("Location:http://localhost/smoothle/administrator/edit-item.php?add=true");
}
elseif(isset($_POST['update'])){
    $filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'graphicResources/foodImages/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$stmt = "UPDATE `food_item` SET `name`='{$_POST['name']}', `description`='{$_POST["description"]}',`category`='{$_POST['category']}',`ingredients`='{$_POST['ingredients']}', `price`='{$_POST["price"]}', `image_URL`='$filename' WHERE id='{$_POST['id']}' ";
$conn->exec($stmt);
header("Location:http://localhost/smoothle/administrator/admin-home-page.php?main=menu");
}

?>
<!DOCTYPE html>
<html>
<body>
    <link rel="stylesheet" href="..\Customer\user-profile.css">


<main class='content'>
 
 
 <?php
 if (isset($_GET["ID"])) {
     
     $id = $_GET['ID'];
     $stmt = $conn->prepare("SELECT * FROM food_item where id=:id");
     $stmt->bindParam(':id', $id, PDO::PARAM_INT);


     $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     if ($row) {
         
         echo "<form action='' method='post' enctype='multipart/form-data'>";
         echo "<div class='input'><aside class='aside'>".'
         <div class="image-container">
         <img src="graphicResources/foodImages/'.$row["image_URL"].'" alt="" srcset="">
     </div>'."
         <aside>
         <input type='text' name='id' value='{$row['id']}' style='display:none;'>
         </div>";
         
        echo ' 
  
         <div class="input">
        <aside class="aside">
               <label for="uploadFile">change photo<label>
             
        </aside>

               <input type="file" name="uploadfile"  />
               
        </div>';
         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo " <label for='name'> Name</label>";
         echo"</aside>";
         echo "<input type='text' name='name' value='{$row['name']}'>";
         echo "</div>";
         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo " <label for='description'>Description</label>";
         echo"</aside>";
         echo "<textarea type='text' name='description' rows='4' cols='50'>{$row['description']}</textarea>";
         echo "</div>";
         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo "<label for='category'>category</label>";
         echo"</aside>";
         echo "<input type='text' name='category' value='{$row['category']}'>";
         echo "</div>";
         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo "<label for='ingridients'>Ingredients</label>";
         echo"</aside>";
         echo "<textarea type='text' name='ingredients' rows='4' cols='50'>{$row['ingredients']}</textarea>";
         echo "</div>";
         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo "<label for='price'>price</label>";
         echo"</aside>";
         echo "<input type='text' name='price' value='{$row['price']}' >";
         echo "</div>";

        

         echo"<div class='input'>";
         echo "<aside class='aside'>";
         echo"</aside>";
         echo "<button type='submit' name='update' value='update'>save changes</button>";
         echo "</div>";
         echo "</form>";
         
     }
 }
 elseif(isset($_GET["add"])){
    echo "<form action='' method='post' enctype='multipart/form-data'>";
    echo "<div class='input'><aside class='aside'>".'
    <div class="image-container">
    
</div>'."
    <aside>
    <input type='text' name='id' style='display:none;'>
    </div>";
    
   echo ' 

    <div class="input">
   <aside class="aside">
          <label for="uploadFile">photo<label>
        
   </aside>

          <input type="file" name="uploadfile" />
          
   </div>';
    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo " <label for='name'> Name</label>";
    echo"</aside>";
    echo "<input type='text' name='name' >";
    echo "</div>";
    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo " <label for='description'>Description</label>";
    echo"</aside>";
    echo "<textarea type='text' name='description' rows='4' cols='50'></textarea>";
    echo "</div>";
    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo "<label for='category'>category</label>";
    echo"</aside>";
    echo "<input type='text' name='category' >";
    echo "</div>";
    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo "<label for='ingridients'>Ingredients</label>";
    echo"</aside>";
    echo "<textarea type='text' name='ingredients' rows='4' cols='50'></textarea>";
    echo "</div>";
    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo "<label for='price'>price</label>";
    echo"</aside>";
    echo "<input type='text' name='price' >";
    echo "</div>";

   

    echo"<div class='input'>";
    echo "<aside class='aside'>";
    echo"</aside>";
    echo "<button type='submit' name='add' value='add'>save changes</button>";
    echo "</div>";
    echo "</form>";

 }
 ?>


</main>
</body>
</html>
