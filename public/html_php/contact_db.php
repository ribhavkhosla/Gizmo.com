<?php
if(isset($_POST["submit"]) && $_POST["submit"]=="submit")
    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['Description'];
    $query = "INSERT INTO contactus values('$email', '$name', '$message')";    
    $res = pg_query($conn, $query);
    if($res){
        header("location:contact.php");
    }
?>

