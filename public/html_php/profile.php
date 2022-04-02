<?php
    session_start();
    include_once 'signin_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/MyProfile</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/profile.css">
</head>

<body>
    <div class="main">
        <?php include('nav.php')?>
        <?php
            if(isset($_SESSION['uId'])){
                echo '
                <h1 >My Ads</h1>
                <div class="aboutItem">
                    <h2>My Profile </h2>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <h3>Name</h3>
                    <p>'.$_SESSION['uname'].'</p>
                    <br>
                    <h3>Phone Number</h3>
                    <p>+'.$_SESSION['phone'].'</p>
                    <br>
                    <h3>Home Address</h3>
                    <p>'.$_SESSION['address'].' </p>
                    <br>
                    <h3>Email</h3>
                    <p>'.$_SESSION['email'].'</p>
                    <br>
                    <h3>Password</h3>
                    <p>'.$_SESSION['pass'].'</p>
                </div>


                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>
                <div class="infoBox">
                    <img src="/project-gizmo/Img/1.png" alt="ad image">
                    <text> Iphone 13 Pro Max</text>
                </div>';
            }
            else{
                echo '<div class="echo">You need to sign in to view your profile.<br>
                Click Home to sign in or make an account.<div>';
            }
        ?>
    </div>

</body>

</html>