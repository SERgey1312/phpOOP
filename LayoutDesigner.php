<?php

declare(strict_types=1);
spl_autoload_register(function ($class) {
	include './' . $class . '.php';
});

class LayoutDesigner extends Employes implements SalaryCounter {

	private const WORK = LayoutDesigner::class;
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