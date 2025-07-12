<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="#" method ="POST" enctype="multipart/form-data" >
        <label for="file_upload">Choose File To Show</label> <br>
    <input type="file" name="file_upload" id="file_upload">
    <input type="submit" value="Submit" name="submit_form">
    </form>

<?php
if(isset($_POST["submit_form"])){
    $temp_file_location = $_FILES['file_upload']['tmp_name'];
    $name = $_FILES['file_upload']['name'];
    $img_folder = 'images/';
    move_uploaded_file($temp_file_location,$img_folder.$name);
    echo "<img src='$img_folder$name' width='300px'>";

}
?>
<?php
if(isset($_POST["submit_form"])){
    
    echo "<img src='$img_folder$name' width='300px'>";

}


?>
</body>
</html>