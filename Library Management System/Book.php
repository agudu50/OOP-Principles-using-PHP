<?php
// Book.php
class Book {
private string $bookId;
private string $title;
private string $author;
private int $availableCopies;

public function __construct(string $bookId, string $title, string $author, int $availableCopies) {
$this->bookId = $bookId;
$this->title = $title;
$this->author = $author;
$this->setAvailableCopies($availableCopies);
}

public function getBookId(): string { return $this->bookId; }
public function getTitle(): string { return $this->title; }
public function getAuthor(): string { return $this->author; }
public function getAvailableCopies(): int { return $this->availableCopies; }

public function setAvailableCopies(int $availableCopies): void {
if ($availableCopies < 0) {
throw new InvalidArgumentException("Available copies cannot be negative");
}
$this->availableCopies = $availableCopies;
}

public function borrowBook(): void {
if ($this->availableCopies > 0) {
$this->availableCopies--;
} else {
throw new InvalidArgumentException("No copies available to borrow");
}
}

public function returnBook(): void {
$this->availableCopies++;
}

public function __toString(): string {
return "Book [ID: {$this->bookId}, Title: {$this->title}, Author: {$this->author}, Available Copies: {$this->availableCopies}]";
}
}

?>
