const prompt = require('prompt-sync')();

let maiordeidade = 0; let menordeidade = 0;

let num = parseInt(prompt("Digite a idade: "))
while (num != 0) {


    if (num >= 18) {
        maiordeidade += 1
    }
    if (num < 18) {
        menordeidade += 1
    }
    num = parseInt(prompt("Digite a idade: "))
}
console.log("Programa encerrado!")
console.log("Quantidade de pessoas maiores de idade: ", maiordeidade)
console.log("Quantidade de pessoas menores de idade : ", menordeidade)

