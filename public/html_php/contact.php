<?php
    session_start();
    include_once '../db/signin_db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('header.php')?>
        <title>Gizmo.com/Contact</title>
        <link rel="stylesheet" href="/project-gizmo/public/css/contact.css">
    </head>
    <body>
        <div class="main">
            <?php include('nav.php')?>

            <h1>Please fill out the form below to reach out to us.</h1>

            <form class="content" action="contact_db.php" method="post">
                    <br>
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter your name" name="name" required>
    
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter your Email" name="email" required>
    
                    <label for="desc"><b>Description</b></label>
                    <input type="text" placeholder="Enter Description"  name="Description" style="height: 200px;" required>
    
    
                    <input type="reset" value="Clear">
                    <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </body>
</html>