<?php

include_once 'ProjectX.php';
try{
	$projectX = new ProjectX();
	$projectX->setDevelopers();
	$projectX->setCost();
	foreach($projectX->getEmployes() as $key){
		echo $key->getInfo() . "<br>";
	}
	echo '<b>'.'Total cost of the project: '.$projectX->getPrice() . '</b>';
} catch(Exception $e){
	echo 'Exception : ' . $e->getMessage();
}

