<?php

class testMagicFunction {
    private $data = [];

    function __get($name) {
        //echo"TT "; print_r($name); exit;
        return $this->data[$name] ;
    }

    function __set($name, $value) {
        //echo"OO "; print_r($name); exit;
        $this->data[$name] = $value;
    }

    function __toString(){
      return $this->school." ".$this->city;
    }

}

$obj=new testMagicFunction();
$obj->school="Mumbai";
$obj->city="MH";
echo $obj->school.'<br>';
echo $obj->city.'<br>';;

echo $obj;

//$obj->