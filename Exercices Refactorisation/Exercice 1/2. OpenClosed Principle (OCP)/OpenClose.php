<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

abstract class Vehicle 
{
    abstract public function turnOn();
    public function run(){}
}

class Motorcycle extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the motorcycle';
    }
}

class Car extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the car';
    }
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        $vehicle->turnOn();
        $vehicle->run();
    }
}