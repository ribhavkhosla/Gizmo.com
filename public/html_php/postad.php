<?php
session_start();
include_once 'postad_db.php';
include_once 'signin_db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php') ?>
    <?php include('autofill.php') ?>
    <title>Gizmo.com/PostAd</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/postad.css">
</head>

<body>
    <div class="main">
        <?php include('nav.php') ?>
        <?php




        if (isset($_SESSION['uId'])) {
            echo '<form class="form" action="postad_db.php" method="post" enctype="multipart/form-data">
            <div class="content">
                <h1>Post an Ad</h1>
                <br>
                <label for="title"><b>Name/Title</b></label>
                <input type="text" placeholder="Enter Title" name="title" required>

                <label for="price"><b>Price</b></label>
                <input type="text" placeholder="Enter Price" name="price" required>

                <label for="condition"><b>Condition</b></label>
                <input type="text" placeholder="Enter Condition" name="condition" required>

                <label for="category">Category</label>
                <select id="category" name="category">
                <option value="Phone">Phone</option>
                <option value="Laptops">Laptops</option>
                <option value="Tablets">Tablets</option>
                <option value="Desktop">Desktop</option>
                <option value="Monitor">Monitors</option>
                <option value="PC Peripherals">PC Peripherals</option>
                <option value="Wearables">Wearables</option>
                <option value="Audio">Audio</option>
                <option value="Smart Home">Smart Home</option>
                <option value="TVs">TVs</option>
                <option value="Cameras">Cameras</option>
                <option value="Gaming">Gaming</option>
                </select>

                <label for="desc"><b>Description</b></label>
                <input type="text" placeholder="Enter Description" name="Description" required>

                <label for="location"><b>Location</b></label>
                <input id="autofill" type="text" placeholder="Enter Location" name="location" required>

                <label for="contact"><b>Contact Information</b></label>
                <input type="text" placeholder="Enter Contact Information" name="contact" required>

                <label for="image"><b>Choose Image</b></label>
                <input type="file" name="file">
                
                <a href="choose.php"><input type="button" value="Previous"></a>
                
                <input type="submit" name="ad" value="Post Ad">
            </div>
        </form>';
        } else {
            echo '<div class="echo">You need to sign in to post an ad.<br>
            Click Home to sign in or make an account<div>';
        }
        ?>
        
    </div>
</body>
</html>