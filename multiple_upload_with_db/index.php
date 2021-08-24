<?php



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <style>
        .photo-field{
            margin-top: 20px;
        }
        img{
            width: 200px;
            height: 100px;
        }
    </style>
</head>
<body>

<div class="">
    <h2>Upload Photo</h2>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple>
        <button>upload</button>
    </form>

    <div class="photo-field">
        <?php
        $conn = mysqli_connect("localhost","root","","test");
        $sql = "SELECT * FROM photos";
        $query = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_object($query)){
        ?>
            <img src="<?php echo $row->photo_link; ?>" alt="">
            <a href="delete.php?id=<?php echo $row->id ?>">Delete</a>
        <?php } ?>
    </div>

</div>

</body>
</html>