<?php 

class User {

    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User {

    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }
}

$u = new User;
$u->first_name = 'Jerry';
$u->last_name = 'Hsu';
$u->username = 'jHsu';
$u->is_admin = true;

$c = new Customer;
$c->first_name = 'Steve';
$c->last_name = 'Caballero';
$c->username = 'sCaballero';
$c->city = 'Los Angeles';
$c->state = 'California';
$c->country = 'United States';

echo $u->full_name() . "<hr />";
echo $c->full_name() . "<hr />";
echo $c->location() . "<hr />";

echo get_parent_class($u) . "<hr />";
echo get_parent_class($c) . "<hr />";

if(is_subclass_of( $c ,'User')) {
    echo "Instance is a subclass of User";
}

$parents = class_parents($c);
echo implode(', ', $parents);



?>