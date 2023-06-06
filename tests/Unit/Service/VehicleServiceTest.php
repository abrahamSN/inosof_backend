<?php

use App\Repositories\VehicleRepositoryInterface;
use App\Services\VehicleService;
use Mockery;
use PHPUnit\Framework\TestCase;

class VehicleServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_return_array_of_vehicles()
    {
        // assign
        $vehicleRepositoryMock = Mockery::mock(VehicleRepositoryInterface::class, function ($mock) {
            $mock->shouldReceive('getVehicles')->once()->andReturn([]);
        });
        $vehicleService = new VehicleService($vehicleRepositoryMock);

        // act
        $vehicles = $vehicleService->getVehicles();

        // assert
        $this->assertIsArray($vehicles);
    }

    public function test_return_object_of_vehicle_by_id()
    {
        // assign
        $vehicleRepositoryMock = Mockery::mock(VehicleRepositoryInterface::class, function ($mock) {
            $mock->shouldReceive('getVehicle')->once()->andReturn((object) []);
        });
        $vehicleService = new VehicleService($vehicleRepositoryMock);

        // act
        $vehicle = $vehicleService->getVehicle(1);

        // assert
        $this->assertIsObject($vehicle);
    }
}
