<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>Gizmo.com/PostAd</title>
    <link rel="stylesheet" href="postad.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <nav class="menu">
                <ul>
                    <li><img src="logo.png" width="200" height="50"></li>
                    <li><a href="welcome.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                </ul>
            </nav>
        </div> 
        <br>
        <hr>
        <form class="form">
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
                <option value="phone">Phone</option>
                <option value="laptops">Laptops</option>
                <option value="tablets">Tablets</option>
                <option value="desktop">Desktop</option>
                <option value="monitors">Monitors</option>
                <option value="pc peripherals">PC Peripherals</option>
                <option value="wearables">Wearables</option>
                <option value="audio">Audio</option>
                <option value="smart home">Smart Home</option>
                <option value="tv">TVs</option>
                <option value="Cameras">Cameras</option>
                <option value="Gaming">Gaming</option>
                </select>

                <label for="desc"><b>Description</b></label>
                <input type="text" placeholder="Enter Description" name="Description" required>

                <label for="location"><b>Location</b></label>
                <input type="text" placeholder="Enter Location" name="location" required>

                <label for="contact"><b>Contact Information</b></label>
                <input type="text" placeholder="Enter Contact Information" name="contact" required>

                <input type="button" value="Previous">
                <input type="submit" value="Post Ad">
            </div>
        </form>

    </div>
</body>
</html>