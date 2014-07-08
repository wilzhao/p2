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
		xkcd Password Generator
	</h1>
	<br>
	<div class = "introduction">
		Welcome to an xkcd password generator!<br>
		xkcd is a popular webcomic written by Randall Munroe and can be found 
		<a href = "http://xkcd.com"> here</a>.
		<br>
		This password generator is inspired by the 936th comic, reproduced below. It itself stems from the
		way passwords need to be created to be more secure according to a growing set of seemingly arbitrary
		rules that would make it more difficult to remember while still being relatively easy to guess with a
		computer. The generator instead takes the premise of the comic and simply generates a string of English
		words that one could easily envision and remember while being difficult to guess.
	</div>
	<h1>
		<img src = "http://imgs.xkcd.com/comics/password_strength.png" alt = "xkcd-comic">
		<br>

		Password: <?php echo getPassword($_POST[numWords],
										$_POST[includeNumber],
   										$_POST[includeSymbol],
   										$_POST[numSymbols],
 										$_POST[capitalize],
 										$_POST[subset]);?>
	</h1>	
	<br>
	
	Fill out the form for an xkcd-esque password!
	<form name = "input" action = "index.php" method = "POST">	
		Number of words: <input type = "text" name = "numWords"><br>
		Include a number: <input type = "checkbox" name = "includeNumber"><br>
		Include a special symbol: <input type = "checkbox" name = "includeSymbol"> How many symbols? <input type = "text" name = "numSymbols"> <br>
		Capitalize first letter of every word: <input type = "checkbox" name = "capitalize"><br>
		English subset: <select name = "subset">
		<option value = "english-words.10">Common words</option>
		<option value = "english-words.80">Common and obscure words</option> 
		</select>
		<input type = "submit">
	</form>
	
</body>
</html>