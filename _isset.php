<?php
class student{
    public $course;
    private $firstname;
    private $lastname;

    public function setName($firstname, $lastname){
        $this->firstname=$firstname;
        $this->lastname=$lastname;

    }
     public function __isset($property){
        echo isset ($this->$property);

     }
}

$test = new student();
// $test->course="php";
$test->setName("sajib","ghosh");
echo isset ($test->firstname);

?>