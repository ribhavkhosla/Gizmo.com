<?php
    if(isset($_SESSION['uId'])){
        echo '<div class="navbar">
        <div class="menu">
            <ul>
                <li><img src="/project-gizmo/Img/logo.png" width="200" height="50"></img></li>
                <li><a href="welcome.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="postad.php">POST AD</a></li>
                <li><a href="buyer.php">BROWSE</a></li>
            </ul>
        </div>
    </div>
    <br>
    <hr>';
    }
    else{
        echo'<div class="navbar">
        <div class="menu">
            <ul>
                <li><img src="/project-gizmo/Img/logo.png" width="200" height="50"></img></li>
                <li><a href="welcome.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="profile.php">PROFILE</a></li>
            </ul>
        </div>
    </div>
    <br>
    <hr>';
    }
?>
