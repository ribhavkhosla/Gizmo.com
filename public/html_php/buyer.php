
<?php
session_start();
include_once 'signin_db.php';
include 'postad_db.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/ProductsPage</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/buyer.css">
    <script src="cards.js"></script>
</head>

<body>
    <?php include('nav.php')?>
    <?php
    error_reporting(0);
    if(isset($_SESSION['uId'])){
        echo '
        <div class="dropdown">
        <button class="dropbtn">Choose your category</button>
        <div class="dropdown-content">
            <a id = "All" onclick = "dropDown(this.id)">All</a>
            <a id = "Phone" onclick = "dropDown(this.id)">Phones</a>
            <a id ="Laptops" onclick = "dropDown(this.id)">Laptops</a>
            <a id ="Tablets" onclick = "dropDown(this.id)">Tablets</a>
            <a id ="Desktop" onclick = "dropDown(this.id)">Desktops</a>
            <a id ="Monitor" onclick = "dropDown(this.id)">Monitors</a>
            <a id ="PC Peripherals" onclick = "dropDown(this.id)">PC Peripherals</a>
            <a id ="Wearables" onclick = "dropDown(this.id)">Wearables</a>
            <a id ="Audio" onclick = "dropDown(this.id)">Audio</a>
            <a id ="Smart Home" onclick = "dropDown(this.id)">Smart Home</a>
            <a id ="TVs" onclick = "dropDown(this.id)">TVs</a>
            <a id ="Cameras" onclick = "dropDown(this.id)">Cameras</a>
            <a id="Gaming" onclick = "dropDown(this.id)">Gaming</a>
        </div>
    </div>
    <div class="heading2"> Available Products </div>
    <br>
    <br>';
    }
    else{
        echo '<div class="echo">You need to sign in to browse all the products.<br>
        Click Home to sign in or make an account.<div>';
    }
    include 'listCard.php';
    ?>
    <script>
        function onLoad(arr){
            var imp = document.createElement("div");
            document.body.appendChild(imp);
            for(i = 0; i< arr.length; i++){
                imp.id = "container";
                var cont = document.getElementById("container");
                var divs = document.createElement("div");
                var box = document.createElement("div");
                var image = document.createElement("img");
                var head4 = document.createElement("h4");
                var para = document.createElement("p");
                var bttn = document.createElement("button");

                box.className = 'imageBox'
                divs.className = 'card';
                para.className = 'price';
                image.src = arr[i].image;
                box.width = "200";
                box.height = "500";
                image.width="200";
                
                head4.innerHTML = arr[i].title;
                para.innerHTML = arr[i].price;

                bttn.innerHTML = "View Ad";
                box.appendChild(image);
                divs.appendChild(box);
                divs.appendChild(head4);
                divs.appendChild(para);
                divs.appendChild(bttn);

                cont.appendChild(divs);
            }
        }

        
    </script>
    <!-- <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <button>View Ad</button>
    </div> -->
    <!-- <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>-->



</body>

</html>