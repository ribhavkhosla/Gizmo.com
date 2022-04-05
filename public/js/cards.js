
var prodList = [];

function addCard(){
    var addArr = transform();
    for(i=0;i<addArr.length;i++){
        var attributes = {};
        attributes["id"] = addArr[i][0]
        attributes["title"] = addArr[i][1];
        attributes["price"] = addArr[i][2];
        attributes["condition"] = addArr[i][3];
        attributes["category"] = addArr[i][4];
        attributes["description"] = addArr[i][5];
        attributes["location"] = addArr[i][6];
        attributes["contactinfo"] = addArr[i][7];
        attributes['userid'] = addArr[i][8];
        attributes['image'] = addArr[i][9];
        prodList.push(attributes);
    }
}
function transform(){
    jQuery.ajax({
        type: "POST",
        url: "../db/list_db.php",
        dataType: 'json',
        data: {functionname: 'arrayR' , arguments: [] },
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
        var nimpo = document.getElementById("container");
        nimpo.remove();
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

    

