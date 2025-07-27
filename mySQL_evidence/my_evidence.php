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
    $database = 'mahidul_company';
    $conn = new mysqli($host_name,$user_name,$password,$database);
    if($conn->connect_error){
    die("connection failed".$conn->connect_error);
};

?>
<?php
if(isset($_POST["submit_btn"])){
$m_name = $_POST["manufec_name"];
$m_add = $_POST["manufec_add"];
$m_cont = $_POST["manufec_contact"];

$conn-> query("call add_manufec_info('$m_name','$m_add','$m_cont')");

};

?>
<?php
if(isset($_POST["submit_btn_prod_tble"])){
$p_name = $_POST["prod_name"];
$p_price = $_POST["prod_price"];
$manu_id = $_POST["manufec_id"];
$conn-> query("call add_product_info('$p_name','$p_price','$manu_id')");
};

if(isset($_POST["delmanufact"])){
    $m_id = $_POST["manufac"];
    $conn->query("DELETE from manufacturer_info WHERE id='$m_id'");
};

?>

<!-- form for adding data to manufec. table   -->
<h3>Adding Data in Manufacturer Table</h3>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
Name of the Manufacturer: <br>
<input type="text" name="manufec_name" > <br> <br>

Address of the Manufacturer: <br>
<input type="text" name="manufec_add" > <br> <br>
Contact No. of the Manufacturer: <br>
<input type="text" name="manufec_contact" > <br> <br>
<input type="submit" value="Submit" name="submit_btn">

</form>







<!-- form for adding data to Product. table   -->
<h3>Adding Data in Product Table</h3>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
Name of the Product: <br>
<input type="text" name="prod_name" > <br> <br>

Price of the Product: <br>
<input type="text" name="prod_price" > <br> <br>
Name of the manufecture: <br>
<select name="manufec_id" >
<?php 
$my_query = "SELECT * FROM manufacturer_info";
$manufec_id = $conn->query($my_query);
while(list($m_id,$m_name) = $manufec_id->fetch_row() ){
    echo "<option value='$m_id'>$m_name </option>";
};
?>
</select> <br><br>
<input type="submit" value="Submit" name="submit_btn_prod_tble">
</form>


<!-- after delete trigger -->
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	
		
		<label for="manufac">Delete Manufacturer</label>
		
				<select name="manufac">
					<?php 
						$manufac = $conn->query("SELECT * FROM manufacturer_info");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			
		
		
		<input type="submit" name="delmanufact" value="delete manufacturer" />
		
</form>

<!-- viewing prodouct in the table   -->
 
<h3>View Product Detals </h3>
<table border="1" style="border-collapse:collapse">
    <tr>
        <td>Manufacturer Name</td>
        <td>Manufacturer Address</td>
        <td>Manufacturer Contact</td>
        <td>Product Name</td>
        <td>Product Price</td>
    
    </tr>
    <?php
    $show_all = $conn->query("SELECT * FROM all_table_info");
    while(list ($_manuf_name,$_manuf_add,$_manufac_cont,$_prod_name,$_prod_price)= $show_all->fetch_row()){ 
    echo "<tr> 
        <td> $_manuf_name</td>
        <td> $_manuf_add</td>
        <td> $_manufac_cont</td>
        <td> $_prod_name</td>
        <td> $_prod_price</td>
    
    </tr>";
    
    };
    ?>
</table>

</body>
</html>