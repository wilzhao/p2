<?php
/*
$words[0] = "word";
$words[1] = "words";
$words[2] = "bracket";
$words[3] = "side";
$words[4] = "for";
$words[5] = "flexibility";
$words[6] = "abase";
$words[7] = "nightmare";
$words[8] = "little";
*/
$words = file("english-words.10");

$symbols = Array("!","@","#","$","%","^","&","*","(",")","~","`");
function getRandomValueFromArray($array){
	return $array[rand(0,count($array))];
}

function getStringOfWords($numWords,$capitalize){
	global $words;
	while ($numWords > 0){
		$wordToAdd = getRandomValueFromArray($words);
		if ($capitalize == "on"){
			$wordToAdd = ucfirst($wordToAdd);
		}
		$wordString.= $wordToAdd." ";
		$numWords--;
	}
	
	return $wordString;
}

function getNumber($includeNumber){
	if ($includeNumber == "on"){
		return rand(0,9);
	}
}

function getSymbols($includeSymbol,$numSymbols){
	global $symbols;
	if ($includeSymbol == "on"){
		while ($numSymbols > 0){
			$symbolString .= getRandomValueFromArray($symbols);
			$numSymbols--;
		}
	}
	return $symbolString;
}

function getPassword($numWords,$includeNumber,$includeSymbol,$numSymbols,$capitalize){
	global $words,$symbols;
	$password = getStringOfWords($numWords,$capitalize);
	$password .= getNumber($includeNumber);
	$password .= getSymbols($includeSymbol,$numSymbols);

	return $password;
}