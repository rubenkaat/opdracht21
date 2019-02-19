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
$numbero = rand(10,100);
$numberu = rand(10,100);
	echo($numbero + $numberu. "<br>");
	echo($numbero - $numberu. "<br>");
	echo($numbero * $numberu. "<br>");
	echo($numbero / $numberu. "<br>");
?>
<footer>
<?php include "Footer.php";?>
</footer>
</body>
</html>