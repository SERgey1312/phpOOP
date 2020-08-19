<?php

declare(strict_types=1);
include 'Employes.php';
include 'SalaryCounter.php';

class Designer extends Employes implements SalaryCounter {

	const WORK = Designer::class;
	private $cost;

	public function __construct(string $firstName, string $lastName, string $middleName) {
		parent::__construct($firstName, $lastName, $middleName );
	}

	public function setSalary($price, $hours = null) : void {
		if(isset($hours)){
			$this->cost = $price * $hours;
		} else {
			$this->cost = $price;
		}
	}

	public function getInfo() : string {
		return self::WORK . ': ' . $this->getFullName() . '; Cost: ' . $this->cost;
	}

	public function getSalary():int {
		return $this->cost;
	}
}