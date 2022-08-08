<?php
require_once("config/conexao.php");

$id = $_POST['id'];
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$categories = $_POST['categories'];
$description = $_POST['description'];

$categorie = implode(',', $categories );

$result = $con->query("UPDATE product SET sku='$sku', name='$name', price='$price', quantity='$qty', categories='$categorie', description='$description' WHERE id='$id'");

header( "Location: products.phtml" );