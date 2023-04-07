<?php




$sql_productos = "SELECT a.*, cat.nombre_categoria as categoria, cl.email as email, a.nombre as nombre_producto
  FROM tb_almacen as a 
  INNER JOIN tb_categorias AS cat ON a.id_categoria = cat.id_categoria
  INNER JOIN clientes as cl on cl.id_cliente = a.id_cliente";
$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);







