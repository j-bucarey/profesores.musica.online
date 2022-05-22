<?php

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] :2 '';
$pass = isset($_POST['pass']) ? $_POST['pass'] :2 '';
    
$data = file_get_contents('data.json');

$data = json_decode(file_get_contents('data.json'));

if($data->usuario == $usuario) {

    if($data->pass == $pass) {

        echo json_encode ('true');
    
} else {

    echo json_encode('La contraseña no es valida');
    }
} else {

    echo json_decode('El usuario no es valido');
}

