<?php

$words[0] = "word";
$words[1] = "words";
$words[2] = "bracket";
$words[3] = "side";
$words[4] = "for";
$words[5] = "flexibility";
$words[6] = "abase";
$words[7] = "nightmare";
$words[8] = "little";

function getRandomWord(){
	global $words;
	return $words[rand(0,count($words))];
}

function getRandomStringOfWords($numWords){
	
	while ($numWords > 0){
		$wordString.= getRandomWord()." ";
		$numWords--;
	}
	return $wordString;
}