<?php 

echo "this exists";
class Board {

    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year = 'Unknown';
    public $category;
    public $description;
    private $weight_kg = 0.2;
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
echo "that exists";
?>