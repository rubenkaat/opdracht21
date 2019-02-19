<?php
date_default_timezone_set('CET');
$time = date("H:i");
$etime = "<p>HET IS NU $time UUR</p>";
if ($time < 6) {
	$bg = "IMG/night.png";
    $egreet = "<p>Goede Nacht !</p>";
}
 if ($time >= 6 && $time < 12 ) {
	$bg = "IMG/morning.png";
    $egreet = "<p>Goede Morgen !</p>";
}
if ($time >= 12 && $time < 18) {
	$bg = "IMG/afternoon.png";
    $egreet =  "<p>Goede Middag !</p";
} 
if ($time >= 18) {
	$bg = "IMG/evening.png";
	$egreet =  "<p>Goede Avond !</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/opdracht.css"></link>
	<title>Website Week 21</title>
</head>
<body background="<?=$bg?>">

<nav id="navbar">
<?php include "Menu.php";?>
</nav>
<header id="headertje">
<?php include "Header.php";?>
</header>
<?=$etime?>
<?=$egreet?>
<footer id="footertje">
<?php include "Footer.php";?>
</footer>
</body>
</html>