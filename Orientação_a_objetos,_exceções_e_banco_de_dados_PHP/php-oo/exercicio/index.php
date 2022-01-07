<?php

$pdo = require 'Blog.php';
$blog = new Blog();

switch ($_GET['option']) {
    case 'list':    
        echo "<h3>Seus Posts: </h3>";

        foreach($blog->list() as $value){
            echo '<span> Id: ' . $value['idpost'] . '</span>'. "<br> Descrição: " . $value['descricao'] . "<hr><br>";
        }

        break;
    
    case 'insert':
        $status = $blog->insert($_GET['descricao']);

        if(!$status){
            echo "Não foi possível realizar a operação.";            
            return false;
        }else{
            header("Location: ./index.php?option=list"); /* Redirect browser */  
        }

        break;

    case 'update':
        $status = $blog->update( (int) $_GET['idpost'], $_GET['descricao']);
        
        if($status){
            header("Location: ./index.php?option=list"); /* Redirect browser */   
        }else{
            echo "Não foi possível atualizar o post.";
        }
        
        break;

    case 'delete':
        $status = $blog->delete((int) $_GET['idpost']);

        if($status){
            header("Location: ./index.php?option=list"); /* Redirect browser */   
        }else{
            echo "Não foi possível deletar o post.";
        }
        break;

    default:
        # code...
        break;
}
