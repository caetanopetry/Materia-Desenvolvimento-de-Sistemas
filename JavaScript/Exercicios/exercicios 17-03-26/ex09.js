const prompt = require('prompt-sync')();

let qntpar = 0; let qntimpar = 0; maiorquedez = 0
for (x = 1; x <= 10 ; x++) {
    let num = parseInt(prompt("Digite o número: "))
    if (num % 2 === 0) {
        qntpar += 1
    }
    if (num % 2 !== 0) {
        qntimpar += 1
    }
    if (num >10){
        maiorquedez +=1
    }



    
}

console.log("Quantidade de números pares: ", qntpar)
console.log("Quantidade de números impares: ", qntimpar)
console.log("Quantidade de números maiores que 10: ", maiorquedez)

