<?php
    session_start();
    include_once '../db/signin_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('header.php')?>
        <title>Gizmo.com/Choose</title>

        <link rel = "stylesheet" href = "/project-gizmo/public/css/choose.css">
    </head>

    <body>
        <?php include('nav.php')?>
        <?php
        if (isset($_SESSION['uId'])){
            echo'
            <div class="heading"> Hello there ' . $_SESSION['uname'].' <br> How can we help you today?</div>
            <button class="marginL"><a href="postad.php">Post an Ad</a></button>
            <button class="marginR"><a href="buyer.php">Buy Stuff</a></button>
            </div>';
        }
        else{
            echo '<p>You need to sign in to access this page.</p>';
        }
        ?>
       

    </body>
</html>