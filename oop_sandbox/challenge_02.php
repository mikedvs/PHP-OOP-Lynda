<?php 

    // First Tier Classes
    class Item {
        var $brand;
        var $price;
        var $availability;

        function is_available() {
            if($this->availability > 0) {
                return "Currently: " . $this->availability . " In Stock";
            } else {
                return "Not available";
            }
            
        }
    }

    // Second Tier Classes
    class Board extends Item {
        var $material;
        var $dimensions;

        function is_good_for_rain() {
            return true;
        }
    }

    // Third Tier Classes
    class Surf extends Board {
        var $glassing;
    }

    class Skate extends Board {
        var $griptape;

        function is_good_for_rain() {
            return false;
        }
    }

    class Snow extends Board {
        var $bindings;
        var $all_weather = true;

        function is_good_for_rain() {
            return $this->all_weather;
        }

    }

// DHD DX1
$dx1 = new Surf;
$dx1->brand = "DHD";
$dx1->price = 899;
$dx1->availability = 3;
$dx1->glassing = "4 x 4 x 4";

// THirtyTwo HippyFLipper Model
$hippy_flipper = new Snow;
$hippy_flipper->brand = "ThirtyTwo";
$hippy_flipper->price = 799;
$hippy_flipper->availability = 4;
$hippy_flipper->all_weather = true;

echo $hippy_flipper->is_available() . "and all weather is: " . $hippy_flipper->is_good_for_rain() ;
?>