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
}

class Student extends Human {
    private $university;
    private $course;

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

    public function cleanKitchen() {
    }
    public function cleanRoom() {
    }

    protected function birthMessage() {
        return "Повідомлення при народженні дитини 1";
    }
}

class Programmer extends Human {
    private $programmingLanguages = [];
    private $experience;

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
    public function cleanKitchen() {
    }
    public function cleanRoom() {
    }

    protected function birthMessage() {
        return "Повідомлення при народженні дитини 2";
    }
}

$student = new Student();
$student->setHeight(170);
$student->setWeight(60);
$student->setAge(20);
$student->setUniversity("Гарвард");
$student->setCourse(2);

echo "Ріст студента: ";
echo $student->getHeight() . "<br>"; 
echo "Вага студента: ";
echo $student->GetWeight() . " кг<br>";
echo "Вік студента: ";
echo $student->GetAge() . " роки(ів) <br>"; 
echo "Університет: ";
echo $student->getUniversity() . "<br>"; 
echo "Курс навчання: ";
echo $student->GetCourse() . " роки(ів) <br>"; 

$programmer = new Programmer();
$programmer->setHeight(180);
$programmer->setWeight(70);
$programmer->setAge(25);
$programmer->addProgrammingLanguage("PHP");
$programmer->addProgrammingLanguage("JavaScript");
$programmer->setExperience(2);


echo "<br>Ріст програміста: ";
echo $programmer->getHeight() . "<br>"; 
echo "Вага програміста: ";
echo $programmer->GetWeight() . " кг<br>";
echo "Вік програміста: ";
echo $programmer->GetAge() . " роки(ів) <br>"; 
echo "Мова програмування: ";
echo $programmer->getProgrammingLanguages()[0]. ", "; 
echo $programmer->getProgrammingLanguages()[1]. "<br>"; 
echo "Досвід роботи: ";
echo $programmer->getExperience(). " роки <br>"; 

?>