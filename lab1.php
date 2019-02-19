<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/week1.css"></link>
	<title>Website Week 21</title>
</head>
<body>

<nav>
<?php include "Menu.php";?>
</nav>
<header>
<?php include "Header.php";?>
</header>

<?php
$fruits = array("banaan", "appel", "sinaasappel", "mandarijn", "druif", "mango", "kiwi", "ananas");
foreach ($fruits as $value) {
	echo "$value <br>";
}
?>

<footer>
<?php include "Footer.php";?>
</footer>

</body>
</html>