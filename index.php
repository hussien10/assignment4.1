<?php
include("./shared/header.php")
?>
<section class="p-5 text-center">
    <div class="container">
    <h1 class="text-center mb-5 text-capitalize text-info">our gallery</h1>
    <div class="row">
        <?php
        $images = scandir("./uploads/");
        foreach ($images as $key => $image) {
            if ($key > 1) {
                $src="uploads/$image";
        ?>
                <div class="col-md-4 text-center">
                    <img class="img-fluid mb-3" src="<?php
                                                echo $src
                                                ?>" />
                    <a class="btn btn-primary" href="<?php
                                                echo $src
                                                ?>" download>download</a>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <a class="btn btn-success mt-5" href="upload.php">add Photos</a>
    </div>
</section>
<?php
include("./shared/footer.php")
?>