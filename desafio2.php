<?php

echo "<h1>Desafio 2</h2>";

$matriz = [];

//preenche o a matriz com os dadoss
for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 3; $coluna++) {
        $matriz[$linha][$coluna] = $linha + $coluna;
    }
}

//imprime a matriz
imprimirMatriz($matriz);

function imprimirMatriz($matriz)
{
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            echo "[{$linha}][{$coluna}] = ".$matriz[$linha][$coluna]."<br>";
        }
    }
}
