<?php
include ('../../config.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

if ($password_user == $password_repeat){
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
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
    $_SESSION['mensaje']= "Se actualizó al usuario correctamente";
    $_SESSION['icono']= "success";
    header('Location:  '.$URL.'/usuarios');
}else{
    //echo "Error las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje']= "Error las contraseñas no son iguales";
    $_SESSION['icono']= "error";
    header('Location:  '.$URL.'/usuarios/update.php?id='.$id_usuario);
}



