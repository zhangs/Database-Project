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

if (empty($_POST["all_type"])) {
	$searched = $_POST["type"];
	$query = "SELECT * FROM Kid_Icarus_material_database where Weapon_Type='$searched'";
}
else {
	$query = "SELECT * FROM Kid_Icarus_material_database";
}

if (empty($_POST["charged"])) {
	echo "Hey";
}
else {
	$charge = $_POST["charged"];
	$query = $query . " WHERE " . $charge . " = '1'";
}


$result = mysql_query($query);

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