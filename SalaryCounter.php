<?php
declare(strict_types=1);

interface SalaryCounter {
	public  function setSalary ($price, $hours = null);
}