RentalManager.php
<?php
require_once 'Vehicle.php';

class RentalManager {
    private array $vehicles = [];

    public function addVehicle(Vehicle $vehicle): void {
        $this->vehicles[] = $vehicle;
    }

    public function displayAvailableVehicles(): void {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->isAvailable()) {
                echo "Vehicle ID: {$vehicle->getVehicleId()}, Brand: {$vehicle->getBrand()}, Model: {$vehicle->getModel()}\n";
            }
        }
    }

    public function rentVehicleById(string $vehicleId): void {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getVehicleId() === $vehicleId) {
                try {
                    $vehicle->rentVehicle();
                    echo "Vehicle rented successfully.\n";
                    return;
                } catch (Exception $e) {
                    echo $e->getMessage() . "\n";
                    return;
                }
            }
        }
        echo "Vehicle with ID $vehicleId not found.\n";
    }

    public function returnVehicleById(string $vehicleId): void {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getVehicleId() === $vehicleId) {
                $vehicle->returnVehicle();
                echo "Vehicle returned successfully.\n";
                return;
            }
        }
        echo "Vehicle with ID $vehicleId not found.\n";
    }
}
?>