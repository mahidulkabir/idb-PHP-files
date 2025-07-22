<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Start PHP</title>
</head>
<body>
    <?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "SELECT id,username,age FROM user";
$result = mysqli_query($conn, $sql);
echo "<div class='overflow-x-auto rounded-box border border-base-content/5 bg-base-200'>
  <table class='table'>
    <!-- head -->
    <thead>
      <tr>
        
        <th>id</th>
        <th>name</th>
        <th>age</th>
      </tr>
    </thead>";
    while ($row = mysqli_fetch_assoc($result)) {
    
    //   <!-- row 1 -->
     echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
        echo "</tr>";
      };
 echo "</table>"; 
   
echo"</div>";
?>
   
</body>
</html>