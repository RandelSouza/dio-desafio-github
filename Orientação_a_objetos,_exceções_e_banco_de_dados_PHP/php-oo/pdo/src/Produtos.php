<?php

declare(strict_type=1);

class Produto
{
    /**
     * @var PDO
     */
    private $conexao;
    

    public function __construct()
    {
        try{
            $this->conexao = new PDO('mysql:host=localhost;dbname=dio', "datasoft", "devdados21");
        }catch(Exception $ex){
            echo $ex->getMessage();
            die();
        }
       
    }

    public function list() : array
    {
        $sql = 'SELECT * FROM produtos;';

        $produtos = [];

        foreach($this->conexao->query($sql) as $key => $product)
        {
            array_push($produtos, $product);          
        }

        return $produtos;
    }

    public function insert(string $descricao) : int
    {
        $sql = 'INSERT INTO produtos(descricao) VALUES (?);';
        
        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();

    }

    public function update(string $descricao, int $idProduto) : int
    {

        $sql = 'UPDATE produtos SET descricao = ? WHERE idproduto = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $idProduto);
        $prepare->execute();

        return $prepare->rowCount();
        
    }

    public function delete(int $idProduto) : int
    {
        $sql = 'DELETE FROM produtos WHERE idproduto = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $idProduto);
        $prepare->execute();

        return $prepare->rowCount();
    }
}
