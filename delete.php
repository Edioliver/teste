<?php
require("config/conexao.php");

$id = filter_input(INPUT_GET, "id");
$result = $con->query("DELETE FROM wj_categorias WHERE id='$id'");
header( "Location: category.phtml" );

