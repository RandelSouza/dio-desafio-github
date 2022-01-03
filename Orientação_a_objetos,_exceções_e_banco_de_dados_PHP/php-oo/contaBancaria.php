<?php

class contaBancaria {
    public  $banco;
    public $nomeTitular = 'Randel S Almeida';
    public $numeroAgencia;
    public $numeroConta;
    public $saldo;

}

$conta = new contaBancaria();

$conta->numeroAgencia = '12345';

var_dump($conta);