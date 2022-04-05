<?php
error_reporting(0);
session_start();
include_once '../db/signin_db.php';
include '../db/postad_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/ProductsPage</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/buyer.css">
    <script src="../js/cards.js"></script>
    <script src="../js/buyer.js"></script>
    <script src="../js/item.js"></script>

</head>

<body onload="onLoad(prodList)">
    <?php include('nav.php')?>
    <?php
    error_reporting(0);
    if(isset($_SESSION['uId'])){
        echo '
        <div class="dropdown">
        <button class="dropbtn">Choose your category</button>
        <div class="dropdown-content">
            <a id = "All" onclick = "dropDown(this.id)">All</a>
            <a id = "Phone" onclick = "dropDown(this.id)">Phones</a>
            <a id ="Laptops" onclick = "dropDown(this.id)">Laptops</a>
            <a id ="Tablets" onclick = "dropDown(this.id)">Tablets</a>
            <a id ="Desktop" onclick = "dropDown(this.id)">Desktops</a>
            <a id ="Monitor" onclick = "dropDown(this.id)">Monitors</a>
            <a id ="PC Peripherals" onclick = "dropDown(this.id)">PC Peripherals</a>
            <a id ="Wearables" onclick = "dropDown(this.id)">Wearables</a>
            <a id ="Audio" onclick = "dropDown(this.id)">Audio</a>
            <a id ="Smart Home" onclick = "dropDown(this.id)">Smart Home</a>
            <a id ="TVs" onclick = "dropDown(this.id)">TVs</a>
            <a id ="Cameras" onclick = "dropDown(this.id)">Cameras</a>
            <a id="Gaming" onclick = "dropDown(this.id)">Gaming</a>
        </div>
    </div>
    <div class="heading2"> Available Products </div>
    <br>
    <br>';

    }
    else{
        echo '<div class="echo">You need to sign in to browse all the products.<br>
        Click Home to sign in or make an account.<div>';
    }
    ?>
    <!-- <div id="myModal" class="modal">
        <div id = "para" class="modal-content">
            <span class="close">&times;</span>
            <p id="ad"></p>
        </div>
    </div> -->
</body>

</html>