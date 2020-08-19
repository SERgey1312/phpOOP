<?php

declare(strict_types=1);
spl_autoload_register(function ($class) {
	include './' . $class . '.php';
});

class Developer extends Employes implements SalaryCounter {
	private const WORK = Developer::class;
	private $cost;
	private $rank;

	public function __construct(string $firstName, string $lastName, string $middleName, string $rank) {
		parent::__construct($firstName, $lastName, $middleName );
		$this->rank = $rank;
	}

	public function setSalary($price, $hours = null) : void {
		if(isset($hours)){
			$this->cost = $price * $hours;
		} else {
			$this->cost = $price;
		}
	}

	public function getInfo() : string {
		return $this->rank . ' ' . self::WORK . ': ' . $this->getFullName() . '; Cost: ' . $this->cost;
	}

	public function getSalary():int {
		return $this->cost;
	}
}