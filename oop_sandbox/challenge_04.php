
<?php 

class Board {

    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year = 'Unknown';
    public $category;
    public $description;
    private $weight_kg = 0.0;
    protected $wheels = 2;

    public const CATEGORIES = ['Bowl', 'Vert', 'Reef', 'PointBreak', 'Slab', 'Street'];

    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;
        // $obj = new static
        self::$instance_count++;
        return $obj;
    }

    public function name() {
        return $this->brand . " is a " . $this->model . " with " . $this->wheels . "wheels and weighs" . $this->get_weight_kg();
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
$Deck1->category = Board::CATEGORIES[0];
$Deck1->year = 93;
$Deck1->description = "Rick Howard pro model";
$Deck1->set_weight_kg(1.2);

echo $Deck1->category . "<hr />";
// SkateBoard 2

$Deck2 = new SkateBoard;
$Deck2->brand = 'Plan B';
$Deck2->model = 'Chris Cole';
$Deck2->year = 2015;
$Deck2->description = "Chris Cole ripper model";
$Deck2->set_weight_kg(1.25);


echo get_parent_class($Deck1) . "<hr />";
echo is_subclass_of( $Deck1 ,'Board'). "<hr />";
echo get_parent_class($Deck2) . "<hr />";
echo is_subclass_of( $Deck2 ,'Board'). "<hr />";
// Print to Screen 
echo $Deck1->name() . "<hr />";
echo $Deck2->name() . "<hr />";
echo 'Board count: ' . Board::$instance_count . "<br />";
echo 'SkateBoard count: ' . SkateBoard::$instance_count . "<br />";

//new public static functions testing
echo "new public static functions testing" . "<hr />";
$Deck3 = SkateBoard::create();
$Surf1 = SurfBoard::create();
echo 'Board count: ' . Board::$instance_count . "<br />";
echo 'SurfBoard count: ' . SurfBoard::$instance_count . "<br />";


?>