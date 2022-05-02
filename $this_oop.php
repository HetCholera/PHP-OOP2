<?php

class BankAccount
{
    public $amount;
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			echo "your entered amount is ", $this->amount;
			$this->balance += $amount;
			
		}
	}



	public function withdraw($amount)
	{
		if ($amount < $this->balance) {
			$this->balance -= $amount;
			echo "balance deducted";
		}
        else{
            echo "your current balance is", $this->balance ,"<br>","and you trying to withdrow ", $amount , "<br>"," ab nikal yaha se";
        }

	}

	public function getBalance()
	{
		echo $this->balance."<br />";
	}

}
// create a new account object
$account = new BankAccount();
$account2 = new BankAccount();

$account->accountNumber = 1;
// $account2->balance = 1; 
$account->getBalance();
$account->deposit(5000);
$account->getBalance();
// $account->deposit(200);
// $account->getBalance();
// $account->deposit(300);
// $account->getBalance();
// $account2->getBalance();
// $account->withdraw(6000);
// // $account->getBalance();
// $account->deposit(5000);
// $account->getBalance();
// $account->withdraw(12000);
// $account->getBalance();
$account->withdraw(60000);

?>  