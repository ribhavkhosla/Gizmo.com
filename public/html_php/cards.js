window.onload = function(){
    onLoad(prodList);
}

var prodList = [
    // {
    //     title : "Selling my Iphone13 pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Phone",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/1.png"
    // },
    // {
    //     title : "Selling my windows pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Laptops",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/2.png"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/3.png"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/4.png"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/5.png"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/6.png"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/7.jpg"
    // },
    // {
    //     title : "Selling my xbox pro",
    //     price : "1300",
    //     condition: "New",
    //     category: "Gaming",
    //     description: "I bought it last yera",
    //     location: " Ottaw ON",
    //     contactinfo: "6476209870",
    //     image: "/project-gizmo/Img/8.png"
    // }
]



function addCard(){
    var addArr = transform();
    for(i=0;i<addArr.length;i++){
        var attributes = {};
        attributes["title"] = addArr[i][0];
        attributes["price"] = addArr[i][1];
        attributes["condition"] = addArr[i][2];
        attributes["category"] = addArr[i][3];
        attributes["description"] = addArr[i][4];
        attributes["locaiton"] = addArr[i][5];
        attributes["contactinfo"] = addArr[i][6];
        attributes['userid'] = addArr[i][7];
        prodList.push(attributes);
    }
}

function transform(){
    jQuery.ajax({
        type: "POST",
        url: 'listCard.php',
        dataType: 'json',
        data: {functionname: 'arrayR', arguments: [] },
        success: function(data){
            getItems = data;
        },
        async: false
    });
    return getItems;
}
addCard();

function dropDown(val) {
    if(val == "All"){
        onload(prodList);
    }
    else{
        var resArr = [];
        console.log(prodList[0].category);
        for(i=0;i<prodList.length;i++){
            if(prodList[i].category == val){
                resArr.push(prodList[i]);
            }
        }
        var nimpo = document.getElementById("container");
        nimpo.remove();
        onLoad(resArr);
    }
}

function userAds(num){
    var resArr = [];
    console.log(prodList[0].userid);
    for(i=0;i<prodList.length;i++){
        if(prodList[i].userid == num){
            resArr.push(prodList[i]);
        }
    }
    onLoad(resArr);
}

function showArr(arr){
    var resArr = [];
    for(i=0;i<arr.length;i++){
        resArr.push(arr[i]);
    }
    onLoad(resArr);
}


    

