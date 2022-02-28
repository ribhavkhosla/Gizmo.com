<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>Gizmo.com/Home</title>
    <link rel="stylesheet" href="welcome.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <nav class="menu">
                <ul>
                    <li><a href="welcome.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                </ul>
            </nav>
        </div>
        <hr>
        <div class="content">
            <span><img src="logo.png" width="600" height="170"></span>
            <h2>We deal in <br><span class="auto-input"></h2>
            <div class="form">
                <h2>Sign In</h2>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="" placeholder="Password">
                <button class="btnn"><a href="#">Login</a></button>

                <p class="link">Or<br></p>
                <button type="button" class="btnn1"
                    onclick="document.getElementById('id01').style.display = 'block'">Sign Up</button>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
            <div class="container">
                <h1>Sign Up</h1>
                <br>
                <hr>
                <br>
                <label for="name"><b>First Name</b><br></label>
                <input type="text" placeholder="Enter First Name" name="fname" required><br>

                <label for="name"><b>Last Name</b><br></label>
                <input type="text" placeholder="Enter Last Name" name="lname" required><br>

                <label for="phone"><b>Phone Number</b><br></label>
                <input type="text" placeholder="Enter Phone Number" name="phone" required><br>

                <label for="address"><b>Home Address</b><br></label>
                <input type="text" placeholder="Enter Home Address" name="address" required><br>

                <label for="email"><b>Email</b><br></label>
                <input type="text" placeholder="Enter Email" name="email" required><br>

                <label for="psw"><b>Password</b><br></label>
                <input type="password" placeholder="Enter Password" name="psw" required><br>

                <label for="psw-repeat"><b>Repeat Password</b><br></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel </button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    </div>


    <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Smart Phones.", "Laptops.", "Tablets.", "Wearables.", "TVs.", "Monitors.", "Cameras.", "PC Accessories."],
            typeSpeed: 100,
            backSpeed: 30,
            loop: true
        })

    </script>
</body>

</html>