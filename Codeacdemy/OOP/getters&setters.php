<?php
class Beverage
{
    private $color;

    function setColor($color)
    {
        $this->color = strtolower($color);
    }

    function getColor()
    {
        return $this->color;
    }
}

$soda = new Beverage();