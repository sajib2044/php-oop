<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name,$age,$salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }
    function info(){
        echo "<h1>Employee profile</h1>";
        echo "Employee Name : " . $this->name . "<br>";
        echo  "Employee Age : " . $this->age  . "<br>";
        echo "Employee salary : " . $this->salary . "<br>";
    }


}

class manager extends employee{
    function info(){
        echo "<h1>Manager profile</h1>";
        echo "Employee Name : " . $this->name . "<br>";
        echo  "Employee Age : " . $this->age  . "<br>";
        echo "Employee salary : " . $this->salary . "<br>";
    }


    
        
}


$e1 = new manager('sajib',23,2000);
$e2 = new employee("akash",22,1400);
$e1->info();
 $e2->info();
?>