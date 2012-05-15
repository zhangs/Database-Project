<html>
<body>

<?php 
include 'access.php';

// connecting to database
$con = mysql_connect($server,$user,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("mydb", $con);

// using this to control how I create my query string
$count = 0;

// for the weapon type
if (empty($_POST["all_type"])) {
	$searched = $_POST["type"];
	$query = "SELECT * FROM Kid_Icarus_material_database where Weapon_Type='$searched'";
	$count = $count + 1;
}
else {
	$query = "SELECT * FROM Kid_Icarus_material_database";
}

// for if there is a charged shot skill
if (empty($_POST["charged"])) {
	$query = $query;
}
else {
	$charge = $_POST["charged"];
	if ($count == 1) {
		$query = $query . " AND " . $charge . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $charge . " = '1'";
		$count = $count + 1;		
	}
}

// for if there is a cont. shot skill
if (empty($_POST["cont"])) {
	$query = $query;
}
else {
	$conti = $_POST["cont"];
	if ($count == 1) {
		$query = $query . " AND " . $conti . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $conti . " = '1'";
		$count = $count + 1;		
	}
}

// for Direct Combo (code is going to get long and repetitive from here...)
if (empty($_POST["direct_com"])) {
	$query = $query;
}
else {
	$dircom = $_POST["direct_com"];
	if ($count == 1) {
		$query = $query . " AND " . $dircom . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $dircom . " = '1'";
		$count = $count + 1;		
	}
}

// for Direct Dash
if (empty($_POST["direct_da"])) {
	$query = $query;
}
else {
	$dirda = $_POST["direct_da"];
	if ($count == 1) {
		$query = $query . " AND " . $dirda . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $dirda . " = '1'";
		$count = $count + 1;		
	}
}

// for Item Attack
if (empty($_POST["item"])) {
	$query = $query;
}
else {
	$ite = $_POST["item"];
	if ($count == 1) {
		$query = $query . " AND " . $ite . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $ite . " = '1'";
		$count = $count + 1;		
	}
}

// for Power Attack
if (empty($_POST["power"])) {
	$query = $query;
}
else {
	$pow = $_POST["power"];
	if ($count == 1) {
		$query = $query . " AND " . $pow . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $pow . " = '1'";
		$count = $count + 1;		
	}
}

// for Total Health
if (empty($_POST["health"])) {
	$query = $query;
}
else {
	$hel = $_POST["health"];
	if ($count == 1) {
		$query = $query . " AND " . $hel . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $hel . " = '1'";
		$count = $count + 1;		
	}
}

// for Ranged Defense
if (empty($_POST["range_def"])) {
	$query = $query;
}
else {
	$randef = $_POST["range_def"];
	if ($count == 1) {
		$query = $query . " AND " . $randef . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $randef . " = '1'";
		$count = $count + 1;		
	}
}

// for Direct Defense
if (empty($_POST["dir_def"])) {
	$query = $query;
}
else {
	$dirdef = $_POST["dir_def"];
	if ($count == 1) {
		$query = $query . " AND " . $dirdef . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $dirdef . " = '1'";
		$count = $count + 1;		
	}
}

// for Knockback Defense
if (empty($_POST["knock_def"])) {
	$query = $query;
}
else {
	$kndef = $_POST["knock_def"];
	if ($count == 1) {
		$query = $query . " AND " . $kndef . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $kndef . " = '1'";
		$count = $count + 1;		
	}
}

// for Effect Defense
if (empty($_POST["effect_def"])) {
	$query = $query;
}
else {
	$efdef = $_POST["effect_def"];
	if ($count == 1) {
		$query = $query . " AND " . $efdef . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $efdef . " = '1'";
		$count = $count + 1;		
	}
}

// for Overall Defense
if (empty($_POST["over_def"])) {
	$query = $query;
}
else {
	$overdef = $_POST["over_def"];
	if ($count == 1) {
		$query = $query . " AND " . $overdef . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $overdef . " = '1'";
		$count = $count + 1;		
	}
}

// for Stamina
if (empty($_POST["stamina"])) {
	$query = $query;
}
else {
	$stami = $_POST["stamina"];
	if ($count == 1) {
		$query = $query . " AND " . $stami . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $stami . " = '1'";
		$count = $count + 1;		
	}
}

// for Overall Movement Speed
if (empty($_POST["over_move"])) {
	$query = $query;
}
else {
	$ovmov = $_POST["over_move"];
	if ($count == 1) {
		$query = $query . " AND " . $ovmov . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $ovmov . " = '1'";
		$count = $count + 1;		
	}
}

// for Walking Speed
if (empty($_POST["walk_spd"])) {
	$query = $query;
}
else {
	$walspd = $_POST["walk_spd"];
	if ($count == 1) {
		$query = $query . " AND " . $walspd . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $walspd . " = '1'";
		$count = $count + 1;		
	}
}

// for Running Speed
if (empty($_POST["run_spd"])) {
	$query = $query;
}
else {
	$runspd = $_POST["run_spd"];
	if ($count == 1) {
		$query = $query . " AND " . $runspd . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $runspd . " = '1'";
		$count = $count + 1;		
	}
}

// for Evasion
if (empty($_POST["evasion"])) {
	$query = $query;
}
else {
	$eva = $_POST["evasion"];
	if ($count == 1) {
		$query = $query . " AND " . $eva . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $eva . " = '1'";
		$count = $count + 1;		
	}
}

// for Healing
if (empty($_POST["healing"])) {
	$query = $query;
}
else {
	$heal = $_POST["healing"];
	if ($count == 1) {
		$query = $query . " AND " . $heal . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $heal . " = '1'";
		$count = $count + 1;		
	}
}

// for Effect Time
if (empty($_POST["effect"])) {
	$query = $query;
}
else {
	$eff = $_POST["effect"];
	if ($count == 1) {
		$query = $query . " AND " . $eff . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $eff . " = '1'";
		$count = $count + 1;		
	}
}

// for Status Attack
if (empty($_POST["status"])) {
	$query = $query;
}
else {
	$stat = $_POST["status"];
	if ($count == 1) {
		$query = $query . " AND " . $stat . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $stat . " = '1'";
		$count = $count + 1;		
	}
}

// for Range
if (empty($_POST["range"])) {
	$query = $query;
}
else {
	$ran = $_POST["range"];
	if ($count == 1) {
		$query = $query . " AND " . $ran . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $ran . " = '1'";
		$count = $count + 1;		
	}
}

// for Homing
if (empty($_POST["homing"])) {
	$query = $query;
}
else {
	$hom = $_POST["homing"];
	if ($count == 1) {
		$query = $query . " AND " . $hom . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $hom . " = '1'";
		$count = $count + 1;		
	}
}

// for Shot Cancellation
if (empty($_POST["shot_can"])) {
	$query = $query;
}
else {
	$shoc = $_POST["shot_can"];
	if ($count == 1) {
		$query = $query . " AND " . $shoc . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $shoc . " = '1'";
		$count = $count + 1;		
	}
}

// for Auto Up
if (empty($_POST["auto_up"])) {
	$query = $query;
}
else {
	$auup = $_POST["auto_up"];
	if ($count == 1) {
		$query = $query . " AND " . $auup . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $auup . " = '1'";
		$count = $count + 1;		
	}
}

// for Power-up at Full Health
if (empty($_POST["power_fullh"])) {
	$query = $query;
}
else {
	$powerfull = $_POST["power_fullh"];
	if ($count == 1) {
		$query = $query . " AND " . $powerfull . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $powerfull . " = '1'";
		$count = $count + 1;		
	}
}

// for Emergency Evasion
if (empty($_POST["emer_eva"])) {
	$query = $query;
}
else {
	$emev = $_POST["emer_eva"];
	if ($count == 1) {
		$query = $query . " AND " . $emev . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $emev . " = '1'";
		$count = $count + 1;		
	}
}

// for Emergency Power-up
if (empty($_POST["emer_power"])) {
	$query = $query;
}
else {
	$empow = $_POST["emer_power"];
	if ($count == 1) {
		$query = $query . " AND " . $empow . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $empow . " = '1'";
		$count = $count + 1;		
	}
}

// for Heart Get
if (empty($_POST["heart"])) {
	$query = $query;
}
else {
	$hea = $_POST["heart"];
	if ($count == 1) {
		$query = $query . " AND " . $hea . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $hea . " = '1'";
		$count = $count + 1;		
	}
}

// for Negative modifiers
if (empty($_POST["negative"])) {
	$query = $query;
}
else {
	$neg = $_POST["negative"];
	if ($count == 1) {
		$query = $query . " AND " . $neg . " = '1'";	
	}
	else {
		$query = $query . " WHERE " . $neg . " = '1'";
		$count = $count + 1;		
	}
}

// test
// echo $query;

$result = mysql_query($query);

// Put results into table
$table = '<table border="1" align="center"><tr><td>Weapon Name</td><td>Cost</td></tr>';

while($row = mysql_fetch_array($result))
  {
  $table = $table . "<tr><td>" . $row['Weapon_Name'] . "</td><td>" . $row['Cost'] . "</td></tr>";
//  echo $row['Weapon_Name'] . " " . $row['Cost'];
//  echo "<br />";
  }
  
$table = $table . '</tr></table>';
echo $table;

mysql_close($con);
?> 

<br>
<hr/>
<p align="center"><a href="icaruspage.html">Kid Icarus home</a></p>

</body>
</html>