
<?php

require_once "base.php";
require_once "function.php";

?>
<?php foreach (posts() as $row) { ?>
    <div class="col-4 px-2 list-item mb-2">
        <div class="card h-100 card-bg card-hover mb-3">
            <div class="card-body">
                <a class="h-25" href="fdetail.php?id=<?php echo $row->id; ?>">
                    <img src="<?php echo $row->photo; ?>" class="img-fluid img-hover" alt="">
                </a>
                <a href="fpost_by_category.php?cat_id=<?php echo $row->category_id; ?>">
                    <p class="text-white font-weight-bold badge badge-pill badge-warning"><?php echo category($row->category_id)->title; ?></p>
                </a>
                <a class="text-decoration-none" href="fdetail.php?id=<?php echo $row->id; ?>">
                    <h6 class="mb-2 text-white"><?php echo $row->title; ?></h6>
                </a>
                <div class="d-flex align-items-end">

                    <div class="">
                        <i class="feather-user text-warning"></i>
                        <small class="mb-0 text-white"><?php echo userId($row->user_id)->name; ?></small>
                    </div>
                    <div class="mx-2">
                        <i class="feather-calendar text-warning"></i>
                        <small class="text-white"><?php echo showDate($row->created_at); ?></small>
                    </div>
                    <div class="text-warning font-weight-bolder">
                        <i class="feather-eye"></i>
                        <small class="font-weight-bolder"><?php echo count(viewer($row->id)); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>