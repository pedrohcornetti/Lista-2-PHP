<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
if ($valor1 == $valor2) {
    $valortriplo = ($valor1 + $valor2) * 3;  
    echo "O triplo da somatória entre os dois é $valortriplo";
} else {
    $valorsoma = $valor1 + $valor2;
    echo "A soma dos dois valores é $valorsoma";
}
