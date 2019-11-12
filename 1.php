<?php
    $siglas = ['ES', 'MG', 'RJ', 'SP'];
    $estados = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
    $resultado =[];
    for($i=0; $i< sizeof($estados);$i++)
    {
        $nome = explode(" ", strtoupper($estados[$i]));
        $result = "";
        $result = $nome[0][0];
        $result .= $nome[sizeof($nome) -1][0];
        $resultado[$result]=$estados[$i];
    }
    while ($nome_estados= current($resultado)) {
        echo key($resultado) ." - " . $nome_estados . "<br>";
        next($resultado);
    }

?>