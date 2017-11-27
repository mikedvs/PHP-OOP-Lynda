<?php 

class Beverage {

    public $name = "Coke";

    function __construct() {
        echo "New beverage {$this->name} was created" . "<br />";
    }

    function __clone() {
        echo "existing beverage was copied" . "<br />";
    }
}

$drink = new Beverage;
$drink->name = "Banana Smoothie";
$fanta = clone $drink;
$fanta->name = "Orange Smoothie";

echo $drink->name;
echo $fanta->name;

echo '<hr />';

$c = $drink;
$c->name = 'orange juice';

echo '<hr />';

echo $drink->name;
echo $fanta->name;
echo $c->name;

?>