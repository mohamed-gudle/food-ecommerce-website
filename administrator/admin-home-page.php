<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="../administrator/admin.css">
</head>

<body>
    <!-- Side navigation -->
    <div class="sidenav">
        <a href="admin-home-page.php?main=menu">Menu</a>
        <a href="admin-home-page.php?main=employee">Employees</a>
        <a href="admin-home-page.php?main=customer">Customers</a>
        <a href="admin-home-page.php?main=order">Orders</a>
        <form method="post">
            <input type="submit" name="logout" value="log out">
        </form>
    </div>

    <!-- Page content -->
    <div id="main">
        <?php
        if(isset($_GET['main'])){
            $main=$_GET['main'];
            if($main=='employee'){
                include "get-employees.php";
            }
            elseif($main=="customer"){
                include "get-customers.php";
            }
            elseif($main=="menu"){
                include "menu.php";
            
            }
            elseif($main=="order"){
                include "orders.php";
            
            }
        }
        if(isset($_POST['logout'])){
            
                echo "logging out";
                session_destroy();
                header("Location:http://localhost/smoothle/utilities/index.php"); 
            
        }
        ?>

    </div>
  
</body>

</html>