<?php

declare(strict_types=1);

$pdo = require 'connect.php';

$sql = 'UPDATE produtos SET descricao = ? WHERE idproduto = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->bindParam(2, $_GET['idproduto']);
$prepare->execute();

echo $prepare->rowCount();