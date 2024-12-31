<?php

 class car{

    private $name;
    private $color;
    private $model;
    private int $prise;

    function set_name($name){
        $this->name= $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
    function set_model($model){
        $this->model=$model;
    }
    function get_model(){
        return $this->model;
    }
    function set_prise($prise){
        $this->prise=$prise;
    }
    function get_prise(){
        return $this->prise;
    }


}

 $oddy = new car();  echo "<br>"  ;

$oddy-> set_name('oddy');
$oddy-> set_color('green');
$oddy-> set_model('VM1');
$oddy-> set_prise(10000000000);

echo $oddy->get_name() . "<br>";
echo $oddy->get_color(). "<br>";
echo $oddy->get_model(). "<br>";
echo $oddy->get_prise();

$BMW = new car();
$BMW-> set_name('BMW');
$BMW-> set_color('Yello');
$BMW-> set_model('DM5');
$BMW-> set_prise(20000000000);

echo $BMW->get_name() . "<br>";
echo $BMW-> get_color() . "<br>";
echo $BMW-> get_model() . "<br>";
echo $BMW-> get_prise();

?>