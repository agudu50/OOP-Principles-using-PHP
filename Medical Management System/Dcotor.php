<?php
require_once 'MedicalPersonnel.php';

class Doctor extends MedicalPersonnel {
    private string $specialization;

    // Constructor
    public function __construct(string $name, string $id, string $specialization) {
        parent::__construct($name, $id);
        $this->specialization = $specialization;
    }

    // Implement performDuties method
    public function performDuties() {
        echo "Doctor " . $this->getName() . " diagnoses patients, prescribes medication, and conducts surgeries." . PHP_EOL;
    }

    // Implement getSpecialization method
    public function getSpecialization(): string {
        return $this->specialization;
    }

    public function __toString(): string {
        return "Specialization: " . $this->getSpecialization();
    }
}
?>