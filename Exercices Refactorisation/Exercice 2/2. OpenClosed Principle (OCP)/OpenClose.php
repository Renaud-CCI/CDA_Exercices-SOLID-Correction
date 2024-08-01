<?php

namespace OCPViolation;

interface VehicleInterface{
    public function putGasIn();
    public function setTank($tank);
}

abstract class Vehicle implements VehicleInterface{
    protected $tank;

    public function setTank($tank){
        $this->tank = $tank;
    }
}

class Car extends Vehicle
{
    public function putGasIn()
    {
        $this->setTank(50);
    }
}

class Motorcycle extends Vehicle
{
    public function putGasIn()
    {
        $this->setTank(20);
    }
}

class GasStation
{

    public function putGasInVehicle(VehicleInterface $vehicle)
    {
        $vehicle->putGasIn();
    }
}