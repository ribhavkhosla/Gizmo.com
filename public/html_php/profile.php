<?php
    error_reporting(0);
    session_start();
    include_once 'signin_db.php';
    $usrId = $_SESSION['uId'];
?>

<!DOCTYPE html>
<html lang="en"  >

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/MyProfile</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/profile.css">
    <script src="cards.js"></script>
</head>

<body onload ="userAds()">
    <div id="m" class="main">
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
                    <p>'.$_SESSION['uname'].' '.$_SESSION['lname'].'</p>
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
            <script>
            function onLoad(arr){
                var imp = document.createElement("div");
                var main = document.getElementById("m");
                document.body.appendChild(imp);
                for(i=0;i<arr.length;i++){
                    imp.id = "container";
                    var cont = document.getElementById("container");
                    var block = document.createElement("div");
                    var imageBox = document.createElement("div");
                    var image = document.createElement("img");
                    var title = document.createElement("div");
                    var txt = document.createElement("h2");

                    cont.className = "cont";
                    block.className = "infoBox"; 
                    title.className = "textBox";  
                    imageBox.className = "imageBox";

                    imageBox.width = "100";
                    imageBox.height = "400";
                    image.width = "150";    

                    txt.innerHTML = arr[i].title;
                    image.src = arr[i].image;

                    title.appendChild(txt);
                    imageBox.appendChild(image);

                    block.appendChild(imageBox);
                    block.appendChild(title);
                    
                    cont.appendChild(block);

                    main.appendChild(cont);
                }

            }
            function userAds(){
                var num= "<?php echo $usrId ?>";
                var resArr = [];
                console.log(num);
                for(i=0;i<prodList.length;i++){
                    if(prodList[i].userid == num){
                        resArr.push(prodList[i]);
                    }
                }
                onLoad(resArr);
            }
            </script>
           
    </div>

</body>

</html>