<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="fName">Name:</label>
        <input type="text" name="name" id="fName"/>
        <!-- <button >Submit</button> -->
         <input type="submit" value="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['name'];
    // echo $_REQUEST['name'];
}
    ?>
</body>
</html>