<?php

class Computer {

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
$Dell->protsessor = 'Intel Core i7';
print_r($Dell->color('black'));
echo $Dell->setModel('Inspiron 14');
