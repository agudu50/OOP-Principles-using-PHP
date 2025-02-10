
<?php
// Bike.php
require_once 'Vehicle.php';

class Bike extends Vehicle {
    private int $engineCapacity;

    public function __construct(string $vehicleId, string $brand, string $model, bool $isAvailable, int $engineCapacity) {
        parent::__construct($vehicleId, $brand, $model, $isAvailable);
        $this->engineCapacity = $engineCapacity;
    }

    public function calculateRentalCost(int $days): float {
        return 500 * $days + $this->engineCapacity * 10;
    }
}
?>