<?php

include 'ProjectX.php';
try{
	$projectX = new ProjectX();
	$projectX->setDevelopers();
	$projectX->setCost();
	echo 'Total cost of the project: '.$projectX->getPrice();
} catch(Exception $e){
	echo 'Exception : ' . $e->getMessage();
}

