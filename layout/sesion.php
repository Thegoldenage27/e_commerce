<?php

session_start();
if(isset($_SESSION['sesion_email'])){
//echo"Si existe sesion de ".$_SESSION['sesion_email'];
$emai_sesion = $_SESSION['sesion_email'];
$sql = "SELECT * FROM clientes WHERE email='$emai_sesion'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
        $nombres_sesion = $usuario['nombre'];
}
}else{
  echo "No existe sesion";
  header('Location: '.$URL.'/login');
}