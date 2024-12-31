  <?php
class fruit{
    public $name;
    protected $color;
    private $weight;

    function set_name($name){
        $this->name=$name;
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
    
    function set_weight($weight){
        $this->weight=$weight;
    }
    private function get_weight(){
        return $this->weight;
    }


}

$mango = new fruit();
$mango->set_name('Mango');
$mango->set_color('yello');
$mango->set_weight('300');


echo $mango->get_name();
echo $mango->get_color();
echo $mango->get_weight();

?> 
