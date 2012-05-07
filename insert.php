<html>
<body>

<?php 
include 'access.php';

$con = mysql_connect($server,$user,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("mydb", $con);

$searched = $_POST["type"];

$result = mysql_query("SELECT * FROM Kid_Icarus_material_database where Weapon_Type='$searched'");

while($row = mysql_fetch_array($result))
  {
  echo $row['Weapon_Name'] . " " . $row['Cost'];
  echo "<br />";
  }

mysql_close($con);
?> 

<a href="page.html">Home</a>

</body>
</html>