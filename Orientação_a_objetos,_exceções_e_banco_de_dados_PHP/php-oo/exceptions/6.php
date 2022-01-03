<?php

function divisao($numero1, $numero2)
{
    if($numero1 == 0 || $numero2 == 0)
    {
        throw new Exception("Error Processing Request");
        
    }

}

try {
    divisao(10, 0);
} catch (Exception $th) {
    echo "Não pode haver zero nos paramêtros!\n";
} finally {
    echo "Fim do programa!\n";
    die();
}