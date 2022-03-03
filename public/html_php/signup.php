<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $psw = $_POST['psw']; 
    $db = pg_connect("host = localhost port = 5432 dbname = Gizmo user = postgres password=Gizmogizmo");
    $query="Insert into user_info values('x', 'fname', 'lname', 'phone', 'address', 'email', 'password');";
    $result=pg_query($query);
}

?>