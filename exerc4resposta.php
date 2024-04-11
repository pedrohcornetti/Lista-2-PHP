<?php
$valor1 = $_POST['valor1'];
for ($i = 1; $i <= 10; $i++  ) {
    $tabuada = $valor1 * $i;
    echo "$valor1 x $i = $tabuada <br>";
} 

