<?php

$dia = "segunda";

switch ($dia) {

    case "segunda":
        echo "Hoje é dia de trabalhar!";
        break;

    case "sabado":
    case "domingo":
        echo "Hoje é fim de semana!";
        break;

    default:
        echo "Dia comum da semana.";
}

?>