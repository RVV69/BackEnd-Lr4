<?php

interface HouseCleaning {
    public function cleanRoom();
    public function cleanKitchen();
}

abstract class Human implements HouseCleaning {
    protected $height;
    protected $weight;
    protected $age;

    abstract public function cleanRoom();
    abstract public function cleanKitchen();
}

class Student extends Human {
    private $university;
    private $course;

    protected function birthMessage() {
    }
    public function cleanRoom() {
        echo "Студент прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Студент прибирає кухню\n";
    }
}

class Programmer extends Human {
    private $programmingLanguages = [];
    private $experience;

    protected function birthMessage() {
    }

    public function cleanRoom() {
        echo "Програміст прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню\n";
    }
}

$student = new Student();
$student->cleanRoom(); 
echo"<br>";
$student->cleanKitchen(); 

echo"<br><br>";

$programmer = new Programmer();
$programmer->cleanRoom(); 
echo"<br>";
$programmer->cleanKitchen(); 

?>
