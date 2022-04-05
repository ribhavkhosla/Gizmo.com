<?php
error_reporting(0);
session_start();
include_once '../db/signin_db.php';
include '../db/postad_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/ProductsPage</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/buyer.css">
    <script src="../js/cards.js"></script>
    <script src="../js/buyer.js"></script>
    <script src="../js/item.js"></script>

</head>

<body onload="onLoad(prodList)">
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
    ?>
<<<<<<< Updated upstream
    <!-- <div id="myModal" class="modal">
        <div id = "para" class="modal-content">
            <span class="close">&times;</span>
            <p id="ad"></p>
        </div>
    </div> -->
=======
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
                var cost = document.createElement("p");
                var bttn = document.createElement("button");

                box.className = 'imageBox';
                divs.className = 'card';
                cost.className = 'price';
                bttn.className = 'viewAd';
                image.src = arr[i].image;
                box.width = "200";
                box.height = "500";
                image.width="200";
                
                var arrId = arr[i].id;
                head4.innerHTML = arr[i].title;
                cost.innerHTML = '$' + arr[i].price + arrId ;

                

                // btnn.id = arr[i].id;

                bttn.innerHTML = "<a href='item.php?id=1'><button id='bttn1' onclick='storeVar(this.value)' value='arrId'>View Ad</button></a>";
                function storeVar(v){
                    let val1  = v;
                    console.log(val1);
                }

                // bttn.innerHTML = "View Ad";
                box.appendChild(image);
                divs.appendChild(box);
                divs.appendChild(head4);
                divs.appendChild(cost);
                divs.appendChild(bttn);

                cont.appendChild(divs);
            }
        }

        
    </script>
>>>>>>> Stashed changes
</body>

</html>