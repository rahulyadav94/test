<?php
    if(isset($_FILES['img']))
    {
        $errors=array();
        $file_name=$_FILES['img']['name'];
        $file_size=$_FILES['img']['size'];
        $file_type=$_FILES['img']['type'];
        $file_tmp=$_FILES['img']['tmp_name'];
        
        $file_ext=  strtolower(end(explode(".",$_FILES['img']['name'])));
        
        $extension=array("png");
        
        if(in_array($file_ext,$extension)===false){
            $errors[]="Only jpeg,jpg and png file format supported";
        }
        
        if(empty($errors)){
            move_uploaded_file($file_tmp, "img/".$file_name);
            echo 'Success';
        }
        if($file_size>250){
            $errors[]="Limit exceeded";
        }
        
            print_r($errors);
        
    }
?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="img">
            <input type="submit">
        </form>
    </body>
</html>