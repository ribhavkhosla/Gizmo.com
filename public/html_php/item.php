<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('header.php')?>
    <title>Gizmo.com/Product</title>
    <link rel="stylesheet" href="/project-gizmo/public/css/item.css">
</head>

<body>
    <div class="main">
        <?php include('nav.php')?>
        <div class="aboutItem">
            <h3>Iphone 13 Pro Max</h3>
            <h3>Price:</h3>
            <p> $999.99</p>
            <br>
            <h3>Condition: </h3>
            <p>Like New</p>
            <br>
            <h3>Description:</h3>
            <p>Selling my 2 month old Iphone 13 Pro Max. It is in a very good condition. No scratches or dents.</p>
            <br>
            <h3>Location:</h3>
            <p>Sandy Hill</p>
            <br>
            <h3>Contact Info:</h3>
            <p>+1(343)-XXX-XXXX</p>
            <p>randomrandom@email.com</p>  
        </div>

        <div class="container">
            <img src="/project-gizmo/Img/1.png" id="expandedImg" alt="Item Image" style="width: 60%;">
            <img id="expandedImg" style="width:60%">
        </div>

        
        <div class="row">
            <div class="column">
                <img src="/project-gizmo/Img/1.png" style="width: 100%;" alt="Item Image" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="/project-gizmo/Img/2.png" style="width: 100%;" alt="Item Image" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="/project-gizmo/Img/3.png" style="width: 100%;" alt="Item Image" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="/project-gizmo/Img/4.png" style="width: 100%;" alt="Item Image" onclick="myFunction(this);">
            </div>
        </div>
        


    </div>

</body>
<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

</html>