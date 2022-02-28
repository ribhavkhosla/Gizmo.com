<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width-device-width initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge" />
        <title>Gizmo.com/Contact</title>
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="menu">
                    <ul>
                        <li><img src="logo.png" width="200" height="50"></img></li>
                        <li><a href="welcome.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                    </ul>
                </div>
            </div> 
            <br>
            <hr>

            <h1>Please fill out the form below to reach out to us.</h1>

            <form>
                <div class="content">
                    <br>
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter your name" name="name" required>
    
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter your Email" name="email" required>
    
                    <label for="desc"><b>Description</b></label>
                    <input type="text" placeholder="Enter Description"  name="Description" style="height: 200px;" required>
    
    
                    <input type="reset" value="Clear">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>