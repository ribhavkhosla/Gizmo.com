<?php

if(isset($_POST["signup"]) && $_POST["signup"]=="Save"){
    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $result = pg_query($conn, "SELECT * FROM user_info");
    $id = pg_num_rows($result);
    $id += 1;
    $query = "INSERT INTO user_info(firstname, lastname, phone, address, email, password, userid) 
    values('".$fname."', '".$lname."', ".$phone.", '".$address."', '".$email."', '".$psw."', ".$id.")";
    $res = pg_query($conn, $query);
    if($res){
        header("location: ../html_php/welcome.php");
    }
    
}

?>