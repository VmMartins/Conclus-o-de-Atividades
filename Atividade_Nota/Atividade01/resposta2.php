<?php
$a = $_GET["NumA"];
$b = $_GET["NumB"];
$c = $_GET["NumC"];

function ordenarValores($a, $b, $c) {
    // Cria um array com os valores recebidos
    $valores = array($a, $b, $c);

    // Ordena o array em ordem crescente
    sort($valores);

    // Retorna o array ordenado
    return $valores;
}
$resultado = ordenarValores($a, $b, $c);

// Imprime os valores ordenados
echo "Valores ordenados: " . implode(", ", $resultado);
?>