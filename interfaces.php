<?php
interface parent1{
    function calc($a,$b);
}

interface parent2{
    function sub($c,$d);
}

class childclass implements parent1, parent2{
    public function calc($a,$b){
        echo $a + $b;
        
    }
    public function sub($c,$d){
        echo $c + $d;
        
    }
}

$c1 = new childclass();
$c1->calc(2,1);
echo "<br>";
$c1->sub(6,1);


?>