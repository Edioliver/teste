<?php

$con = new mysqli("127.0.0.1", "application","senha123", "application", "3307");
if($con->connect_error){
    echo "erro ao conectar <br>";
}