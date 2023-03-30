<?php

include ('../../config.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

$sentencia = $pdo->prepare("INSERT INTO clientes 
        (nombre, email, password_user, fyh_creacion)
VALUES (:nombre,:email,:password_user,:fyh_creacion)");

$sentencia->bindParam('nombre',$nombre);
$sentencia->bindParam('email',$email);
$sentencia->bindParam('password_user',$password_user);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->execute();
