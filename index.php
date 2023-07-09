<?php

include "processes/config.php";
error_reporting(0);
session_start();

$session_id = $_SESSION['user_id'];
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
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
        <a href="index.php"><img class="logo" src="img/newl.png" width="270px" height="110px"></a>
        <nav class="navigation">
            <a href="index.php" class="active">Home</a>
            <a href="index.php#about">About</a>
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
        <h2 id="text">OAIR Website</h2>
        <img src="img/leaf.png" id="leaf">
        <img src="img/plant.png" id="plant">
    </section>


    <section class="sec" id="about">
        <div class="ab">
            <img src="img/ab2.png" alt="" width="270px" height="130px">
            <h2>Online Agricultural Insurance Registry and Management System </h2>
            <img src="img/ab1.png" alt="" width="270px" height="130px">
        </div><br>
        <p>Welcome to the Online Agricultural Insurance Registry and Management System for the Municipal Agriculture Office of San Antonio, Quezon.
            Our system aims to revolutionize the way agricultural insurance is administered and managed, providing a more efficient, transparent, and accessible platform for farmers in the region.
            At the core of our system is the belief that farmers deserve timely, complete, and quality information to make informed decisions about their agricultural practices.
            We understand that agriculture is the backbone of the Philippine economy, and empowering farmers with the right tools and knowledge is crucial for their success and the overall growth
            of the sector. The traditional methods of delivering agricultural information, such as farmer-to-farmer visits and extension officers, have limitations in terms of reach and
            effectiveness. Our online platform bridges this gap by providing a centralized hub where farmers can access valuable information related to agriculture, insurance, and risk management.
            One of the key challenges faced by farmers is the exposure to various risks, both biotic and abiotic in nature. Pests, diseases,
            and weather extremes can cause significant losses in agriculture, impacting the livelihoods of smallholder farming systems.<br><br>

            Our system recognizes these risks and aims to provide effective risk management solutions, including agricultural insurance.
            Through our online platform, farmers can easily register for agricultural insurance, submit necessary documents, and have them verified and validated in a streamlined manner.
            The system also calculates production input costs, assesses loss payee and total sum insured, and allows farmers to track their insurance claim applications online.
            We prioritize transparency and uniformity in estimating losses and reimbursements. By providing standardized techniques and processes, we aim to minimize disagreements
            between farmers and the municipal agriculture office, fostering trust and confidence in the insurance program. Real-time monitoring and evaluation are integral components
            of our system. We generate reports and analytics that enable the municipal agriculture office to assess the effectiveness of the insurance program, identify areas for improvement,
            and make data-driven decisions. This ensures that the program remains responsive to the evolving needs of farmers and the agricultural sector as a whole.<br><br>

            Additionally, we recognize the importance of financial literacy in effective risk management. Our system includes
            educational resources and tools to increase farmers' understanding of insurance concepts,
            enabling them to make informed choices and engage in productive farming practices. Overall,
            our Online Agricultural Insurance Registry and Management System aims to revolutionize the way agricultural
            insurance is administered and managed in San Antonio, Quezon. By leveraging technology and providing a user-friendly platform, we strive to empower farmers,
            enhance efficiency, and promote sustainable agricultural practices. Together, let's build a resilient and prosperous agricultural sector for the future.<br><br>
        </p>
        <div class="images">
            <img src="img/agr.png" width="300px" height="250px">
            <img src="img/agr1.jpg" width="300px" height="250px">
            <img src="img/agr.png" width="300px" height="250px">
        </div><br><br>

        <div class="button">
            <a href="developers.php">Developers</a>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>