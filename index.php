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
class Computer {

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

var_dump($dell->charge());


