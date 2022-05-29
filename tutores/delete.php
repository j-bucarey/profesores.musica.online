<?php 
    if(!isset($_GET['codigo'])){
        header('Location: tutores.php?mensaje=error');
        exit();
    }

    include 'conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM tb_tutor where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: tutores.php?mensaje=eliminado');
    } else {
        header('Location: tutores.php?mensaje=error');
    }
    
?>