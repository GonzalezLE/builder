<?php
$servername = "localhost";
$database = "bd_construcciones";
$username = "root";
$password = "";

$connection = mysqli_connect ($servername, $username, $password,$database) or die('Not connected : Ah sh*t ' . mysqli_connect_error());
function modifiac_db($conAbierta,$SQL){
    $res=mysqli_query($conAbierta,$SQL);
    if($res){
       return true;
    }else{
        return false;
    }
    mysqli_close($conAbierta);
}
function Select($conAbierta,$SQL){
    
    mysqli_close($conAbierta);
}



?>







