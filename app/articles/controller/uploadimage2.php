<?php

//===========================================================
$date = date("Y-m-d") . date("h:i:s");
$datere = str_replace(":", "-", $date);
//img upload
$target_dir = "../images/" . $datere.'insurance_url';
$t=0;
foreach ($_FILES['fileToUpload2']['tmp_name'] as $f => $name) {
    $t++;
    $temp = explode(".", $_FILES["fileToUpload2"]["name"][$f]);
    $target_file2 =$target_dir.$t . '.' .end($temp);
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file2, PATHINFO_EXTENSION);

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"][$f]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded. <h4><a href='appimg_add.php'> go back</a></h4>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"][$f], $target_file2)) {
            $date = date("Y/m/d");
            $target_file2;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

