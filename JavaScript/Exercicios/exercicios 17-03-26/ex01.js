const prompt = require('prompt-sync')();
console.log("Bem vindo á loja PETRY")


let numero = parseInt(prompt("Digite o código do produto: "))
while (numero < 1 || numero > 7) {
    console.log("Digita um número normal!")
    numero = parseInt(prompt("Digite o código do produto: "))
}
console.log("")
console.log("Classificação dos produtos: ")

switch (numero) {
    case 1:
        console.log("Alimento não perecível")
        break;
    case 2:
        console.log("Alimento  perecível")
        break;
    case 3:
        console.log("Vestuário")
        break;
    case 4:
        console.log("Higiene Pessoal")
        break;
    case 5:
        console.log("Limpeza e utensílios domésticos")
        break;
    case 6:
            console.log("Eletrónicos")
            break;
    case 7:
        console.log("Informática")
        break;
}