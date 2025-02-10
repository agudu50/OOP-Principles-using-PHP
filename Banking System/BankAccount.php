<?php

abstract class BankAccount {
    protected string $accountHolderName;
    protected string $accountNumber;
    protected float $balance;

    // Constructor
    public function __construct(string $accountHolderName, string $accountNumber, float $balance) {
        $this->accountHolderName = $accountHolderName;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    // Deposit methods (Method Overloading in PHP is handled via optional parameters)
    public function deposit(float $amount, string $transactionNote = "") {
        $this->balance += $amount;
        echo "Deposited successfully. " . ($transactionNote ? $transactionNote . " " : "") . "New balance is: GHS " . $this->balance . PHP_EOL;
    }

    // Withdraw method
    public function withdraw(float $amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawal successful. New balance is: GHS " . $this->balance . PHP_EOL;
        } else {
            echo "Insufficient funds." . PHP_EOL;
        }
    }

    // Display account details
    public function displayAccountDetails() {
        echo "Account Holder Name: " . $this->accountHolderName . PHP_EOL;
        echo "Account Number: " . $this->accountNumber . PHP_EOL;
        echo "Balance: GHS " . $this->balance . PHP_EOL;
    }

    // Getter and Setter for balance (for use in subclasses)
    protected function getBalance(): float {
        return $this->balance;
    }

    protected function setBalance(float $balance) {
        $this->balance = $balance;
    }

    // Abstract method (must be implemented in subclasses)
    abstract public function displayAccounDetails();
}
?>