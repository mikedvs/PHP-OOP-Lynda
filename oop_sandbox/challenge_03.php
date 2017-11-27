<?php 

class Board {
    public $brand;
    public $model;
    public $year = 'Unknown';
    public $description;
    private $weight_kg = 0.0;
    protected $wheels = 2;

    public function name() {
        return $this->brand . " is a " . $this->model . " with " . $this->wheels . "wheels";
    }

    public function weight_lbs() {
        $conv_multpiplier = 2.2046226218;
        $converted = floatval($this->weight_kg) * $conv_multpiplier;
        return $converted;
    }

    public function set_weight_kg($value) {
        $this->weight_kg = floatval($value);
    }

    public function get_weight_kg() {
        return $this->weight_kg;
    }
}

// Subclass
class SkateBoard extends Board {

    protected $wheels = 4;
}

class SurfBoard extends Board {
    
    protected $wheels = 0;
}

// Board 1

$Deck1 = new SkateBoard;
$Deck1->brand = 'Girl';
$Deck1->model = 'Rick Howard';
$Deck1->year = 93;
$Deck1->description = "Rick Howard pro model";
$Deck1->set_weight_kg(1.2);

// SkateBoard 2

$Deck2 = new SkateBoard;
$Deck2->brand = 'Plan B';
$Deck2->model = 'Chris Cole';
$Deck2->year = 2015;
$Deck2->description = "Chris Cole ripper model";
$Deck2->set_weight_kg(1.25);

// Print to Screen 
echo $Deck1->name() . "<hr />";
echo $Deck2->name() . "<hr />";

echo $Deck1->get_weight_kg() . " kgs" . "<hr />";
echo $Deck2->get_weight_kg() . " kgs" . "<hr />";


?>