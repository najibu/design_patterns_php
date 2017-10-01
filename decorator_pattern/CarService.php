<?php


interface CarService
{
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService
{
    protected $carservice;

    public function __construct(CarService $carservice)
    {
        $this->carservice = $carservice;
    }

    public function getCost()
    {
        return 29 + $this->carservice->getCost();
    }

    public function getDescription()
    {
        return $this->carservice->getDescription() . ', and oil change';
    }
}

class TireRotation implements CarService
{
    protected $carservice;

    public function __construct(CarService $carservice)
    {
        $this->carservice = $carservice;
    }

    public function getCost()
    {
        return 15 + $this->carservice->getCost();
    }

    public function getDescription()
    {
        return $this->carservice->getDescription() . ', and tire rotation';
    }
}

$service = new OilChange(new TireRotation(new BasicInspection));
echo $service->getCost();
