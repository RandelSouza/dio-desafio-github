<?php

declare(strict_types=1);

$pdo = require 'connect.php';

$sql = 'SELECT * FROM produtos;';

echo "<h3>Produtos: </h3>";

foreach($pdo->query($sql) as $key => $value){
    echo '<span> Id: ' . $value['idProduto'] . '</span>'. "<br> Descrição: " . $value['descricao'] . "<hr><br>";

}