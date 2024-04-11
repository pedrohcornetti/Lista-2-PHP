<?php
$valor1 = $_POST['valor1'];
$fatorial = 1;
for ($i = $valor1; $i > 0; $i--) {
    $fatorial = $fatorial * $i;
} 
echo "O fatorial de $valor1 é $fatorial";