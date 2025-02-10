<?php
require_once 'Doctor.php';
require_once 'Nurse.php';
require_once 'Pharmacist.php';

// Creating an array of MedicalPersonnel
$personnel = [];

// Adding one Doctor, one Nurse, and one Pharmacist
$personnel[] = new Doctor("Dr. Anthony Gudu", "D001", "Cardiologist");
$personnel[] = new Nurse("Kessiah Gudu", "N522", "Emergency");
$personnel[] = new Pharmacist("Daniel Gudu", "D642", "PHL00585");

// Loop through the array to display details, duties, and specialization
foreach ($personnel as $person) {
    $person->displayDetails();
    $person->performDuties();
    echo $person->getSpecialization() . PHP_EOL;
    echo PHP_EOL; // Adding space for readability
}
?>