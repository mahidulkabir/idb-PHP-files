<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>data entry</title>
</head>
<body>
    <?php
    require_once("./require_files/connectDB.php");
    ?>
    <form action="" method="POST" class="mx-auto w-1/3">
        <fieldset class="fieldset">
  <legend class="fieldset-legend">What is your name?</legend>
  <input type="text" class="input" placeholder="Type here" name="userName"/>
</fieldset>
        <fieldset class="fieldset">
  <legend class="fieldset-legend">What is your age?</legend>
  <input type="text" class="input" placeholder="Type here" name="userage"/>
</fieldset>
<button class="btn btn-primary btn-sm">
<input type="submit" value="Save" name="save">
</button>
    </form>
   <div class="text-center">
    <button class="btn btn-warning btn-sm ">
<a href="./strt.php">Go to data show</a>
   </button> 
   </div>
   <?php
   if(isset($_POST["save"])){
    $name = $_POST["userName"];
    $age = $_POST["userage"];
    $insertIntoDB="INSERT INTO user (username,age) VALUES('$name','$age')";
    mysqli_query($conn,$insertIntoDB);
}
   ?>
</body>
</html>