<?php
function dividir($a, $b) {
    
    if ($b == 0) {
        throw new DivisionByZeroError("Não é possível dividir por zero.Tente novamente com um divisor diferente de zero.");
    }
    elseif ($b < 0) {
        throw new InvalidArgumentException("O divisor não pode ser negativo.");
    } 
    $resultado = $a / $b;        
    return $resultado;
}

try {
    $resOperacao = dividir(10, -2);
    echo "Resultado da divisão: " . $resOperacao;
}  catch (InvalidArgumentException $e) {
    echo "Erro1: " . $e->getMessage();
}   
catch(DivisionByZeroError $error) {
    echo "Erro: " . $error->getMessage();
} 
catch (Exception $e){
    echo "Erro geral: " . $e->getMessage();
} 
// catch (TypeError $e) {
//     echo "Erro de tipo: " . $e->getMessage();

// }



//throw new Exception("Ocorreu um erro.");

