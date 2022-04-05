<?php
session_start();
include_once '../db/signin_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/Product</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/item.css">
    <script src="../js/cards.js"> </script>
    <script src="../js/item.js"></script>

</head>

<body>
    <div class="main">
        <?php include('nav.php')?>
        <div class="aboutItem">
            <h3>Iphone 13 Pro Max</h3>
            <h3>Price:</h3>
            <p> $999.99</p>
            <br>
            <h3>Condition: </h3>
            <p>Like New</p>
            <br>
            <h3>Description:</h3>
            <p>Selling my 2 month old Iphone 13 Pro Max. It is in a very good condition. No scratches or dents.</p>
            <br>
            <h3>Location:</h3>
            <p>Sandy Hill</p>
            <br>
            <h3>Contact Info:</h3>
            <p>+1(343)-XXX-XXXX</p>
            <p>randomrandom@email.com</p>  
        </div>

        <div id="cont"> </div>
    
    </div>

</body>

</html>