<?php 

class Chef {

    public static function make_dinner() {
        echo "Cook food. <br/>";
    }
}

class AmateurChef extends Chef {

    public static function make_dinner() {
        echo "Read Recipe <br />";
        echo parent::make_dinner();
        echo "Clean up mess <br />";
    }
}

echo "Chef:<br />";
Chef::make_dinner();
echo "<br />";
echo "Amateur Chef:<br />";
AmateurChef::make_dinner();

echo "<hr />";

// Exampel of using the parents static method as a fallback

class Image {

    public static $resizing_enabled = true;

    public static function geometry() {
        echo "800x600";
    }
}

class ProfileImage extends Image {
    public static function geometry() {
        if(self::$resizing_enabled) {
            echo "100 x 100";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br />";
echo ProfileImage::geometry() . "<br />";

Image::$resizing_enabled = false;
echo ProfileImage::geometry() . "<br />";

?>