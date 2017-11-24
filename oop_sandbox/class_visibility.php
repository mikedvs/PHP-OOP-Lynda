<?php 

class Student {
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 0.00;

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    public function hello_world() {
        return "Hello world";
    }

    protected function hello_family() {
        return "Hello family";
    }

    private function hello_me() {
        return "Hello me";
    }
}

class PartTimeStudent extends Student {
    public function hello_parent() {
        return $this->hello_family();
    }
}

$student1 = new PartTimeStudent;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

$student2 = new Student;
$student2->first_name = 'Etherl';
$student2->last_name = 'Martz';

echo "<hr />";

echo $student1->hello_parent();

echo "<hr />";

echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";
echo "<hr />";
echo $student1->hello_world() . "<br />";
echo $student1->hello_family() . "<br />";
echo $student1->hello_world() . "<br />";

echo $student1->registration_id;
echo $student1->tuition;
echo "<hr />";

echo $student1->$tuition;
?>