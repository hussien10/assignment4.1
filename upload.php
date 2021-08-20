<?php
    include("./shared/header.php")
?>

<form action="handle-upload.php" class="w-50 mx-auto mt-5 p-5 border text-center" method="POST" enctype="multipart/form-data">
<h1 class="text-center text-black-50 mb-4 text-capitalize">upload images</h1>
    <input class="form-control my-3" type="text" name="imageName" placeholder="image name">
    <input class="form-control my-3" type="file" name="image">
    <input class="btn btn-success" type="submit" value="submit" name="submit">
</form>
<?php
    include("./shared/footer.php")
?>