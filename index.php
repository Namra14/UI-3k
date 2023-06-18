<?php
    error_reporting(0);
	session_start();

    $session_id = $_SESSION['user_id'];
    if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')){        
        echo '<script>alert("Login or register to enter!")</script>';
        header('refresh:0.1;url=services.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAIR Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.html"><img class="logo" src="img/newl.png" width="270px" height="130px"></a>
        <nav class="navigation">
            <a href="index.php" class="active">Home</a>
            <a href="index.php#about">About</a>
            <a href="services.php">Service</a>
            <a href="forms.php">Forms</a>
            <a href="processes/logout.php">Logout</a>
            
        </nav>
        
    </header>

    <section class="parallax">
        <img src="img/hill1.png" id="hill1">
        <img src="img/hill2.png" id="hill2">
        <img src="img/hill3.png" id="hill3">
        <img src="img/hill4.png" id="hill4">
        <img src="img/hill5.png" id="hill5">
        <img src="img/tree.png" id="tree">
        <h2 id="text">Agricultural Website</h2>
        <img src="img/leaf.png" id="leaf">
        <img src="img/plant.png" id="plant">
    </section>


    <section class="sec" id="about">
        <div class="ab">
        <img src="img/ab2.png" alt="" width="270px" height="130px">
        <h2>Online Agricultural Insurance Registry and Management System </h2>
        <img src="img/ab1.png" alt="" width="270px" height="130px">
        </div><br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?<br><br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?<br><br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Omnis sit saepe ex minima iste maxime repellendus porro culpa quae modi, 
            itaque reiciendis facere repellat corporis, error ad quo aperiam sint?<br><br>
        </p>
        <div class="images">
        <img src="img/agr.png" width="300px" height="300px">
        <img src="img/agr1.jpg" width="300px" height="300px">
        <img src="img/agr.png" width="300px" height="300px">
    </div><br><br>
    
    <div class="button">
    <a href="developers.php">Developers</a>
</div>
    </section>
    <script src="script.js"></script>
</body>
</html>