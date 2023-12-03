<?php
//cuando vayas a probra la conexio quita los slash y prueba
//include ('config.php'); 
$servidor = "mysql:dbname=".BD_SISTEMA."BD_SERVIDOR;

try{
$pdo = new PDO($servidor, username: BD_USUARIO, password: BD_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
echo "<script>alert('Conexion exitosa a la base de datos.');</script>";
}catch(PDOException $e){
echo "<script>alert('Error al conectar la base de datos.');</script>";
}

?>