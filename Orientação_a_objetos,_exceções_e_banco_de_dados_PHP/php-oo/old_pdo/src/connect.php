<?php

declare(strict_types=1);

$pdo = null;

try {
   $pdo = new PDO('mysql:host=localhost;dbname=dio', "datasoft", "devdados21");
} catch (\Throwable $th) {
    echo $th->getMessage();
    die();
}
//var_dump($pdo);
return $pdo;