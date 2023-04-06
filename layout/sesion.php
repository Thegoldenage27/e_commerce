<?php

session_start();
if(isset($_SESSION['sesion_email'])){
//echo"Si existe sesion de ".$_SESSION['sesion_email'];
$emai_sesion = $_SESSION['sesion_email'];
$sql = "SELECT  cl.id_cliente as id_cliente, cl.nombre as nombres, cl.email as email, rol.rol as rol
FROM clientes as cl INNER JOIN tb_roles AS rol ON cl.id_rol = rol.id_rol WHERE email='$emai_sesion'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
        $nombres_sesion = $usuario['nombres'];
        $rol_sesion = $usuario['rol'];
}
}else{
  echo "No existe sesion";
  header('Location: '.$URL.'/login');
}