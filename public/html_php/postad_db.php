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
        // $file  = $_FILES['file'];
        // $fileName = $_FILES['file']['name'];
        // $fileTMPName = $_FILES['file']['tmp_name'];
        // $fileSize = $_FILES['file']['size'];
        // $fileError = $_FILES['file']['error'];
        // $fileType = $_FILES['file']['type'];
        
        // $fileExt  = explode('.', $filename);
        // $fileActualExt = strtolower(end($fileExt));
    
        // $allowed = array('jpg', 'jpeg', 'png');
    
        // if(in_array($fileActualExt, $allowed)){
        //     if($fileError === 0){
        //         if($fileSize < 100000000){
        //             $fileNameNew = "adImg".$id.".".$fileActualExt;
        //             $fileDestination = 'uploads/'.$fileNameNew;
        //             move_uploaded_file($fileTMPName, $fileDestination);
        //             $query = "INSERT INTO advertisement values('$id', '$tname', '$price', '$condition', '$category', '$desc', '$location', '$contact', '$id')";
        //             $res = pg_query($conn, $query);
        //             if($res){
        //                 header("Location:buyer.php?youradissuccessfullyposted");
        //             }
        //         }else{
        //             echo "Your file is too big";
        //         }
        //     }else{
        //         echo "There was an error uploading your image";
        //     }
        // }else{
        //     echo"You cannot upload the files with this extention";
        // }
        // if (isset($_POST["ad"]) && $_POST["ad"]=="Post Ad"){
        //     $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
        //     $tname = $_POST["title"];
        //     $price = $_POST["price"];
        //     $condition = $_POST["condition"];
        //     $category = $_POST["category"];
        //     $desc = $_POST["Description"];
        //     $location = $_POST["location"];
        //     $contact = $_POST["contact"];
        //     $result = pg_query($conn, "SELECT * FROM advertisement");
        //     $id = pg_num_rows($result);
        //     $id += 1;    
        //     $file  = $_FILES['file'];
        //     $fileName = $_FILES['file']['name'];
        //     $fileTMPName = $_FILES['file']['tmp_name'];
        //     $fileSize = $_FILES['file']['size'];
        //     $fileError = $_FILES['file']['error'];
        //     $fileType = $_FILES['file']['type'];
            
        //     $fileExt  = explode('.', $filename);
        //     $fileActualExt = strtolower(end($fileExt));
        
        //     $allowed = array('jpg', 'jpeg', 'png');
        
        //     if(in_array($fileActualExt, $allowed)){
        //         if($fileError === 0){
        //             if(!$fileSize > 10){
        //                 $fileNameNew = "adImg".$id.".".$fileActualExt;
        //                 $fileDestination = 'uploads/'.$fileNameNew;
        //                 move_uploaded_file($fileTMPName, $fileDestination);
        //                 $query = "INSERT INTO advertisement values('$id', '$tname', '$price', '$condition', '$category', '$desc', '$location', '$contact', '$id')";
        //                 $res = pg_query($conn, $query);
        //                 if($res){
        //                     header("Location:buyer.php?youradissuccessfullyposted");
        //                 }
        //             }else{
        //                 echo "Your file is too big";
        //             }
        //         }else{
        //             echo "There was an error uploading your image";
    
        
    
    }
}


