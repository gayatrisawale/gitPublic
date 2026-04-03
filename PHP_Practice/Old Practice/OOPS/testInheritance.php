<?php

class company{

    function __construct($y){
        echo"Parent Constructor ".$this->x=$y."</br>";
    }

    function demo(){
        echo"We are in parent class method</br>". $this->x;
    }

}

class Client extends company{

    function __construct($z)
    {
        parent::__construct($z);
        echo"Child Constructor</br>";
    } 

    function demo(){
        echo"We are in Child class method </br>";
    }

}


$cnt=new Client(20);
$cnt->demo();