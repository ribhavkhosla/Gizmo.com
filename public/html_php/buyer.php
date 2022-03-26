<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/ProductsPage</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/buyer.css">
    <script src="cards.js"></script>
</head>

<body onload = "onLoad(prodList)">
    <?php include('nav.php')?>

    <div class="dropdown">
        <button class="dropbtn">Choose your category</button>
        <div class="dropdown-content">
            <a id = "Phones" onclick = "wipe(this.id)">Phones</a>
            <a value ="Laptops" onclick = "category(this.value)">Laptops</a>
            <a value ="Tablets" onclick = "category(this.value)">Tablets</a>
            <a value ="Desktops" onclick = "category(this.value)">Desktops</a>
            <a value ="Monitors" onclick = "category(this.value)">Monitors</a>
            <a value ="PC Peripherals" onclick = "category(this.value)">PC Peripherals</a>
            <a value ="Wearables" onclick = "category(this.value)">Wearables</a>
            <a value ="Audio" onclick = "category(this.value)">Audio</a>
            <a value ="Smart Home" onclick = "category(this.value)">Smart Home</a>
            <a value ="TVs" onclick = "category(this.value)">TVs</a>
            <a value ="Cameras" onclick = "category(this.value)">Cameras</a>
            <a value="Gaming" onclick = "category(this.value)">Gaming</a>
        </div>
    </div>


    <div class="heading2"> Available Products </div>



    <br>
    <br>
    <div id="container"></div>
    <script>
        
        function onLoad(arr){
            for(i = 0; i< 20; i++){
                var imp = document.getElementById("container");
                var divs = document.createElement("div");
                var image = document.createElement("img");
                var head4 = document.createElement("h4");
                var para = document.createElement("p");
                var bttn = document.createElement("button");
                
                divs.className = 'card';
                para.className = 'price';
                image.src = arr[i].image;
                image.width = "200";
                
                head4.innerHTML = arr[i].title;
                para.innerHTML = arr[i].price;

                bttn.innerHTML = "View Ad";
                divs.appendChild(image);
                divs.appendChild(head4);
                divs.appendChild(para);
                divs.appendChild(bttn);

                imp.appendChild(divs);
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
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div>
    <div class="card">
        <img src="/project-gizmo/Img/1.png" width="70%" alt="Denim Jeans">
        <h4>Iphone 13 Pro Max</h4>
        <p class="price">$999.99</p>
        <p><button>View Ad</button></p>
    </div> -->



</body>

</html>