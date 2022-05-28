<?php 

include("conexion.php");


if (isset($_POST['save_tutor'])) {
    $nombre = $_POST['nombre'];
    $ocupacion = $_POST['ocupacion'];
    $descripcion = $_POST['descripcion'];
    $query = "INSERT INTO tb_tutor(nombre,ocupacion, descripcion) VALUES ('$title', '$ocupacion', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("No se inserto.");
    }
  
    $_SESSION['message'] = 'Tutor guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: tutores.php');

  }
// $nombre = $_POST['nombre'];
// $ocupacion = $_POST['ocupacion'];
// $descripcion = $_POST['descripcion'];




// $query = "INSERT INTO tba_tutor(nombre,ocupacion,descripcion) VALUES ('$nombre','$ocupacion','$descripcion')";
// $resultado = $conexion->query($query);

// if($resultado){
// echo "si se inserto";
// }
// else{
// echo "no se inserto";
// }

?>