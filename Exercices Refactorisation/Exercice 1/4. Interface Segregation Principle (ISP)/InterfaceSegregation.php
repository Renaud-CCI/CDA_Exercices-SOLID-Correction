<?php

// TODO refactoriser le code pour respecter le Principe de Ségregation des Interface de la programmation SOLID

interface Runnable
{
	public function run();
}

interface Turnable
{
	public function turnOn();
}

interface Fuelable
{
	public function fuel();
}

class Motorcycle implements Runnable, Fuelable, Turnable
{
	public function turnOn()
	{
		echo 'Motorcycle Turning on...';
	}

	public function run()
	{
		echo 'Motorcycle running...';
	}

	public function fuel()
	{
		echo 'Fuel the Motorcycle';
	}
}

class Bicycle implements Runnable 
{
	public function run() 
	{
		echo 'Bicycle running...';
	}
}