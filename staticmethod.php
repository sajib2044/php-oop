<!-- <?php
class greeting{
    public static $name = "sajib ghosh";
    public static function welcome(){
        echo "Hello world!";
        echo self::$name;
    }
}

greeting::welcome();

?> -->
<!-- <?php
class Base {
    public static $name = "nazmul Islam";
    
    public static function show() {
        echo self::$name; // Correct way to access a static property
    }
    public function __construct($n){
        self::$name = $n;
    }
}

// echo Base::$name; // Correct way to access a static property
$test = new base("ayon");
base::show();

?> -->


<?php

class domain{
    public static $name="akash ghosh";
    public static function getwebsiteName(){
        echo "w3 school!";
        echo self::$name;
       
    }
}

class domainW3 extends domain{
   public static $a= "dasguysdg";
   public static function show(){
    echo self::$a;
   }
    public  function __construct($a){
        
        parent::getwebsiteName();
    }
    
     
}

domainW3::getwebsiteName();
domainW3::show();
?>