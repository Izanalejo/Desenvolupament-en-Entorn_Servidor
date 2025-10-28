<?php
session_start();


$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if($usuario === 'usuario' && $password === 'usuario' ){
    $SESSION['usuario'] = $usuario;

    echo 'Bienvenido ' . $usuario;
} else {
    echo 'Usuario o contraseñas incorrectos!';
}






?>