<?php
session_start(); // Needed for using $_SESSION

// Simulate setting a cookie
if (!isset($_COOKIE['user'])) {
    setcookie('user', 'Mahidul Kabir', time() + 3600); // expires in 1 hour
}

// Handle form submission (POST)
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access $_POST data
    $email = $_POST['email'] ?? '';
    $message = "Form submitted! Your email is: " . htmlspecialchars($email);
}

// Handle file upload (FILES)
$fileMessage = "";
if (!empty($_FILES['profile_pic']['name'])) {
    $fileName = $_FILES['profile_pic']['name'];
    $fileMessage = "You uploaded file: " . htmlspecialchars($fileName);
}

// Set a session variable
$_SESSION['fav_color'] = 'Blue';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>PHP Superglobals Demo</title>
</head>
<body>

<h2>Demonstrating PHP Superglobals</h2>

<!-- 1. $_GET Example -->
<p><strong>1. $_GET (URL Parameter):</strong></p>
<?php
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']) . "! Welcome via URL parameter.";
} else {
    echo 'Try adding <code>?name=YourName</code> to the URL.';
}
?>

<hr>

<!-- 2. $_POST Example -->
<p><strong>2. $_POST (Form Submission):</strong></p>
<form method="POST" action="">
    Enter your email: <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>
<p><?php echo $message; ?></p>

<hr>

<!-- 3. $_COOKIE Example -->
<p><strong>3. $_COOKIE (Browser Cookies):</strong></p>
<?php
if (isset($_COOKIE['user'])) {
    echo "Welcome back, " . htmlspecialchars($_COOKIE['user']) . "! (from cookie)";
} else {
    echo "No user cookie found.";
}
?>

<hr>

<!-- 4. $_FILES Example -->
<p><strong>4. $_FILES (File Upload):</strong></p>
<form method="POST" enctype="multipart/form-data">
    Upload profile picture: <input type="file" name="profile_pic" required>
    <button type="submit">Upload</button>
</form>
<p><?php echo $fileMessage; ?></p>

<hr>

<!-- 5. $_SESSION Example -->
<p><strong>5. $_SESSION (Session Data):</strong></p>
<p>Your favorite color stored in session is: <?php echo $_SESSION['fav_color']; ?></p>

<hr>

<!-- 6. $_SERVER Example -->
<p><strong>6. $_SERVER (Server Info):</strong></p>
<ul>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
    <li>Current Script: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Client IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
</ul>

<hr>

<!-- 7. $_ENV Example -->
<p><strong>7. $_ENV (Environment Variables):</strong></p>
<p>PATH environment variable: <?php echo getenv('PATH') ?: 'Not Available'; ?></p>

<hr>

<!-- 8. $_REQUEST Example -->
<p><strong>8. $_REQUEST (Combined GET, POST, COOKIE):</strong></p>
<?php
if (isset($_REQUEST['name'])) {
    echo "Hello from \$_REQUEST, " . htmlspecialchars($_REQUEST['name']);
} else {
    echo 'Try adding <code>?name=YourName</code> to the URL or submit the form.';
}
?>

<hr>

<!-- 9. $GLOBALS Example -->
<p><strong>9. $GLOBALS (Global Variables):</strong></p>
<?php
$globalVar = "I'm a global variable!";
function showGlobal() {
    echo $GLOBALS['globalVar'];
}
showGlobal();
?>

</body>
</html>
