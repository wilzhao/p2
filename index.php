<!DOCTYPE html>
<html>
<head>
	<title> xkcd Password Generator </title>
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "style.css">
	<?php require "logic.php";?>
</head>

<body>
	Password: <?php echo getRandomStringOfWords($_POST[numwords]);?>
	<br>

	Fill out the form for a password!
	<form name = "input" action = "index.php" method = "POST">	
		Number of words: <input type = "text" name = "numwords"></input><br>
		<input type = "submit"></input>
	</form>
	
</body>
</html>