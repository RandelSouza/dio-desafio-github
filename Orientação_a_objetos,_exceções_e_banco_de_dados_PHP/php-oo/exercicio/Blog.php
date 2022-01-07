<?php

declare(strict_type=1);

class Blog{
    
    /**
     * @var PDO
     */

    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=dio", "datasoft", "devdados21");
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        
    }

    public function list(): array
    {
        $sql = 'SELECT * FROM post;';

        $posts = [];

        foreach($this->conexao->query($sql) as $key => $post)
        {
            array_push($posts, $post);          
        }

        return $posts;
    }

    public function insert(string $descricao): int
    {   
        $sql = 'INSERT INTO post (descricao) VALUES (?);';
          
        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
        
    }

    public function update(int $idpost, string $descricao): int
    {
        $sql = 'UPDATE post SET descricao = ? WHERE idpost = ?;';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $idpost);
       
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $idpost): int
    {
        $sql = 'DELETE FROM post WHERE idpost = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $idpost);
        $prepare->execute();

        return $prepare->rowCount();
    }

}