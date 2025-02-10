<?php
require_once 'BankAccount.php';

class SavingsAccount extends BankAccount {
    private float $interestRate;

    // Constructor
    public function __construct(string $accountHolderName, string $accountNumber, float $balance, float $interestRate) {
        parent::__construct($accountHolderName, $accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    // Override withdraw method
    public function withdraw(float $amount) {
        if ($this->getBalance() - $amount >= 100) { // Minimum balance requirement
            $this->setBalance($this->getBalance() - $amount);
            echo "Withdrawal successful. New balance: GHS " . $this->getBalance() . PHP_EOL;
        } else {
            echo "Minimum balance requirement not met." . PHP_EOL;
        }
    }

    // Calculate interest
    public function calculateInterest() {
        $interest = $this->getBalance() * ($this->interestRate / 100);
        echo "Annual Interest: GHS " . $interest . PHP_EOL;
    }

    // Override displayAccountDetails
    public function displayAccountDetails() {
        parent::displayAccountDetails();
        echo "Interest Rate: " . $this->interestRate . "%" . PHP_EOL;
    }

    public function displayAccounDetails() {}
}
?>