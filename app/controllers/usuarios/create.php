<?php

include ('../../config.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];


     if ($password_user == $password_repeat){
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO clientes 
        (nombre, email, password_user, fyh_creacion)
VALUES (:nombre,:email,:password_user,:fyh_creacion)");

$sentencia->bindParam('nombre',$nombre);
$sentencia->bindParam('email',$email);
$sentencia->bindParam('password_user',$password_user);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->execute();
session_start();
    $_SESSION['mensaje']= "Usuario registrado correctamente";
    header('Location:  '.$URL.'/usuarios');
}else{
    //echo "Error las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje']= "Error las contraseñas no son iguales";
    header('Location:  '.$URL.'/usuarios/create.php');
}


