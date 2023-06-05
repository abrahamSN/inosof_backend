<?php

namespace App\Services;

use App\Repositories\VehicleRepositoryInterface;

class VehicleService implements VehicleServiceInterface
{
    private $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function getVehicles(): array
    {
        return $this->vehicleRepository->getVehicles();
    }

    public function getVehicle(int $id): array
    {
        return $this->vehicleRepository->getVehicle($id);
    }

    public function createVehicle(array $data): array
    {
        return $this->vehicleRepository->createVehicle($data);
    }

    public function updateVehicle(int $id, array $data): array
    {
        return $this->vehicleRepository->updateVehicle($id, $data);
    }

    public function deleteVehicle(int $id): bool
    {
        return $this->vehicleRepository->deleteVehicle($id);
    }
}
