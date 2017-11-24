<?php 

class Board {
    var $brand;
    var $model;
    var $year = 'Unknown';
    var $description;
    var $weight_kg;

    function name() {
        return $this->brand . " is a " . $this->model . " made in " . $this->year;
    }

    function weight_lbs() {
        $conv_multpiplier = 2.2046226218;
        $converted = floatval($this->weight_kg) * $conv_multpiplier;
        return $converted;
    }

    function set_weight_lbs($value) {
        $this->weight_kg = $value / 2.2046226218;
    }
}

// Board 1

$Deck1 = new Board;
$Deck1->brand = 'Girl';
$Deck1->model = 'Rick Howard';
$Deck1->year = 93;
$Deck1->description = "Rick Howard pro model";
$Deck1->weight_kg = 1.2;

// Board 2

$Deck2 = new Board;
$Deck2->brand = 'Plan B';
$Deck2->model = 'Chris Cole';
$Deck2->year = 2015;
$Deck2->description = "Chris Cole ripper model";
$Deck2->weight_kg = 1.25;

// Print to Screen 
echo $Deck1->name() . "<hr />";
echo $Deck2->name() . "<hr />";

echo $Deck1->weight_lbs() . " lbs" . "<hr />";
echo $Deck2->weight_lbs() . " lbs" . "<hr />";


?>