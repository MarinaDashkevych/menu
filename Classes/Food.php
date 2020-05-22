<?php
require_once 'product.php';
require_once 'classes\Dishes.php';

class Food extends Dishes
{
    protected $description = "";
    protected $vegetarian = false;
    protected $weight = 0;


    public function __construct($name, $price, $description, $vegetarian, $weight)
    {
        parent::__construct($name, $price);
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->weight = $weight;

    }

    public function getDescription()
    {
        return $this->description;
    }

    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function getWeight()
    {
        return $this->weight;
    }

}