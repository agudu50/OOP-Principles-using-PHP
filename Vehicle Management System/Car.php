// Car.php
<?php
require_once 'Vehicle.php';

class Car extends Vehicle {
    private int $seatingCapacity;

    public function __construct(string $vehicleId, string $brand, string $model, bool $isAvailable, int $seatingCapacity) {
        parent::__construct($vehicleId, $brand, $model, $isAvailable);
        $this->seatingCapacity = $seatingCapacity;
    }

    public function calculateRentalCost(int $days): float {
        return 1000 * $days + $this->seatingCapacity * 50;
    }
}
?>