<?php
class Animal{
    // 只能固定的值，不能放rand
    // 這3P不一樣
    public $name='';
    protected $age=0;
    private $heartbeat=0;

    public function __construct(){
        $this->age=rand(10,20);
        $this->name='john';
        $this->heartbeat=rand(20,60);
    }
    public function getName(){
        return $this->name;
    }

    public function getHeartbeat(){
        return $this->heartbeat;
    }
    public function setName($name){
        return $this->name=$name;
    }

}
$animal=new Animal;
$dog=new Animal;
// echo $animal->name;
// echo $animal->age;

// echo $animal->getname();
// $animal->setName('mack');
// echo $animal->getname();
// echo $animal->getHeartbeat();
// echo "<hr>";
// $dog->setName('herry');
// echo $dog->getName();
class Dog extends Animal{
    protected $hair_color="black";

    public function getColor($color){
        return $this->hair_color;
    }
    public function setColor($color){
        return $this->hair_color=$color;
    }
    public function getName(){
        return ;
    }

}
$dog = new Dog;
echo   $dog->getName();
echo "<br>";
$dog->setName('mack');
echo "<br>";
echo   $dog->getName();

?>