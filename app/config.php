<?php

define('SERVIDOR', 'localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{

    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8" ));
    //echo "La conexion a la base de datos fue un exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

    
    $URL = "http://localhost/e_commerce";

    date_default_timezone_set("America/Mexico_City");
    $fechaHora = date('Y-m-d H:i:s');


    