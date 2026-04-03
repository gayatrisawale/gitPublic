<?php
class Test{

    public $x1=1;
    public function show()
    {
        return $this->x1++;
    }
}

$obj1=new Test;
echo "Show: ".$obj1->show();
echo"<br>";
echo "Var call1 : ".$obj1->x1;
echo"<br>";
echo "Show2 : ".$obj1->show();
echo"<br>";
echo "Var call2 : ".$obj1->x1;

$obj2=new Test;


?>