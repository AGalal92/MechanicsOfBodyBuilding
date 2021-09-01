<?php

//===========================================================
$date = date("Y-m-d") . date("h:i:s");
$datere = str_replace(":", "-", $date);
//img upload
$target_dir = "../images/" . $datere;
$t=0;
foreach ($_FILES['fileToUpload']['tmp_name'] as $f => $name) {
    $t++;
    $temp = explode(".", $_FILES["fileToUpload"]["name"][$f]);
    $target_file =$target_dir.$t . '.' .end($temp);
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
   
// Check if file already exists
// Check file size
    if ($_FILES["fileToUpload"]["size"][$f] > 15000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
     
    //
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$f]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Allow certain file formats
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded. <h4><a href='appimg_add.php'> go back</a></h4>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$f], $target_file)) {
            $date = date("Y/m/d");
            $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

