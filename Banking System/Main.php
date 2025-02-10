<?php
require_once 'SavingsAccount.php';
require_once 'CurrentAccount.php';

// Create SavingsAccount
$savingsAccount = new SavingsAccount("Anthony Gudu", "SA12345", 500, 3);

// Create CurrentAccount
$currentAccount = new CurrentAccount("Anthony Gudu", "CA54321", 1000, 500);

// Deposit operations
echo "\nSavings Account Deposit:\n";
$savingsAccount->deposit(200);
$savingsAccount->deposit(300, "Salary credited.");

echo "\nCurrent Account Deposit:\n";
$currentAccount->deposit(500);
$currentAccount->deposit(400, "Project payment received.");

// Withdraw operations
echo "\nSavings Account Withdrawal:\n";
$savingsAccount->withdraw(450); // Test minimum balance

echo "\nCurrent Account Withdrawal:\n";
$currentAccount->withdraw(1300); // Test overdraft limit
$currentAccount->withdraw(2000); // Exceed overdraft limit

// Display account details
echo "\nAccount Details:\n";
$savingsAccount->displayAccountDetails();
$savingsAccount->calculateInterest();

echo PHP_EOL;
$currentAccount->displayAccountDetails();
?>