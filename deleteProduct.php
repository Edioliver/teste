<?php
require("config/conexao.php");

$id = filter_input(INPUT_GET, "id");
$result = $con->query("DELETE FROM product WHERE id='$id'");
header( "Location: products.phtml" );

