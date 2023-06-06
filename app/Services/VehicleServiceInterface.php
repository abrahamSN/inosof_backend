<?php

namespace App\Services;

interface VehicleServiceInterface
{
    public function getVehicles(): array;

    public function getVehicle(int $id): array;

    public function createVehicle(array $data): array;

    public function updateVehicle(int $id, array $data): array;

    public function deleteVehicle(int $id): bool;
}
