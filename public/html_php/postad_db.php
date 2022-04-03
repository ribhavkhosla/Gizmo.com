<?php
error_reporting(0);
session_start();
include 'signin_db.php'; 
if(isset($_SESSION['uId'])){
    $usrId = $_SESSION['uId'];
    if (isset($_POST["ad"]) && $_POST["ad"]=="Post Ad"){
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
        $query = "INSERT INTO advertisement values('$id', '$tname', '$price', '$condition', '$category', '$desc', '$location', '$contact', '$usrId')";
        $res = pg_query($conn, $query);
        if($res){
            header("Location:buyer.php?youradissuccessfullyposted");
        }
        $file  = $_FILES['file'];
        $fileName = $file['name'];
        $fileTMPName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        
        $fileExt  = explode(".", $filename);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array("jpg", "jpeg", "png");
    
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 2000000){
                    $fileNameNew = "adImg". "-" . $id . "." . $fileActualExt;
                    $fileDestination = "../adImages/" . $fileNameNew;
                    move_uploaded_file($fileTMPName, $fileDestination);
                    $query = "INSERT INTO advertisement values('$id', '$tname', '$price', '$condition', '$category', '$desc', '$location', '$contact', '$id')";
                    $res = pg_query($conn, $query);
                    if($res){
                        header("Location:buyer.php?youradissuccessfullyposted");
                    }
                }else{
                    echo "Your file is too big";
                    exit();
                }
            }else{
                echo "There was an error uploading your image";
                exit();
            }
        }else{
            echo "Only jpg, jpeg and png files are allowed. ";
            exit();
        }
    
    }
}



