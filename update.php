<?php
require_once("config/conexao.php");

$id = $_POST['id'];
$name = $_POST['name'];
$code = $_POST['code'];

$result = $con->query("UPDATE wj_categorias SET name='$name', code='$code' WHERE id='$id'");
header( "Location: category.phtml" );