<div class="nav">
    <link rel="stylesheet" href="../Customer/main-nav.css">
    <a href="http://localhost/smoothle/utilities/index.php" id="logo-a"><img src="../graphicResources/logo.svg" alt="" srcset="" id="logo1" ></a>
    <div class="center-nav">
        <a href="http://localhost/smoothle/utilities/index.php">Home</a>
        <a href="http://"  rel="noopener noreferrer" class="nav-anchortag">About</a>
        <a href="http://localhost/smoothle/Customer/customer-menu-view.php"  class="nav-anchortag">Menu</a>
        <a href="http://localhost/smoothle/utilities/index.php#contact"  class="nav-anchortag">Contact</a>
    </div>
    <?php
    session_start();

    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['ID'])) {
        if(isset($_POST['logout'])) { 
            echo "logging out";
            session_destroy();
            header("Location:http://localhost/smoothle/utilities/index.php"); 
        } 
       

        require_once('..\utilities\sqlConnection.php');
        $id = $_SESSION["ID"];
        $stmt = $conn->prepare("SELECT * FROM customer where id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            echo '<div class="dropdown">';
            echo "<button class='dropbtn'>{$row['first_name']}</button>";
            echo '<div class="dropdown-content">';
            echo '<a href="http://localhost/smoothle/Customer/user-profile.php">Profile</a>';
            echo '<a href="http://localhost/smoothle/Customer/cartView.php">Cart</a>';
            echo '
            <form method="post"> 
        <button type="submit" name="logout">log out</button> 
          </form>'
            ;
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "<button id='LoginPopupbutton' onclick='displayLogin()'>LOGIN</button>";
    }
    ?>

</div>