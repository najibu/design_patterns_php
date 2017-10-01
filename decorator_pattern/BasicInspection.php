<?php

// Rewrite this to decorator pattern

class BasicInspection
{
    public function getCost()
    {
        return 19;
    }
}

class BasicInspectionAndOilChange
{
    public function getCost()
    {
        return 19 + 19;
    }
}

class BasicInspectionAndOilChangeAndTireRotation
{
    public function getCost()
    {
        return 19 + 19 + 10;
    }
}

echo (new BasicInspectionAndOilChangeAndTireRotation)->getCost();
