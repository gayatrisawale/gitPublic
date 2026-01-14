<?php
echo "Practice files</br>", "Testing</br>", "Echo statement</br>";

print "Practice files</br>";

$arrList=['1', '2','3'];
print_r($arrList);
echo"</br>";

$LogResult = [
    '20 July'=> [
        ["name" => "Alice", "age" => 30],
        ["name" => "Bob", "age" => 25],
        ["name" => "Carol", "age" => 27]
    ],

    '21 July'=> [
        ["name" => "Alice1", "age" => 30],
        ["name" => "Bob1", "age" => 25],
        ["name" => "Carol1", "age" => 27]
    ]
];
print_r($LogResult['21 July']);
echo"</br>--------------------------------";

$array1=['color'=>'yello', 0=>1, 3=>'Test'];
$array2=[ 0=>15,           6=>'Rings', 'color'=>'pink'];

$mergeResult=array_merge($array1, $array2);
$combineResult=array_combine($array1, $array2);

echo"</br><pre>Merge Result: "; print_r($mergeResult);
echo"</br><pre>Cobine Result: "; print_r($combineResult);
echo"</br>--------------------------------";

$color=['yellow', 'red', 'pink'];
if(in_array('red', $color)){
    $getKey=array_search('red',  $color);
    echo"</br> Got the key as :".$getKey;

}
echo"</br>-------------Define a class-------------------";

Class User{
    var $name;
    var $address;
    var $dob;
    
    public function __construct($name, $address, $dob)
    {
        $this->name=$name;
        $this->address=$address;
        $this->dob=$dob;
    }
    public function getAge($dob=Null){
        echo"</br>Age of a User ".$this->dob;
    }
}
 $user = new User( 'TestName', 'Mumbai', '12 July');
 $user->getAge();

 echo"</br>--------------------------------";

 $number='5';
 echo"</br>";
 var_dump($number);
 if($number===5)
 {    
    echo"</br> True";
 }
 else 
 {  
    echo"</br> False";
 }
 echo"</br>--------------------------------";


?>