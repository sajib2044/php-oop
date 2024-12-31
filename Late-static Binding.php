<?php
class personal{
    public static $name="American International!";
    public function show(){
        echo static::$name;
    }
}

class account extends personal{
    public static $name="Baba";
}

$test = new account();
$test->show();






?>