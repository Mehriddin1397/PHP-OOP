<?php
// class 
/** class Computer {

    public $protsessor;
    public $ozu;

    public function color($color){
      	return $color;
    }
    public function setModel($model){
        $this->protsessor = $model;
    }



}

$Dell = new Computer();
$Dell->protsessor = 'Intel Core i7'; */





//constructor
/** class Computer {

    	//atribut
    public $protsessor;
    public $ozu;


	//methods
    public function charge()
	{
    	echo "Minimal 4 soat";
	}


	//constracts
    public function __construct($protsessor,$ozu)
	{
    	$this-> protsessor = $protsessor;
	$this-> ozu = $ozu;
	}    
}

$dell = new Computer('core i7','16gb');

var_dump($dell->charge()); */



//Inheritance(meros qilib olish)
//extends(kelib chiqadi)
//overriding (ustidan yozvorish)
//final (oxiri, u classdan extends qilib bumaydi, buni methodlarga ham qullasa buladi) 

/** final class animal{
    //atributs
	public $foots;
	public $weight;

    //methots
	public function speed(){
		echo "4 km/s";
	}

    //construct
	public function __construct($foots,$weight){
		$this->foots = $foots;
		$this -> weight = $weight;
	}
}

class tiger extends animal{
	public $color ;

	//methods
	public function type(){
		echo "predator";
	}
	
	//overriding
	public function speed(){
		echo "50 km/s";
	}
}


$mountain_tiger = new tiger(4,100);

var_dump($mountain_tiger->speed()); 


class Fruit {
	//atribut
	public $color;
	public $taste;

	//construct
	public function __construct($color, $taste){
		$this->color = $color;
		$this->taste = $taste;
	}

}

class tropicFruit extends Fruit {
	public $homeland;
}

$banana = new tropicFruit('yellow','good');

var_dump($banana); 
				



//Access Motifiers
//public (umumiy)
//protected (himoyalangan)
//private (shaxsiy)

class telefon {
	//atribut
	public $year;
	protected $power;
	private $size;

	//construct
	public function __construct($year,$power,$size){
		$this->year = $year;
		$this->power = $power;
		$this->size = $size;
	}

	public function getPower(){
		return $this->power;
	}

	
}

class iPhone extends telefon{
	public function getPower(){
		return $this->power;
	}
	
	
}

$se2020 = new iPhone(2020,'12 hour',24);


$nokia = new telefon(2000,'24 hour', 13);
var_dump($se2020->getPower());
					*/



//Abstract class
//Abstract classdan obekt olib bumaydi, faqat voris olib buladi(extends)

abstract class Car {
	public $type;
	public function __construct($type){
		$this->type = $type;
		}
}

class ElektroCar extends Car {


}

$tesla = new ElektroCar('sedan');
var_dump($tesla);

