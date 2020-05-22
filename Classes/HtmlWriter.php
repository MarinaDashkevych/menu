<?php


class HtmlWriter
{

    static public function writeTittleAndPrice(Dishes $product)
    {
        $str = '';
        $str .= '<h2>' . $product->getName() . '</h2>';
        $str .= '<p> Price: ' . $product->getPrice() . '</p>';
        return $str;
    }

    static public function writeFood(Food $food)
    {
        $str = '<div>';
        $str .= self::writeTittleAndPrice($food);
        $str .= '<p> Description: ' . $food->getDescription() . '</p>';
        $str .= '<p> Weight: ' . $food->getWeight() . '</p>';

        $vegetarian = 'No';
        if ($food->isVegetarian()) {
            $vegetarian = 'Yes';
        }

        $str .= '<p> Vegetarian: ' . $vegetarian . '</p>';
        $str .= '</div>';

        return $str;
    }

    static public function writeDrink(Drink $drink)
    {
        $str = '<div>';
        $str .= self::writeTittleAndPrice($drink);
        $str .= '<p> Volume: ' . $drink->getVolume() . '</p>';
        $str .= '</div>';
        return $str;
    }
}
