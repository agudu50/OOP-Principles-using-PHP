<?php
require_once 'MedicalPersonnel.php';

class Nurse extends MedicalPersonnel {
    private string $department;

    // Constructor
    public function __construct(string $name, string $id, string $department) {
        parent::__construct($name, $id);
        $this->department = $department;
    }

    // Implement performDuties method
    public function performDuties() {
        echo "Nurse " . $this->getName() . " provides patient care, administers medications, and assists doctors." . PHP_EOL;
    }

    // Implement getSpecialization method
    public function getSpecialization(): string {
        return $this->department;
    }

    public function __toString(): string {
        return "Specialization: " . $this->getSpecialization();
    }
}
?>