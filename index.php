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
						




//Interface

//Interface'ga faqat funksiyani nomi yoziladi va interface ishlatilgan classlarda u funksiyalar bo'lishi shart
//Interface'ni classlarga 'implements' kalit so'zi orqali bog'laymiz
//Interface'ni abstract classdan farqi interfaceda faqat metodlar bo'ladi  va metodlar faqat 'public' bulishi shart
 
interface Car {
	public function fuelVolume();
	public function fuelConsumption();
}

class Tico implements Car {
	public function fuelVolume(){
		return "30 litr";
	}

	public function fuelConsumption(){
		return "4 litr";
	}
} 

$tico97 = new Tico;
var_dump($tico97->fuelVolume());
					



//Traits => 1ta funksiyani(metod) bir nechta classlarda ishlatish
//'use' kalit so'zi orqali classlarga traitni chaqirib olamiz

trait Charging {
	public function charging(){ 
		return "2 hour";
	}
}

trait Power {
	public function power(){ 
		return "450 km";
	}
}

class Tesla {
use Charging;
}

class BWD {
use Power,Charging;
}

$bwd_son = new BWD;

var_dump($bwd_son->charging());
					



//Static Methods $ Property
//static => obect yaratmasdan class orqali ishlatsa buladi.
//static => class'ga tegishli, obectga tegishli emas
//parent kalit so'zi classdan extends qilganida ota class'idagi static 	metodni chaqirishda ishlatiladi
 

class BMW extends Car{
	public function __construct(){
		parent::drive();//classdan 'extends qilganda ota classdagi static metodni 'parent' kalit so'zi orqali olib kelinadi.
	}
}
echo BMW::drive(36,4);
						




//Namespace
//Boshqa fayllardagi classlarni 'require orqali olib kelamiz va bir biridan ajratish uchun u classlarga 'namespace beramiz.
//use orqali u namespaceni ishlatamiz.


use Classes\Kitchen\Table;
use Classes\HTML\Table as HTable;// 2 ta bir xil class nomi bulib qolsa 'as' kalik so'zi orqali boshqa nom berish mumkin.

require 'classes/html/Table.php';
require 'classes/kitchen/Table.php'; 
require 'classes/Car.php';


$table =  new HTable();
var_dump($table); 

						



//Autoloader => require qilib classlarni olib kelish noqulay bulganligi uchun ishlatiladi.

require_once 'autoload.php'; //autoload.php faylini ichida autoload funksiyasini yozib, faylni olib kelamiz

$tico = new Car();
echo $tico->fluelVolume;

 						*/




//Clone -> Obektdan klon olish

require_once 'autoload.php';

$tico  = new Car();

$matiz = clone $tico;//$matiz obekti ticodan clone qilayabdi, shunchaki tenglik quysa ticoni o'zgartirsa matizda ham o'zgarib ikkalasi teng bulib qoladi.

$tico->color = 'red';//boshda ticoni rangi oq edi matizga clone qilganda, endi ticoni rangi qizil buldi lekin matizni rangi oqda qoldi.

echo $matiz->color;



