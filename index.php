<!DOCTYPE html>
<html>
<head>
	<title> xkcd Password Generator </title>
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "style.css">
	<?php require "logic.php";?>
</head>

<body>
	<h1>
	Password: <?php echo getPassword($_POST[numWords],
									$_POST[includeNumber],
   									$_POST[includeSymbol],
   									$_POST[numSymbols],
 									$_POST[capitalize]);?>
	</h1>	
	<br>
	<br>
	Fill out the form for an xkcd-esque password!
	<form name = "input" action = "index.php" method = "POST">	
		Number of words: <input type = "text" name = "numWords"><br>
		Include a number: <input type = "checkbox" name = "includeNumber"><br>
		Include a special symbol: <input type = "checkbox" name = "includeSymbol"> How many symbols? <input type = "text" name = "numSymbols"> <br>
		Capitalize first letter of every word: <input type = "checkbox" name = "capitalize"><br>
		<input type = "submit">
	</form>

</body>
</html>