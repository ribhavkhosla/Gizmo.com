<?php

if(isset($_POST["signup"]) && $_POST["signup"]=="Save"){
    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $query = "INSERT INTO user_info(userid, firstname, lastname, phone, address, email, password) 
    values('x', '".$fname."', '".$lname."', ".$phone.", '".$address."', '".$email."', '".$psw."')";
    $res = pg_query($conn, $query);
    if($res){
        header("location: welcome.php");
    }
    
}

?>