<?php

$pdo = require 'Produtos.php';
$produto = new Produto();

switch ($_GET['option']) {
    case 'list':    
        echo "<h3>Produtos: </h3>";

        foreach($produto->list() as $value){
            echo '<span> Id: ' . $value['idProduto'] . '</span>'. "<br> Descrição: " . $value['descricao'] . "<hr><br>";
        }

        break;
    
    case 'insert':
        $status = $produto->insert($_GET['descricao']);

        if(!$status){
            echo "Não foi possível realizar a operação.";            
            return false;
        }else{
            header("Location: ./index.php?option=list"); /* Redirect browser */  
        }

        break;

    case 'update':
        $status = $produto->update( $_GET['descricao'], (int) $_GET['idproduto']);
        
        if($status){
            header("Location: ./index.php?option=list"); /* Redirect browser */   
        }else{
            echo "Não foi possível atualizar o produto.";
        }
        
        break;

    case 'delete':
        $status = $produto->delete($_GET['idproduto']);

        if($status){
            header("Location: ./index.php?option=list"); /* Redirect browser */   
        }else{
            echo "Não foi possível deletar o produto.";
        }
        break;

    default:
        # code...
        break;
}