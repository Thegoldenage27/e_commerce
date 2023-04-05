<?php
$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT  cl.id_cliente as id_cliente, cl.nombre as nombres, cl.email as email, rol.rol as rol
FROM clientes as cl INNER JOIN tb_roles AS rol ON cl.id_rol = rol.id_rol WHERE id_cliente = '$id_usuario_get'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios_datos as $usuarios_dato){
    $nombres = $usuarios_dato ['nombres'];
    $email = $usuarios_dato ['email'];
    $rol = $usuarios_dato ['rol'];
}
