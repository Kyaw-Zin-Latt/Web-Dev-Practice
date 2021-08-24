<?php

$conn = mysqli_connect("localhost","root","","test");
$id = $_GET['id'];
$sql = "DELETE FROM photos WHERE id = $id";
$sqlSelect = "SELECT * FROM photos WHERE id = $id";
$query = mysqli_query($conn,$sqlSelect);
$row = mysqli_fetch_object($query);
if (mysqli_query($conn,$sql)) {
    unlink($row->photo_link);
    header("Location:index.php");
}