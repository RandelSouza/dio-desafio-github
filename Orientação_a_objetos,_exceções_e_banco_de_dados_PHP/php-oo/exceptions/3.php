<?php

function validarUsuario(array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
       throw new Exception("Campos obrigatórios não foram preenchidos!");
       
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$usuarioValido = validarUsuario($usuario);

if(!$usuarioValido){
    echo "Usuário inválido!\n";
    return false;
}

echo "\n... executando ...\n";