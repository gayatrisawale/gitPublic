<?php
$ch='b';

Switch($ch){

    case 'a':
        echo"in a";
        break;
    
    case 'b':
        echo"call fun";
        callB();
        break;

    default:
        echo"in default"; 
        break;
}
function callB(){
    echo "we are in B function";
}

echo"</br>";


  $list=[3,5,2,4,1];
  $arrCount=count($list);
  for( $i=0; $i<$arrCount; $i++){ 
  	for( $j=$i+1; $j<$arrCount; $j++){ 
    	if($list[$i]>$list[$j]){
        	$Temp=$list[$j];
        	$list[$j]=$list[$i];
            $list[$i]=$Temp;

          //echo"<pre>"; print_r($list);
        }  
    }
  }
  echo"<pre>"; print_r($list);

?>