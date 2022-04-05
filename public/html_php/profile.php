<?php
    error_reporting(0);
    session_start();
    include_once '../db/signin_db.php';
    $usrId = $_SESSION['uId'];
?>

<!DOCTYPE html>
<html lang="en"  >

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/MyProfile</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/profile.css">
    <script src="../js/cards.js"></script>
    <script src="../js/profile.js"></script>
</head>

<body onload ="userAds()">
    <div id="m" class="main">
    <input type="hidden" id="userid" value="<?php echo $usrId ?>" />
        <?php include('nav.php')?>
        <?php
            error_reporting(0);
            $usrId = $_SESSION['uId'];
            if(isset($_SESSION['uId'])){
                echo '
                <h1>My Ads</h1>
                <div  class="aboutItem">
                    <h2>My Profile </h2>
                    <br>
                    <br>
                    <br>
                    <h3>Name</h3>
                    <p>'.ucfirst($_SESSION['uname']).' '.ucfirst($_SESSION['lname']).'</p>
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