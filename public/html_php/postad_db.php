<?php

if(isset($_POST["ad"]) && $_POST["ad"]=="Post Ad"){
    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
    $tname = $_POST["title"];
    $price = $_POST["price"];
    $condition = $_POST["condition"];
    $category = $_POST["category"];
    $desc = $_POST["Description"];
    $location = $_POST["location"];
    $contact = $_POST["contact"];
    $result = pg_query($conn, "SELECT * FROM advertisement");
    $id = pg_num_rows($result);
    $id += 1;
    $query = "INSERT INTO advertisement values('$id', '$tname', '$price', '$condition', '$category', '$desc', '$location', '$contact')";
    $res = pg_query($conn, $query);
    if($res){
        header("location:buyer.php");
    }
    
}

?>