<?php
include ('../../config.php');

$id_usuario = $_POST['id_cliente'];

$sentencia = $pdo->prepare("DELETE FROM clientes WHERE id_cliente=:id_cliente");

$sentencia->bindValue(':id_cliente', $id_usuario);
$sentencia->execute();

session_start();
$_SESSION['mensaje'] = "Se eliminó al usuario correctamente";
$_SESSION['icono'] = "success";
header('Location:  '.$URL.'/usuarios');

