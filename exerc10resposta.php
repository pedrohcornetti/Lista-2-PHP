<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura**2);
    
    if ($imc > 24.9){
        echo "Seu IMC é $imc, acima do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
    }

    elseif($imc < 18.6){
        echo "<p>Seu IMC é $imc, abaixo do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";

    }
    
    else{
        echo "Seu IMC é $imc, portanto está no peso ideal. :) <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
    }
?>