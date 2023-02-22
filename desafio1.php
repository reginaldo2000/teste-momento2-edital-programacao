<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Desafio 1 - ESP-CE</title>
        <link href="template.css" rel="stylesheet">
    </head>
    <body>
        <main class="main_content">
            <h1>Desafio 1</h1>
            <hr>

            <form method="POST" action="desafio1.php" autocomplete="off">
                <div class="form_group_flex">

                    <div class="group_fields">
                        <label for="campo1">Valor 1:</label>
                        <input type="number" name="valor1" id="campo1" required>
                    </div>

                    <div class="group_fields">
                        <label for="campo2">Valor 2:</label>
                        <input type="number" name="valor2" id="campo2" required>
                    </div>

                    <div class="group_fields">
                        <label for="campo3">Valor 3:</label>
                        <input type="number" name="valor3" id="campo3" required>
                    </div>

                    <div class="group_fields">
                        <label for="campo4">Valor 4:</label>
                        <input type="number" name="valor4" id="campo4" required>
                    </div>

                    <div class="group_fields">
                        <label for="campo5">Valor 5:</label>
                        <input type="number" name="valor5" id="campo5" required>
                    </div>

                    <div class="group_fields">
                        <label for="campo6">Valor 6:</label>
                        <input type="number" name="valor6" id="campo6" required>
                    </div>

                    <div class="group_fields">
                        <button type="submit">
                            Enviar Dados
                        </button>
                    </div>

                </div>
            </form>

            <?php
            $campos = filter_input_array(INPUT_POST) ?? [];
            if (count($campos) > 0) {
                //pega os valores enviados atraves do form e add em um array
                $arrayDesordenado = array_values($campos);

                if (!validaArray($arrayDesordenado)) {
                    echo "Você não pode informar valores repetidos!";
                    exit();
                }

                //imprime o array desordenado
                imprimirTexto("Array desordenado: ");
                imprimirArray($arrayDesordenado);

                //imprime o maior valor e sua posição
                $dadosValorMaior = maiorValor($arrayDesordenado);
                imprimirTexto("Maior valor: " . $dadosValorMaior["valor"] . " - Sua posição: " . $dadosValorMaior["posicao"]);

                //imprime o menor valor e sua posição
                $dadosMenorValor = menorValor($arrayDesordenado);
                imprimirTexto("Menor valor: " . $dadosMenorValor["valor"] . " - Sua posição: " . $dadosMenorValor["posicao"]);
                imprimirTexto("<hr>");

                //ordena o array de forma crescente
                sort($arrayDesordenado);
                $arrayOrdenado = $arrayDesordenado;

                //imprime o array ordenado
                imprimirTexto("Array ordenado:");
                imprimirArray($arrayOrdenado);
            }

            function imprimirTexto($texto)
            {
                echo $texto . "<br>";
            }

            function imprimirArray($array)
            {
                for ($i = 0; $i < count($array); $i++) {
                    echo "[{$i}] = {$array[$i]} <br>";
                }
                echo "<hr>";
            }

            function maiorValor($array)
            {
                $valor = $array[0];
                $pos = 0;
                for ($i = 0; $i < count($array) - 1; $i++) {
                    if ($valor < $array[$i + 1]) {
                        $valor = $array[$i + 1];
                        $pos = $i + 1;
                    }
                }
                return [
                    "posicao" => $pos,
                    "valor" => $valor
                ];
            }

            function menorValor($array)
            {
                $valor = $array[0];
                $pos = 0;
                for ($i = 0; $i < count($array) - 1; $i++) {
                    if ($valor > $array[$i + 1]) {
                        $valor = $array[$i + 1];
                        $pos = $i + 1;
                    }
                }
                return [
                    "posicao" => $pos,
                    "valor" => $valor
                ];
            }

            function validaArray($array)
            {
                for ($i = 0; $i < count($array); $i++) {
                    for ($c = $i + 1; $c < count($array); $c++) {
                        if ($array[$i] == $array[$c]) {
                            return false;
                        }
                    }
                }
                return true;
            }
            ?>
        </main>


    </body>
</html>
