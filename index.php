<?php

include_once 'ProjectX.php';
try{
	$projectX = new ProjectX();
	$projectX->setDevelopers();
	$projectX->setCost();
	foreach($projectX->getEmployes() as $key){
		echo $key->getInfo() . "<br>";
	}
	echo 'Total cost of the project: '.$projectX->getPrice();
} catch(Exception $e){
	echo 'Exception : ' . $e->getMessage();
}

