<?php
    if(isset($_POST["submit"])){
       function uploadName():string{
            foreach ($_FILES as $imageProps) {
                extract($imageProps);
                $fName=pathinfo($name,PATHINFO_FILENAME);
                $fExtension=pathinfo($name,PATHINFO_EXTENSION);
                $uploadName=$fName.uniqid().".$fExtension";
                return $uploadName;
            }
       }
       $tmp=$_FILES["image"]["tmp_name"];
       move_uploaded_file($tmp,"uploads/".uploadName());
       header("location:upload.php");
    }
    else{
        header("location:upload.php");
    }
?>