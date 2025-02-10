<?php
// Library.php

require_once 'Member.php';

class Library {
private array $books = [];
private array $members = [];

public function addBook(Book $book): void {
$this->books[] = $book;
}

public function registerMember(Member $member): void {
$this->members[] = $member;
}

public function searchBookByTitle(string $title): ?Book {
foreach ($this->books as $book) {
if (strcasecmp($book->getTitle(), $title) === 0) {
return $book;
}
}
throw new InvalidArgumentException("Book not found");
}

public function displayBooks(): void {
foreach ($this->books as $book) {
echo $book . "\n";
}
}
}
?>