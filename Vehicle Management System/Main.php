
<?php
// Main.php
require_once 'Car.php';
require_once 'Bike.php';
require_once 'RentalManager.php';

$rentalManager = new RentalManager();

$car1 = new Car("C001", "Toyota", "Camry", true, 5);
$car2 = new Car("C002", "Honda", "Accord", true, 4);
$bike1 = new Bike("B001", "Yamaha", "R15", true, 150);
$bike2 = new Bike("B002", "Kawasaki", "Ninja", true, 200);

$rentalManager->addVehicle($car1);
$rentalManager->addVehicle($car2);
$rentalManager->addVehicle($bike1);
$rentalManager->addVehicle($bike2);

echo "Available Vehicles:\n";
$rentalManager->displayAvailableVehicles();

echo "\nRenting vehicle C001...\n";
$rentalManager->rentVehicleById("C001");

echo "\nAvailable Vehicles after renting C001:\n";
$rentalManager->displayAvailableVehicles();

echo "\nReturning vehicle C001...\n";
$rentalManager->returnVehicleById("C001");

echo "\nAvailable Vehicles after returning C001:\n";
$rentalManager->displayAvailableVehicles();

echo "\nRental cost for car C001 for 5 days: GHS " . $car1->calculateRentalCost(5) . "\n";
echo "Rental cost for bike B001 for 3 days: GHS " . $bike1->calculateRentalCost(3) . "\n";
?>