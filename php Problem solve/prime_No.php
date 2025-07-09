<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime NO</title>
</head>
<body>
     <form method="POST">
        <label for="fName">Provide No to check:</label>
        <input type="text" name="name" id="fName"/>
        <!-- <button >Submit</button> -->
         <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['name'];
    // echo $_REQUEST['name'];
}
function isPrime($num) {
    if ($num <= 1) {
        return false; // 0 and 1 are not prime
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // divisible by another number
        }
    }

    return true;
}

// Test the function

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
</body>
</html>