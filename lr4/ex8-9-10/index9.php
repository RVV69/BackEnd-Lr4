<?php

abstract class Human {
    protected $height;
    protected $weight;
    protected $age;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    abstract protected function birthMessage();

    public function birthChild() {
        echo $this->birthMessage() . "\n";
    }
}

class Student extends Human {
    private $university;
    private $course;

    public function cleanRoom() {
    }
    public function cleanKitchen() {
    }

    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function moveToNextCourse() {
        $this->course++;
    }

    protected function birthMessage() {
        return "Щиро вітаю! Народжується студент.";
    }
}

class Programmer extends Human {
    private $programmingLanguages = [];
    private $experience;

    public function cleanRoom() {
    }
    public function cleanKitchen() {
    }
    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function setProgrammingLanguages($languages) {
        $this->programmingLanguages = $languages;
    }

    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    protected function birthMessage() {
        return "Щиро вітаю! Програміст народжується.";
    }
}

$student = new Student();
$student->birthChild(); 

echo"<br><br>";

$programmer = new Programmer();
$programmer->birthChild(); 

?>