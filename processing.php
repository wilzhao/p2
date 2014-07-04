<!DOCTYPE html>
<html>
<head>
	<title> xkcd Password Generator </title>
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "style.css">
	<?php require "logic.php";?>
</head>

<body>
	<?php echo getRandomStringOfWords($_POST[numwords]);?>
</body>
</html>