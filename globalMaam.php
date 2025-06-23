
<?php 
echo $_SERVER['SERVER_NAME'];
echo"<br>";
echo $_SERVER['SCRIPT_NAME'];
echo"<br>";
echo $_SERVER['SERVER_ADDR'];
echo"<br>";
echo $_SERVER['SERVER_PORT'];

echo "<br>";
?>


<?php 
echo $_POST['fname'];
echo "<br>";
echo $_POST['email'];

// echo "PHP Version: " . $_ENV['PHP_VERSION'];

?>
<form action="#" method=POST>
 	Name:<br><input type="text" name="fname"><br>
 	Email:<br><input type="text" name="email"><br>
 	<input type="submit" value="Submit">
 </form>