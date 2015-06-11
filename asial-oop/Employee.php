<?php

class Employee extends Person
{

	private $base_salary = 200000;
	private $annual_pay_rise = 10000;
	private $service_years = 0;

	public function __construct($name, $service_years)
	{
		$this->setName($name);
		$this->setServiceYears($service_years);
	}

	public function setServiceYears($service_years)
	{
		$this->service_years = $service_years;
	}

	public function getSalary()
	{
		$salary = $this->base_salary + ($this->annual_pay_rise * $this->service_years);
		return $salary;
	}

	public function displaySalary()
	{
		echo $this->getName() . 'さんの給与は' . number_format($this->getSalary()) . '円です';
	}

}






