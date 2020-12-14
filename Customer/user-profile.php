<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/user-profile.css">
    <title>Profile</title>
</head>

<body>
    <?php
    include '..\Customer\main-nav.php';
    ?>

    <main class='content'>
 
            <img src="profilephoto" alt="" srcset="" class="circular-image">
            <?php
            if ($_SESSION["ID"]!=null) {
                require_once('..\utilities\sqlConnection.php');
                $id = $_SESSION['ID'];
                $stmt = $conn->prepare("SELECT * FROM customer where id=:id");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);


                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    
                    echo "<form action='Customer/update-user-profile.php' method='post'>";
                    echo "<input type='text' name='id' value='{$row['id']}' style='display:none;'>";
                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo " <label for='first-name'> First Name</label>";
                    echo"</aside>";
                    echo "<input type='text' name='first_name' value='{$row['first_name']}'>";
                    echo "</div>";
                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo " <label for='last_name'> Second Name</label>";
                    echo"</aside>";
                    echo "<input type='text' name='last_name' value='{$row['last_name']}'>";
                    echo "</div>";
                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo "<label for='username'>Address</label>";
                    echo"</aside>";
                    echo "<input type='text' name='address' value='{$row['address']}'>";
                    echo "</div>";
                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo "<label for='email'>Email</label>";
                    echo"</aside>";
                    echo "<input type='text' name='email' value='{$row['email']}'>";
                    echo "</div>";
                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo "<label for='phone-number'>Phone Number</label>";
                    echo"</aside>";
                    echo "<input type='text' name='contact' value='{$row['contact']}' >";
                    echo "</div>";

                   

                    echo"<div class='input'>";
                    echo "<aside class='aside'>";
                    echo"</aside>";
                    echo "<button type='submit'>save changes</button>";
                    echo "</div>";
                    echo "</form>";
                    
                }
            } else {
                echo "<button id='LoginPopupbutton' onclick='displayLogin()'>LOGIN</button>";
            }
            ?>



        <div class="delete">
            <form action="Customer/delete-user.php" method="post">
            <div class="input">
         <?php
          echo "<input type='text' name='id' value='{$row['id']}' style='display:none;'>";
        ?>
                
               <aside class="aside">
                <label for="delete">delete this account from the system</label>
        </aside>
                <button type="submit" name="delete" >delete</button>
        </div>
            </form>
        </div>
    

    </main>
</body>

</html>