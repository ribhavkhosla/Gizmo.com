
var prodList = [
    {
        title : "Selling my Iphone13 pro",
        price : "1300",
        condition: "New",
        category: "Phones",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/1.png"
    },
    {
        title : "Selling my windows pro",
        price : "1300",
        condition: "New",
        category: "Laptops",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/2.png"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/3.png"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/4.png"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/5.png"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/6.png"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/7.jpg"
    },
    {
        title : "Selling my xbox pro",
        price : "1300",
        condition: "New",
        category: "Gaming",
        description: "I bought it last yera",
        location: " Ottaw ON",
        contactinfo: "6476209870",
        image: "/project-gizmo/Img/8.png"
    }
]
emptyArr = []
function category(val) {
    for(i=0;i<prodList.length;i++){
        if(prodList[i].category == val){
            console.log('hello');
            emptyArr.push(prodList[i]);
        }
    }
    return emptyArr;
}
    

