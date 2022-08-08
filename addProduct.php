<?php
require('config/conexao.php');

$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$categories = $_POST['categories'];
$description = $_POST['description'];
$arquivo = $_FILES['arquivo']['name'];
$_UP['dir'] = 'images/product/';
move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['dir']. $arquivo);

$categorie = implode(',', $categories );

$stmt= $con->prepare("INSERT INTO product(sku, name, price, quantity, categories, description, image) VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$sku,$name, $price, $qty, $categorie, $description, $arquivo);
$stmt->execute();
header( "Location: products.phtml" );