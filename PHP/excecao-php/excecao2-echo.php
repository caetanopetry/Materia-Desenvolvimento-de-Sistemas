<?php
function dividir($a, $b) {
    
    if ($b == 0) {
       echo "Não é possível dividir por zero.";
    }
    elseif ($b < 0) {
        echo "O divisor não pode ser negativo.";
    } 
            
    return $a / $b;
}

  echo dividir(10, 0);


//throw new Exception("Ocorreu um erro.");

