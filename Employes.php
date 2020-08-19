<?php

declare(strict_types=1);

 abstract class Employes {

	private $firstName;
	private $lastName;
	private $middleName;

	function __construct(string $firstName, string $lastName, string $middleName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->middleName = $middleName;
	}

	abstract public function getSalary() : int;

	public function getFullName() : string {
		return $this->lastName . ' ' . $this->firstName . ' ' . $this->middleName;
	}

}
