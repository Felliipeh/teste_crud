<?php 
 $SERVER ="localhost";
$user= "root";
$pass= "";
$db= "teste";


if ($conn=mysqli_connect($SERVER,$user,$pass,$db)) {
  //  echo"conectado";
  
}else
echo"errorr";
