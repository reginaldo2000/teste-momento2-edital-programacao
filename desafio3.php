<?php
echo "<h1>Desafio 3</h1>";

$matrizA[0][0] = 10;
$matrizA[0][1] = 5;
$matrizA[1][0] = 8;
$matrizA[1][1] = 4;
$matrizA[2][0] = 9;
$matrizA[2][1] = 1;

$matrizB[0][0] = 4;
$matrizB[0][1] = 8;
$matrizB[1][0] = 1;
$matrizB[1][1] = 6;
$matrizB[2][0] = 3;
$matrizB[2][1] = 2;

$matrizC = [];

for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 2; $coluna++) {
        $matrizC[$linha][$coluna] = $matrizA[$linha][$coluna] + $matrizB[$linha][$coluna];
    }
}

echo "Matriz A: <br>";
imprimirMatriz($matrizA);

echo "Matriz B: <br>";
imprimirMatriz($matrizB);

echo "Matriz C: <br>";
imprimirMatriz($matrizC);

function imprimirMatriz($matriz)
{
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            echo "[{$linha}][{$coluna}] = " . $matriz[$linha][$coluna] . "<br>";
        }
    }
    echo "<hr>";
}
