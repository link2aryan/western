<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="imageUpload" id="imageUpload" accept="image/*">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php

if(isset($_POST['submit']))
 {

    //Process the image that is uploaded by the user

    $target_dir = "uploads/";
    $image= basename($_FILES["imageUpload"]["name"]);
    $target_file = $target_dir . $image;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file))
    {
      
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.<br>";
        echo $image;
    }
    else{
        echo "Sorry, there was an error uploading your file.";
    }
 
}



// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//    $target_dir = "http://localhost:1234/westernnepal/admin/uploads/";
//    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//    $uploadOk = 1;
//    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . "<br>".$target_file;
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
?>