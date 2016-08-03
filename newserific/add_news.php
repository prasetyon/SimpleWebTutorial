<?php
    include "connect.php";
if($_FILES["fileToUpload"]["name"]){
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $id=$_POST['id_berita'];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $result="INSERT INTO `berita`(`ID_BERITA`, `JUDUL_BERITA`, `KETERANGAN_BERITA`, `GAMBAR_BERITA`) VALUES ('$_POST[id_berita]', '$_POST[judul]', '$_POST[keterangan]', '$target_file')";
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        if(mysql_query($result)){
            header("location: view_news.php?upload=ok");
        }
        else
        echo "query failed";
        echo "<br>";
        echo $id;
        echo $_POST['judul'], $_POST['keterangan'], $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
else{
    $result="INSERT INTO `berita`(`ID_BERITA`, `JUDUL_BERITA`, `KETERANGAN_BERITA`) VALUES ('$_POST[id_berita]', '$_POST[judul]', '$_POST[keterangan]')";
    if(mysql_query($result)){
            header("location: view_news.php?upload=ok");
        }
        else{
        echo "query failed";
        echo "<br>";
        echo $id;
        echo $_POST['judul'], $_POST['keterangan'], $target_file;
        }
}
?>