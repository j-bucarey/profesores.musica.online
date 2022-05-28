
<?php

session_start();
// $conexion = new mysqli("localhost","root","","login_desarrollo");

$conn = mysqli_connect(
      'localhost' ,
      'root' ,
      '',
      'login_desarrollo'
      
);

// if($conexion){
//   echo "conexion exitosa";
// }else{
//   echo "conexion no hecha";
// }

?>
