<!-- <?php
trait message{
    public function msg1(){
        echo "OOP is Fun !";
    }
}

class welcome{
    use message;
}

$obj = new welcome();
$obj->msg1();


?> -->


<?php
trait message1{
    public function msg1(){
        echo "OOP in Fun!";
    }
}
trait message2{
    public function msg2(){
        echo "OOP is reduce code duplication";
    }
}

class welcome1{
    use message1;
}
class welcome2{
    use message2;
}

$a1 = new welcome1();
$a1->msg1();
echo "<br>";

$b2 = new welcome2();
$b2->msg2();



?>
