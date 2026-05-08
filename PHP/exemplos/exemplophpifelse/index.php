<?php

$idade = 17;

if ($idade < 12) {
    echo "Você é uma criança.";
}
elseif ($idade >= 12 && $idade < 18) {
    echo "Você é um adolescente.";
}
else {
    echo "Você é um adulto.";
}

?>