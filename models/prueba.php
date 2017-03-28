<?php
include 'player.php';
include 'vars.php';

// create object and add object to arrayObjects
$playersArray = array();
for ($i=1; $i < (count($players)+1); $i++) { 		
	$player1 = new Player($players[$i]);
	array_push($playersArray, $player1);
}

// create <li> for arrayObjects
echo "<ul>";
for ($i=1; $i < (count($playersArray)+1); $i++) { 
	echo "<li>".$playersArray[$i]->getNick()."</li>";
}
echo "</ul>";
