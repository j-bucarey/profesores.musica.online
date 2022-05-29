<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtOcupacion"]) || empty($_POST["txtDescripcion"])){
        header('Location: tutores.php?mensaje=falta');
        exit();
    }

    include_once 'conexion.php';
    $nombre = $_POST["txtNombre"];
    $ocupacion = $_POST["txtOcupacion"];
    $descripcion = $_POST["txtDescripcion"];
    
    $sentencia = $bd->prepare("INSERT INTO tb_tutor(nombre,ocupacion,descripcion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$ocupacion,$descripcion]);

    if ($resultado === TRUE) {
        header('Location: tutores.php?mensaje=registrado');
    } else {
        header('Location: tutores.php?mensaje=error');
        exit();
    }
    
?>