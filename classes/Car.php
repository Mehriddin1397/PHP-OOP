<?php
class Car{
	public $color= 'white';
	public $fluelVolume = '40 litr';

	public static function drive(int $fuelVolume,int $fuelConsumption){
		$walk = ($fuelVolume/$fuelConsumption)*100;
		echo self::$color;//'self' kalit so'zi class ichidagi static atributni olib kelish uchun ishlatiladi.
		return $walk; 
		
	}
}