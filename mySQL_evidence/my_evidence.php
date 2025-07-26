<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY evidence Database</title>
</head>
<body>
    <?php 
    $host_name = 'localhost';
    $user_name = 'root';
    $password= '';
    $database = "mahidul's_company";
    $conn = new mysqli($host_name,$user_name,$password,$database);
    if($conn->connect_error){
    die("connection failed".$conn->connect_error);
};

?>
<h3>Adding Data in Manufacturer Table</h3>
<form action="<?php $_SERVER['PHP_SELF']?>">


</form>




</body>
</html>