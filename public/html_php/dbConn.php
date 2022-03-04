<?php
$servername = "localhost";
$dbUser = "root";
$dbpswd = "aditya21012";
$dbName = "gizmo";

$conn = mysqli_connect($servername, $dbName, $dbpswd, $dbName);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
else{
    echo "Its working";
}
?>