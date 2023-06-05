<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository implements VehicleRepositoryInterface
{
    private $vehicleModel;

    public function __construct(Vehicle $vehicleModel)
    {
        $this->vehicleModel = $vehicleModel;
    }

    public function getVehicles(): array
    {
        return $this->vehicleModel->all()->toArray();
    }

    public function getVehicle(int $id): array
    {
        return $this->vehicleModel->find($id)->toArray();
    }

    public function createVehicle(array $data): array
    {
        return $this->vehicleModel->create($data)->toArray();
    }

    public function updateVehicle(int $id, array $data): array
    {
        $vehicle = $this->vehicleModel->find($id);
        $vehicle->update($data);

        return $vehicle->toArray();
    }

    public function deleteVehicle(int $id): bool
    {
        return $this->vehicleModel->destroy($id);
    }
}
