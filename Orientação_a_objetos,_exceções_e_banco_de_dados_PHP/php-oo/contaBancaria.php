<?php

declare(strict_types=1);

class contaBancaria {
    /**
     * @var string
     */
    private $banco;
    /**
     * @var string
     */
    private $nomeTitular;
    /**
     * @var string
     */
    private $numeroAgencia;
    /**
     * @var string
     */
    private $numeroConta;
    /**
     * @var float
     */
    private $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular; 
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor): string
    {
        $this->saldo += $valor;
        return "Depósito de R$ " . $valor . ' realizado!';
    }

    public function sacar($valor): string
    {
        $this->saldo -= $valor;
        return "Saque de R$ " . $valor . ' realizado!';
    }
}

$conta = new contaBancaria(
    'Banco do Brasil', // banco
    'Ana Bitenccur',   // nomeTitular
    '6545-8',          // numeroAgencia
    '178574-91',       // numeroConta
    400.00           // saldo    
);

var_dump($conta);

echo $conta->depositar(100.00);
echo PHP_EOL;
echo $conta->getSaldo();
echo PHP_EOL;
echo $conta->sacar(105.00);
echo PHP_EOL;
echo $conta->getSaldo();
echo PHP_EOL;