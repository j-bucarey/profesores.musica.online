<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: tutores.php?mensaje=error');
    }

    include 'conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $ocupacion = $_POST['txtOcupacion'];
    $descripcion = $_POST['txtDescripcion'];

    $sentencia = $bd->prepare("UPDATE tb_tutor SET nombre = ?, ocupacion = ?, descripcion = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $ocupacion, $descripcion, $codigo]);

    if ($resultado === TRUE) {
        header('Location: tutores.php?mensaje=editado');
    } else {
        header('Location: tutores.php?mensaje=error');
        exit();
    }
    
?>