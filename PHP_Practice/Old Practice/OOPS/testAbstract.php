<?php

abstract class Animal{

    protected $name;

    abstract  public function Speak();

    function __construct($name){
        $this->name=$name;
    }

    function getName($name){
        return $this->name;
    }   
}

class Dog extends Animal{

    public function Speak()
    {
        echo $this->name ." says Hello "."";
    }
}

$d=new Dog("Jojo");
$d->Speak();
