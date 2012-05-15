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

if (empty($_POST["weapon"])) {
	exit("Cannot insert");
}
else {
	$query = "INSERT INTO Kid_Icarus_material_database (Weapon_Type, Weapon_Name, Cost, ";
}

// for if there is a charged shot skill
if (empty($_POST["charged"])) {
	$query = $query;
}
else {
	$charge = $_POST["charged"];
	if ($count > 0) {
		$query = $query . ", " . $charge;
		$count = $count + 1;		
	}
	else {
		$query = $query . $charge;
		$count = $count + 1;		
	}	
}

// for if there is a cont. shot skill
if (empty($_POST["cont"])) {
	$query = $query;
}
else {
	$conti = $_POST["cont"];
	if ($count > 0) {
		$query = $query . ", " . $conti;
		$count = $count + 1;		
	}
	else {
		$query = $query . $conti;
		$count = $count + 1;		
	}
}

// for Direct Combo (code is going to get long and repetitive from here...)
if (empty($_POST["direct_com"])) {
	$query = $query;
}
else {
	$dircom = $_POST["direct_com"];
	if ($count > 0) {
		$query = $query . ", " . $dircom;
		$count = $count + 1;		
	}
	else {
		$query = $query . $dircom;
		$count = $count + 1;		
	}
}

// for Direct Dash
if (empty($_POST["direct_da"])) {
	$query = $query;
}
else {
	$dirda = $_POST["direct_da"];
	if ($count > 0) {
		$query = $query . ", " . $dirda;
		$count = $count + 1;		
	}
	else {
		$query = $query . $dirda;
		$count = $count + 1;		
	}
}

// for Item Attack
if (empty($_POST["item"])) {
	$query = $query;
}
else {
	$ite = $_POST["item"];
	if ($count > 0) {
		$query = $query . ", " .  $ite;
		$count = $count + 1;		
	}
	else {
		$query = $query . $ite;
		$count = $count + 1;		
	}
}

// for Power Attack
if (empty($_POST["power"])) {
	$query = $query;
}
else {
	$pow = $_POST["power"];
	if ($count > 0) {
		$query = $query . ", " . $pow;
		$count = $count + 1;		
	}
	else {
		$query = $query . $pow;
		$count = $count + 1;		
	}
}

// for Total Health
if (empty($_POST["health"])) {
	$query = $query;
}
else {
	$hel = $_POST["health"];
	if ($count > 0) {
		$query = $query . ", " . $hel;
		$count = $count + 1;		
	}
	else {
		$query = $query . $hel;
		$count = $count + 1;		
	}
}

// for Ranged Defense
if (empty($_POST["range_def"])) {
	$query = $query;
}
else {
	$randef = $_POST["range_def"];
	if ($count > 0) {
		$query = $query . ", " . $randef;
		$count = $count + 1;		
	}
	else {
		$query = $query . $randef;
		$count = $count + 1;		
	}
}

// for Direct Defense
if (empty($_POST["dir_def"])) {
	$query = $query;
}
else {
	$dirdef = $_POST["dir_def"];
	if ($count > 0) {
		$query = $query . ", " . $dirdef;
		$count = $count + 1;		
	}
	else {
		$query = $query . $dirdef;
		$count = $count + 1;		
	}
}

// for Knockback Defense
if (empty($_POST["knock_def"])) {
	$query = $query;
}
else {
	$kndef = $_POST["knock_def"];
	if ($count > 0) {
		$query = $query . ", " .  $kndef;
		$count = $count + 1;		
	}
	else {
		$query = $query . $kndef;
		$count = $count + 1;		
	}	
}

// for Effect Defense
if (empty($_POST["effect_def"])) {
	$query = $query;
}
else {
	$efdef = $_POST["effect_def"];
	if ($count > 0) {
		$query = $query . ", " . $efdef;
		$count = $count + 1;		
	}
	else {
		$query = $query . $efdef;
		$count = $count + 1;		
	}
}

// for Overall Defense
if (empty($_POST["over_def"])) {
	$query = $query;
}
else {
	$overdef = $_POST["over_def"];
	if ($count > 0) {
		$query = $query . ", " . $overdef;
		$count = $count + 1;		
	}
	else {
		$query = $query . $overdef;
		$count = $count + 1;		
	}
}

// for Stamina
if (empty($_POST["stamina"])) {
	$query = $query;
}
else {
	$stami = $_POST["stamina"];
	if ($count > 0) {
		$query = $query . ", " . $stami;
		$count = $count + 1;		
	}
	else {
		$query = $query . $stami;
		$count = $count + 1;		
	}
}

// for Overall Movement Speed
if (empty($_POST["over_move"])) {
	$query = $query;
}
else {
	$ovmov = $_POST["over_move"];
	if ($count > 0) {
		$query = $query . ", " . $ovmov;
		$count = $count + 1;		
	}
	else {
		$query = $query . $ovmov;
		$count = $count + 1;		
	}
}

// for Walking Speed
if (empty($_POST["walk_spd"])) {
	$query = $query;
}
else {
	$walspd = $_POST["walk_spd"];
	if ($count > 0) {
		$query = $query . ", " . $walspd;
		$count = $count + 1;		
	}
	else {
		$query = $query . $walspd;
		$count = $count + 1;		
	}
}

