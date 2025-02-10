// Vehicle.php (Abstract Base Class)
<?php
abstract class Vehicle {
    protected string $vehicleId;
    protected string $brand;
    protected string $model;
    protected bool $isAvailable;

    public function __construct(string $vehicleId, string $brand, string $model, bool $isAvailable) {
        $this->vehicleId = $vehicleId;
        $this->brand = $brand;
        $this->model = $model;
        $this->isAvailable = $isAvailable;
    }

    public function getVehicleId(): string {
        return $this->vehicleId;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function isAvailable(): bool {
        return $this->isAvailable;
    }

    public function rentVehicle(): void {
        if ($this->isAvailable) {
            $this->isAvailable = false;
        } else {
            throw new Exception("Vehicle is not available for rent.");
        }
    }

    public function returnVehicle(): void {
        $this->isAvailable = true;
    }

    abstract public function calculateRentalCost(int $days): float;
}
?>