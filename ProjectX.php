<?php

declare(strict_types=1);
spl_autoload_register(function ($class) {
	include './' . $class . '.php';
});

class ProjectX {
	const PROJECT_NAME = ProjectX::class;
	private $price;
	private $employes;

	public function setDevelopers(): void {
		$designer = new Designer('Ivan', 'Ivanov', 'Ivanovich');
		$designer->setSalary(3000);
		$seniorDeveloper = new Developer('Max', 'Maximov', 'Maximovich', 'Senior');
		$seniorDeveloper->setSalary(10, 65);
		$middleDeveloper1 = new Developer('Andrey', 'Andreev', 'Andreevich', 'Middle');
		$middleDeveloper1->setSalary(1000);
		$middleDeveloper2 = new Developer('Nikita', 'Nikov', 'Nikitivich', 'Middle');
		$middleDeveloper2->setSalary(1000);
		$layoutDesigner = new LayoutDesigner('Anna', 'Kulikova', 'Sergeevna');
		$layoutDesigner->setSalary(5, 120);

		$this->employes = [$designer, $seniorDeveloper, $middleDeveloper1, $middleDeveloper2, $layoutDesigner];
	}

	public function setCost() : void {
		if(!isset($this->cost)){
			$this->cost = 0;
			foreach($this->employes as $key){
				$this->price += $key->getSalary();
			}
		} else{
			throw new Exception('already been counted');
		}

	}

	public function getPrice() : int{
		return $this->price;
	}

	public function getEmployes() : array {
		return $this->employes;
	}

}