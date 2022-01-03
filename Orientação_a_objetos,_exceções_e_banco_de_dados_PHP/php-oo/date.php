<?php

// echo date('d/m/y') . PHP_EOL;

$data = new DateTime();

$intervalo = new DateInterval('P5DT10H50M');

//$data->add($intervalo);
$data->sub($intervalo);

//var_dump($data); 
echo $data->format('d/m/Y H:i:s') . PHP_EOL;