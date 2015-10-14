<?php
class Car {
    private $ary = array();
    
    public function __set($key, $val)
    {
        $this->ary[$key]=$val;
    }
    
    public function __get($key){
        if(isset($this->ary[$key])){
            return $this->ary[$key];
        }
        else {
            return null;
        }
    }
    
    public function __isset($key){
        if(isset($this->ary[$key])){
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function __unset($key) {
        unset($this->ary[$key]);
    }
    
}
$Ford = new Car();
$Ford->niubi = 'cs';

class Flight{
    public $speed = 0;
    
    public function __call($name, $args){
        if($name == 'speedUP')
        {$this->speed += 10;}
    }
}

echo var_dump($Ford->niubi);
echo "<br/>";
echo var_dump($Ford->buniubi);
echo "<br/>";

$f15 = new Flight();
$f15->wuliao();
echo $f15->speed."<br/>";
$f15->speedUP();
echo $f15->speed;
$f15->speedUP();
echo $f15->speed."<br/>";
$str = serialize($f15);
echo $str."<br/>";
echo "$str<br/>";
echo "hehe<br/>";
echo var_dump($str)."<br/>";
echo serialize($Ford)."<br/>";
$ob = unserialize($str);
echo var_dump($ob);
?>
