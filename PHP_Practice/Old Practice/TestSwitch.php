<?php

$ch='a';
$test=['Another', 'Variable' ,'to', 'Test'];

Switch($ch){
    case 'a':
       callA($ch, $test);
       break; 
    case 'b':
        echo 'b is selected';
        break;
    case 'c':
        echo 'b is selected'; 
        break;   
    default: 
        echo 'Test Completed'; 
        break;   
}

function callA($ch, $test){
    echo $ch.' is selected. <pre>'; print_r($test);
}

echo"</br>---------Recursive Factorial---------";

function Fact($num){
    if($num==1)
    { return 1;}
    else{

        $f =$num*Fact($num-1);
        return $f;
    }
}

echo "</br>Fact Value: ".Fact(5);

echo"</br>---------Tower of henoi ---------";

function towerOfHanoi($n, $source, $auxiliary, $target) {
    if ($n == 1) {
        echo "<br/>Move disk 1 from $source $auxiliary $target<br>";
        return;
    }

    towerOfHanoi($n - 1, $source, $target, $auxiliary);

    echo "<br/>Move disk $n from $source $auxiliary $target<br>";

    towerOfHanoi($n - 1, $auxiliary, $source, $target);
}

// Run with 3 disks
echo "<br><strong>Result:</strong><br><br>";
towerOfHanoi(3, 'S', 'A', 'T'); 

echo"</br>---------Impolde and Explode ---------";
$str="Test the explode function";
$lsArray=explode(' ', $str);
$orgStr=implode(',', $lsArray);

print_r($lsArray);
print_r($orgStr);

echo"</br>---------Reverse String without inBuilt Str Function---------";
$strName= 'Notebook';
//echo"</br> Reveresed Strig InBuilt: ".strrev($strName);

$stLen=strlen($strName);
for( $i=$stLen-1; $i>=0; $i--){
    $strRev[]=($strName[$i]);
}
echo "</br>Reverse String=". implode('',$strRev)
?>

