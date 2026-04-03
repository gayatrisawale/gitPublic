<?php
class Company{
    protected $num;
    function __construct(){
       $this->num=3;
    }
      
    function getNum(){
        return $this->num;
    }
    function show1(){
        echo"<br>Show: ". $this->num;
    }
}

$obj1= new Company();
echo $obj1->getNum();