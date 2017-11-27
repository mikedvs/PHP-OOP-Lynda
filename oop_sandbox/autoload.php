<?php 

    echo "autoload page <br />";

    function my_autoload($class) {
        echo $class;
        if(preg_match('/\A\w+\Z/', $class)) {
          include 'classes/' . $class . '.class.php';
        } else {
            echo "nope";
        }
      }
      spl_autoload_register('my_autoload');

    $Girl = new Board;

    echo $Girl->name();
    echo implode(', ', get_object_vars($Girl)) . '<br />';
    echo "This is the parent class " . get_parent_class($Girl) . "<hr />";


    ?>