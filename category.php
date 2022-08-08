<?php
require('config/conexao.php');

$code = $_POST['code'];
$name = $_POST['name'];

$stmt= $con->prepare("INSERT INTO wj_categorias(code, name) VALUES(?,?)");
$stmt->bind_param("ss",$code,$name);
$stmt->execute();
header( "Location: category.phtml" );
