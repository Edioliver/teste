<?php
require('config/conexao.php');

$id = filter_input(INPUT_GET, "id");
var_dump($id);
die();
$result = $con->query("SELECT * FROM wj_categorias where id = $id");


header( "Location: updateCategory.phtml" );




