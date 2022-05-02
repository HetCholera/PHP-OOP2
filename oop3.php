<?php

class Customer
{
	private $number;

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}
}
$customer = new Customer();
$customer->setNumber('16');
echo $customer->getNumber();
?>