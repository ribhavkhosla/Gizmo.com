<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('header.php')?>
        <title>Gizmo.com/Contact</title>
        <link rel="stylesheet" href="/public/css/contact.css">
    </head>
    <body>
        <div class="main">
            <?php include('nav.php')?>

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