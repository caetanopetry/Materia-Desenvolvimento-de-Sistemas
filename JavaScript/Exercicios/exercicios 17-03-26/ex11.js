const prompt = require('prompt-sync')();

let qntsolteiros = 0
let qntcasados = 0
let qntdivorciados = 0
let qntviuvos = 0



while (true){
    let nome = prompt("Digite o nome: ");
    
    let estadocivil = prompt("Digite o estado civil: ").toLowerCase();

    if (estadocivil == "solteiro" || estadocivil == "solteira") {
        qntsolteiros+=1
    } else if (estadocivil == "casado" || estadocivil == "casada") {
        qntcasados+=1

    } else if (estadocivil == "divorciado" || estadocivil == "divorciada") {
        qntdivorciados+=1
    } else if (estadocivil == "viuvo" || estadocivil == "viuva") {
        qntviuvos+=1
    } else {
        console.log("Estado civil inválido");
    }

    let resposta = prompt(" ",nome, "você deseja continuar? (s/n): ").toLowerCase();

    if (resposta == "n" || resposta == "não" || resposta == "nao") {
        break;
    }
}

console.log("Programa encerrado");
console.log("Quantidade de solteiros:", qntsolteiros);
console.log("Quantidade de casados:", qntcasados);
console.log("Quantidade de divorciados:", qntdivorciados);
console.log("Quantidade de viuvos:", qntviuvos);