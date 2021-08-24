<?php

$conn = mysqli_connect("localhost","root","","test");

$file = $_FILES['upload'];
//print_r($file);

$fileName = $file['name'];
$tmpName = $file['tmp_name'];
$dir = "save/";

foreach ($fileName as $key=>$f) {
    $newName = $dir.uniqid()."_".$fileName[$key];
    move_uploaded_file($tmpName[$key],$newName);

    $sql = "INSERT INTO photos (photo_link) VALUES ('$newName')";
    if (mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
}
