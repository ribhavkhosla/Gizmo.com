<?php

if (isset($_POST['submit'])){
    $file  = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTMPName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt  = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTMPName, $fileDestination);
                header("Location:choose.php?youradissuccessfullyposted");
            }else{
                echo "Your file is too big";
            }
        }else{
            echo "There was an error uploading your image";
        }
    }else{
        echo"YOu cannot upload the files with this extention";
    }

}







?>