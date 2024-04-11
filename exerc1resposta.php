<?php
$valor1 = $_POST['valor1'];
if ($valor1 > 0) {
    echo "O valor é positivo";
} else if ($valor1 < 0) {
    echo "O valor é negativo";
} else {
    echo "O valor é zero";
}