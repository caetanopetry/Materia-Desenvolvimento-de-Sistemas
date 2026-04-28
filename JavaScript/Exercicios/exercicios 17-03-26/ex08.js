const prompt = require('prompt-sync')();

for (x = 1; x <= 15 ; x++) {
    let num = parseInt(prompt("Digite o número: "))
    console.log("Raiz quadrada de",num, "é",Math.sqrt(num))

}
