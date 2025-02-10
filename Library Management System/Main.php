<?php

// index.php
require 'Book.php';
require 'Member.php';
require 'Library.php';

$library = new Library();

$book1 = new Book("B001", "Animal Farm", "George Orwell", 3);
$book2 = new Book("B002", "1984", "George Orwell", 2);
$book3 = new Book("B003", "Harry Potter", "J.K Rowling", 1);
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$member1 = new Member("M001", "Anthony Gudu");
$library->registerMember($member1);

echo "Available Books:\n";
$library->displayBooks();

try {
    $member1->borrowBook($book1);
    echo "\nAfter borrowing 'Animal Farm':\n";
    $library->displayBooks();

    $member1->returnBook($book1);
    echo "\nAfter returning 'Animal Farm':\n";
    $library->displayBooks();
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
