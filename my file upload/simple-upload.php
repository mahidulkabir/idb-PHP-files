<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
      <input type="file" name="my_file">
      <input type="submit" name="btnSubmit" value="upload">
    </form>

    <?php
    if(isset($_POST['btnSubmit'])){
        $filename = $_FILES['my_file']['name'];
        $temp_path = $_FILES['my_file']['tmp_name'];
        $file_size = $_FILES['my_file']['size'];
        $file_type = $_FILES['my_file']['type'];
        $file_size_to_kb = $file_size/1024;
        $new_path = "image/";
        // 
        $file_type_validator = ["image/png","image/jpg","image/jpeg"];

        if(!in_array($file_type,$file_type_validator)){
            echo "file type not match";
        };
        if($file_size_to_kb<500){
            move_uploaded_file($temp_path,$new_path.$filename);
        };
        echo $file_type;
    }
    ?>
</body>
</html>