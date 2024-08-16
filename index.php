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

class animal{
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

