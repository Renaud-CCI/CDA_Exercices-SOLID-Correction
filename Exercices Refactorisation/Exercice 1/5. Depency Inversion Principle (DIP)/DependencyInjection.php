<?php

// TODO refactoriser le code pour respecter le Principe de d'Invertion de Dépendence de la programmation SOLID
interface Device
{
    public function on();
}


class Computer implements Device
{
    public function on() {}
}

class Button 
{
    /**
     * @var Device
     */
    private $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function activate()
    {
        if (condition) { //some condition
            $this->device->on();
        }
    }
}