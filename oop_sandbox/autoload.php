<?php 

    echo "autoload page";

    function my_autoload($class) {
        echo $class;
        if(preg_match('/\A\w+\Z/', $class)) {
          include 'classes/' . $class . '.class.php';
        }
      }
      spl_autoload_register('my_autoload');

// Board 1

    $Deck1 = new Board;
    $Deck1->brand = 'Girl';
    $Deck1->model = 'Rick Howard';
    $Deck1->category = Board::CATEGORIES[0];
    $Deck1->year = 93;
    $Deck1->description = "Rick Howard pro model";
    $Deck1->set_weight_kg(1.2);

    echo "This is the parent class " . get_parent_class($Deck1) . "<hr />";


    ?>