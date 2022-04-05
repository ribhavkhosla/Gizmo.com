function createElem(arr){
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
    var num = $("#userid").val();
    var resArr = [];
    console.log(num);
    for(i=0;i<prodList.length;i++)
    {
        if(prodList[i].userid == num)
        {
            resArr.push(prodList[i]);
        }
    }
    createElem(resArr);
}