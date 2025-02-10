<?php
require_once 'MedicalPersonnel.php';

class Pharmacist extends MedicalPersonnel {
    private string $pharmacistLicenseId;

    // Constructor
    public function __construct(string $name, string $id, string $pharmacistLicenseId) {
        parent::__construct($name, $id);
        $this->pharmacistLicenseId = $pharmacistLicenseId;
    }

    // Implement performDuties method
    public function performDuties() {
        echo "Pharmacist " . $this->getName() . " dispenses medication and advises patients on drug usage." . PHP_EOL;
    }

    // Implement getSpecialization method
    public function getSpecialization(): string {
        return "Pharmacy";
    }

    public function __toString(): string {
        return "Specialization: " . $this->getSpecialization();
    }
}
?>