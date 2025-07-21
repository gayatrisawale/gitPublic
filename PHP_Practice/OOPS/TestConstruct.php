<?php
class TestConstruct{

    function __construct($y){
        echo"Start</br>";
        $this->x=$y;
    }

    function __destruct(){
        echo"end</br>";
    }

    public function Show(){
        echo"Show :".$this->x."</br>";
    }
}


$obj=new testConstruct(20);
$obj->show();
