<?php
class person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name= $name;
        $this->age= $age;
    }   

    function get_name(){
        return $this->name . "\n";
    }
    function get_age(){
        return $this->age;
    }
    

}

$n = new person ("sajib",22);
echo $n->get_name();
echo $n->get_age();



?>