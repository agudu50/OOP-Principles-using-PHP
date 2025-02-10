<?php

abstract class MedicalPersonnel {
    protected string $name;
    protected string $id;

    // Constructor to initialize name and ID
    public function __construct(string $name, string $id) {
        $this->name = $name;
        $this->id = $id;
    }

    // Getter methods
    public function getName(): string {
        return $this->name;
    }

    public function getId(): string {
        return $this->id;
    }

    // Abstract methods (must be implemented in subclasses)
    abstract public function performDuties();
    abstract public function getSpecialization(): string;

    // Concrete method
    public function displayDetails() {
        echo "Name: " . $this->name . " | ID: " . $this->id . PHP_EOL;
    }

    public function __toString(): string {
        return "Specialization: " . $this->getSpecialization();
    }
}
?>