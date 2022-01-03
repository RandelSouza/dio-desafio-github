<?php

declare(strict_types=1);

class Venda{
    /**
     * @var string
     */
    private $data;

      /**
     * @var string
     */
    private $produto;

      /**
     * @var int
     */
    private $quantidade;

      /**
     * @var float
     */
    private $valorTotal;

    public function __construct(
        string $data,
        string $produto,
        int $quantidade,
        float $valorTotal
        ){
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setProduto(string $produto)
    {
        $this->produto = $produto;
    }

    public function getProduto(): string
    {
        return $this->produto;
    }

    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setValorTotal(float $valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function getVenda(): string
    {
        return "Data: " . $this->data . "\n" .
                "Produto: " . $this->produto . "\n" .
                "Quantidade: " . $this->quantidade . "\n" . 
                "Valor Total: " . $this->valorTotal . "\n";
    }
}

$venda1 = new Venda(
    '03/01/2022',   // data
    'Arroz',        // produto
    10,           // quantidade
    59.90           // valorTotal
);

echo $venda1->getVenda();