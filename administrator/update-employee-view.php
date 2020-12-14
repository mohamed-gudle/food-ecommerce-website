<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/user-profile.css">
    <title>EDIT EMPLOYEE</title>
</head>

<body>

    <main>
        <div class="content">
            <img src="profilephoto" alt="" srcset="" class="circular-image">
            <?php
         require_once '..\utilities\sqlConnection.php';
                if(isset($_POST['first_name'])){
                    $f=$_POST['first_name'];
                    $l=$_POST['last_name'];
                    $e=$_POST['email'];
                   $p= $_POST['password'];
                   $a=$_POST['address'];
                   $s=$_POST['sector'];
                    
$stmt = $conn->prepare("INSERT INTO employee(`first_name`,`last_name`,`email`,`pass_word`,`address`,`sector`) VALUES('$f','$l','$e','$p','$a','$s')");
$stmt->execute();
header("Location:http://localhost/smoothle/administrator/admin-home-page.php?main=employee");
                }
                else{
                echo "<form method='post'>";
               
                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo " <label for='first-name'> First Name</label>";
                echo"</aside>";
                echo "<input type='text' name='first_name' >";
                echo "</div>";
                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo " <label for='last_name'> Second Name</label>";
                echo"</aside>";
                echo "<input type='text' name='last_name' >";
                echo "</div>";
                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo "<label for='username'>email</label>";
                echo"</aside>";
                echo "<input type='text' name='email' >";
                echo "</div>";
                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo "<label for='pssword'>password</label>";
                echo"</aside>";
                echo "<input type='text' name='password'>";
                echo "</div>";
                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo "<label for='address'>Address</label>";
                echo"</aside>";
                echo "<input type='text' name='address' >";
                echo "</div>";

                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo "<label for='sector'>sector</label>";
                echo"</aside>";
                echo "<input type='text' name='sector' >";
                echo "</div>";

               

                echo"<div class='input'>";
                echo "<aside class='aside'>";
                echo"</aside>";
                echo "<button type='submit'>save changes</button>";
                echo "</div>";
                echo "</form>";
                }
            
            ?>



        </div>
        

    </main>
</body>

</html>