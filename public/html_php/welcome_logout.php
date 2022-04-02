<?php
    session_start();
    include('signin_db.php');
    if (isset($_SESSION['uId'])){
        echo'
        <div class="log" action="signin.php" method="POST">
            <h2>Hello ' . $_SESSION['uname']. '!</h2>
            <br>
            <h4>You are currently signed in.</h4>
            <form action="logout.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
        ';
    }else{
        echo "<div class='form' action='signin.php' method='POST'>
            <h2>Sign In</h2>
            <form action='signin_db.php' method='post'>
                <input type='email' name='email' placeholder='Email' required>
                <input type='password' name='pswd' placeholder='Password' required>
                <button name = 'signin' value='Login' type='submit' class='btnn'><a>Login</a></button>
            </form>
            <p class='link'>Or<br></p>
            <button type='button' class='btnn1'
                onclick='document.getElementById('id01').style.display = 'block''>Sign Up</button>
            <p class='liw'>Log in with</p>

            <div class='icons'>
                <a href='#'>
                    <ion-icon name='logo-facebook'></ion-icon>
                </a>
                <a href='#'>
                    <ion-icon name='logo-instagram'></ion-icon>
                </a>
                <a href='#'>
                    <ion-icon name='logo-twitter'></ion-icon>
                </a>
                <a href='#'>
                    <ion-icon name='logo-google'></ion-icon>
                </a>
                <a href='#'>
                    <ion-icon name='logo-skype'></ion-icon>
                </a>
            </div>

        </div>";
    }
    
?>