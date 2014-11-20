<?php 
// Connect DB
$connect=mysql_connect("localhost","root","root") or die("Unable to Connect");
mysql_select_db("db_quiz") or die("Could not open the db");

// Assign Question Variables
$Q1 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q1']))));
$Q2 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q2']))));
$Q3 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q3']))));
$Q4 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q4']))));
$Q5 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q5']))));
$Q6 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q6']))));
$Q7 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q7']))));
$Q8 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q8']))));
$Q9 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q9']))));
$Q10 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q10']))));

// Query crew_map to find the result of each Question
$query = "SELECT result FROM quiz_key WHERE question IN ('$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10')";
$result = mysql_query($query);

$cat_a = $cat_b = $cat_c = $cat_d = $cat_e = 0;
while($row = mysql_fetch_array($result)) {
	$cat = $row['category'];
	if ($cat == "A") {
		$cat_a += 1;
	} elseif ($cat == "B") {
		$cat_b += 1;
	} elseif ($cat == "C") {
		$cat_c += 1;
	} elseif ($cat == "D") {
		$cat_d += 1;
	} elseif ($cat == "E") {
		$cat_e += 1;
	}
}

$array = array('A' => $cat_a, 'B' => $cat_b, 'C' => $cat_c, 'D' => $cat_d, 'E' => $cat_e);
$str = "";

foreach ($array as $i => $value) {
	if ($value >= 6) {		
		$str = $i;
		break;
    } elseif ($value >= 2) {		
		$str .= $i;
    }
}

// Retrieve crew_member, crew_position, crew_img and crew_bio from crew table based on $category
$query = "SELECT result FROM quiz_map WHERE category_result = '$str' LIMIT 1";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
echo json_encode($row);
?>