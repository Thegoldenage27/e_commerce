<?php
include ('../../config.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

$statement = $pdo->prepare("SELECT password_user FROM clientes WHERE id_cliente = :id_cliente");
$statement->bindValue(':id_cliente', $id_usuario);
$statement->execute();
$resultado = $statement->fetch(PDO::FETCH_ASSOC);
$contrasena_actual = $resultado['password_user'];

if ($password_user == "") {
    if ($contrasena_actual == $password_repeat) {
        $password_user = $contrasena_actual;
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_usuario);
        exit();
    }
} else {
    if ($password_user != $password_repeat) {
        session_start();
        $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_usuario);
        exit();
    }
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
}

$sentencia = $pdo->prepare("UPDATE clientes
    SET 
        nombre=:nombre, 
        email=:email, 
        password_user=:password_user,
        fyh_actualizacion=:fyh_actualizacion
    WHERE id_cliente= :id_cliente");

$sentencia->bindValue(':nombre', $nombre);
$sentencia->bindValue(':email', $email);
$sentencia->bindValue(':password_user', $password_user);
$sentencia->bindValue(':fyh_actualizacion', $fechaHora);
$sentencia->bindValue(':id_cliente', $id_usuario);
$sentencia->execute();

session_start();
$_SESSION['mensaje'] = "Se actualizó al usuario correctamente";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/usuarios');
exit();

?>


