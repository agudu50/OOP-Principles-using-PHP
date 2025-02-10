<?php
// Member.php
class Member {
private string $memberId;
private string $name;
private array $borrowedBooks = [];

public function __construct(string $memberId, string $name) {
$this->memberId = $memberId;
$this->name = $name;
}

public function borrowBook(Book $book): void {
if (in_array($book, $this->borrowedBooks, true)) {
throw new InvalidArgumentException("Book already borrowed by this member");
}
$book->borrowBook();
$this->borrowedBooks[] = $book;
}

public function returnBook(Book $book): void {
if (($key = array_search($book, $this->borrowedBooks, true)) !== false) {
$book->returnBook();
unset($this->borrowedBooks[$key]);
} else {
throw new InvalidArgumentException("This book was not borrowed by the member");
}
}

public function __toString(): string {
return "Member [ID: {$this->memberId}, Name: {$this->name}, Borrowed Books: " . count($this->borrowedBooks) . "]";
}
}
?>