// for Running Speed
if (empty($_POST["run_spd"])) {
	$query = $query;
}
else {
	$runspd = $_POST["run_spd"];
	if ($count > 0) {
		$query = $query . ", " . $runspd;
		$count = $count + 1;		
	}
	else {
		$query = $query . $runspd;
		$count = $count + 1;		
	}
}

// for Evasion
if (empty($_POST["evasion"])) {
	$query = $query;
}
else {
	$eva = $_POST["evasion"];
	if ($count > 0) {
		$query = $query . ", " . $eva;
		$count = $count + 1;		
	}
	else {
		$query = $query . $eva;
		$count = $count + 1;		
	}
}

// for Healing
if (empty($_POST["healing"])) {
	$query = $query;
}
else {
	$heal = $_POST["healing"];
	if ($count > 0) {
		$query = $query . ", " . $heal;
		$count = $count + 1;		
	}
	else {
		$query = $query . $heal;
		$count = $count + 1;		
	}
}

// for Effect Time
if (empty($_POST["effect"])) {
	$query = $query;
}
else {
	$eff = $_POST["effect"];
	if ($count > 0) {
		$query = $query . ", " . $eff;
		$count = $count + 1;		
	}
	else {
		$query = $query . $eff;
		$count = $count + 1;		
	}
}

// for Status Attack
if (empty($_POST["status"])) {
	$query = $query;
}
else {
	$stat = $_POST["status"];
	if ($count > 0) {
		$query = $query . ", " . $stat;
		$count = $count + 1;		
	}
	else {
		$query = $query . $stat;
		$count = $count + 1;		
	}
}

// for Range
if (empty($_POST["range"])) {
	$query = $query;
}
else {
	$ran = $_POST["range"];
	if ($count > 0) {
		$query = $query . ", " . $ran;
		$count = $count + 1;		
	}
	else {
		$query = $query . $ran;
		$count = $count + 1;		
	}
}

// for Homing
if (empty($_POST["homing"])) {
	$query = $query;
}
else {
	$hom = $_POST["homing"];
	if ($count > 0) {
		$query = $query . ", " . $hom;
		$count = $count + 1;		
	}
	else {
		$query = $query . $hom;
		$count = $count + 1;		
	}
}

// for Shot Cancellation
if (empty($_POST["shot_can"])) {
	$query = $query;
}
else {
	$shoc = $_POST["shot_can"];
	if ($count > 0) {
		$query = $query . ", " . $shoc;
		$count = $count + 1;		
	}
	else {
		$query = $query . $shoc;
		$count = $count + 1;		
	}
}

// for Auto Up
if (empty($_POST["auto_up"])) {
	$query = $query;
}
else {
	$auup = $_POST["auto_up"];
	if ($count > 0) {
		$query = $query . ", " . $auup;
		$count = $count + 1;		
	}
	else {
		$query = $query . $auup;
		$count = $count + 1;		
	}
}

// for Power-up at Full Health
if (empty($_POST["power_fullh"])) {
	$query = $query;
}
else {
	$powerfull = $_POST["power_fullh"];
	if ($count > 0) {
		$query = $query . ", " . $powerfull;
		$count = $count + 1;		
	}
	else {
		$query = $query . $powerfull;
		$count = $count + 1;		
	}
}

// for Emergency Evasion
if (empty($_POST["emer_eva"])) {
	$query = $query;
}
else {
	$emev = $_POST["emer_eva"];
	if ($count > 0) {
		$query = $query . ", " . $emev;
		$count = $count + 1;		
	}
	else {
		$query = $query . $emev;
		$count = $count + 1;		
	}
}

// for Emergency Power-up
if (empty($_POST["emer_power"])) {
	$query = $query;
}
else {
	$empow = $_POST["emer_power"];
	if ($count > 0) {
		$query = $query . ", " . $empow;
		$count = $count + 1;		
	}
	else {
		$query = $query . $empow;
		$count = $count + 1;		
	}
}

// for Heart Get
if (empty($_POST["heart"])) {
	$query = $query;
}
else {
	$hea = $_POST["heart"];
	if ($count > 0) {
		$query = $query . ", " . $hea;
		$count = $count + 1;		
	}
	else {
		$query = $query . $hea;
		$count = $count + 1;		
	}
}

// for Negative modifiers
if (empty($_POST["negative"])) {
	$query = $query;
}
else {
	$neg = $_POST["negative"];
	if ($count > 0) {
		$query = $query . ", " . $neg;
		$count = $count + 1;		
	}
	else {
		$query = $query . $neg;
		$count = $count + 1;		
	}
}

$type = $_POST["weapon"];
$weapnam = $_POST["name"];
$weapcos = $_POST["cost"];	

$query = $query . ") VALUES ('$type', '$weapnam', '$weapcos'";
$countdown = 0;
while ($countdown < $count) {
	$query = $query	. ", '1'";
	$countdown = $countdown + 1;
}

$query = $query . ")";
mysql_query($query) or die(mysql_error());

echo "Database updated!";

$receive = "SELECT * FROM Kid_Icarus_material_database";
$result = mysql_query($receive);
// Put results into table
$table = '<table border="1" align="center"><tr><td>Weapon Name</td><td>Cost</td></tr>';

while($row = mysql_fetch_array($result))
  {
  $table = $table . "<tr><td>" . $row['Weapon_Name'] . "</td><td>" . $row['Cost'] . "</td></tr>";
  }
  
$table = $table . '</tr></table>';
echo $table;

?>

<br>
<hr/>
<p align="center"><a href="icaruspage.html">Kid Icarus home</a></p>
</body>
</html>