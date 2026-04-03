<?php 

    $dbConn=mysqli_connect('localhost', 'root','');
    $dbCheck=mysqli_select_db($dbConn, 'testdb');

    if($dbCheck){
        echo"</br>DB Connected with DB";
    }
    else{
        echo"</br>Error DB Connected ";
    }

    if(!empty($_POST)){
        echo"</br>"; print_r($_POST); echo"</br>";
    } 
?>  
<form method='post' action='crud.php'>
    Submit the from</br></br></br>
    Name:</br>
    <input type="text" name='FName', value=''></br></br>
    Email:</br>
    <input type="text" name='Email', value=''></br></br>
    <input type="Submit" name="Save" value="Submit1">
</form>