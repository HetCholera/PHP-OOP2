<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			echo "$this->balance += $amount";
		}
	}
}
?>