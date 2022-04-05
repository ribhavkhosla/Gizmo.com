
var buttonIds = []

function onLoad(arr){
    var imp = document.createElement("div");
    document.body.appendChild(imp);
    for(i = 0; i< arr.length; i++){

        //Page
        imp.id = "container";
        var cont = document.getElementById("container");
        var divs = document.createElement("div");
        var divContain = document.createElement("div");
        var box = document.createElement("div");
        var image = document.createElement("img");
        var head4 = document.createElement("h4");
        var cost = document.createElement("p");

        var content = document.createElement("div");
        var adPara = document.createElement("p");
        content.className = "cardNew";
        adPara.className = "infoPara";

        adPara.innerHTML = "<b>Condition:</b> <br/>" + arr[i].condition + 
        "<br/><br/><b>Category:</b>  <br/>" + arr[i].category + 
        "<br/><br/><b>Description:</b> <br/>" + arr[i].description +
        "<br/><br/><b>Location:</b> <br/>" + arr[i].location +
        "<br/><br/><b>Contact Info:</b> <br/>" + arr[i].contactinfo;

        content.appendChild(adPara);

        box.className = 'imageBox';
        divContain.className = 'card';
        divs.className = 'cardBefore';
        cost.className = 'price';
        image.src = arr[i].image;
        // box.width = "200";
        // box.height = "500";
        image.width="300";

        head4.innerHTML = arr[i].title;
        cost.innerHTML = '$' + arr[i].price;
        
        box.appendChild(image);
        divs.appendChild(box);
        divs.appendChild(head4);
        divs.appendChild(cost);
        divContain.appendChild(divs);
        divContain.appendChild(content);

        cont.appendChild(divContain);
    }

}
