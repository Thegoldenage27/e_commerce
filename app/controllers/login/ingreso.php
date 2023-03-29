<?php
include ('../../config.php');
$email = $_POST['email'];
$password_user= $_POST['password_user'];
$contador =0;
$sql = "SELECT * FROM clientes WHERE email = '$email' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador +1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombre'];
}

if($contador == 0){
    echo "Datos incorrectos, por favor vuelve a intentarlo";
}else{
    echo "Datos correctos";

    //crear sesiones del usuario

session_start();
$_SESSION['sesion_email']= $email;
header('Location: '.$URL.'/index.php');
}