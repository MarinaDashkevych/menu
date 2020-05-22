<?php

require_once 'product.php';
require_once 'classes\Dishes.php';

class Drink extends Dishes
{
    protected $volume = 0;

    public function __construct($name, $price, $volume)
    {
        parent::__construct($name, $price);
        $this->volume = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

}