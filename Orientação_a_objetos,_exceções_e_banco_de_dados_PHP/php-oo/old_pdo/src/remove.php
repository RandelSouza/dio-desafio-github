<?php

declare(strict_types=1);

$pdo = require 'connect.php';

$sql = 'DELETE FROM produtos WHERE idproduto = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['idproduto']);
$prepare->execute();

echo $prepare->rowCount();