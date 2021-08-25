<?php
include "template/header.php";

$id = $_GET['id'];
$row = product($id);

if (isset($_POST['update'])){
    if (createProduct()){
        echo showAlert("aung p","success");
    }else{
        echo showAlert("fail p","danger");
    }
}

?>

<div class="container">
    <div class="row my-5">
        <div class="col-8">
            <div class="row g-1">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-3">
                            <input type="text" placeholder="Name" value="<?php echo $row->title; ?>" name="title" class="form-control">
                        </div>
                        <div class="col-3">
                            <input type="text" placeholder="Price" value="<?php echo $row->price; ?>" name="price" class="form-control">
                        </div>
                        <div class="col-3">
                            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                <?php foreach (categories() as $c){ ?>
                                    <option value="<?php echo $c->id; ?>"><?php echo $c->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-outline-primary w-100" name="update">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>
