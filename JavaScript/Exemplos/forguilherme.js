const prompt = require('prompt-sync')();

for (x = 1; x <= 3 ; x++) {
    let nota1 = parseFloat(prompt("Digite a primeira nota:"))
    let nota2 = parseFloat(prompt("Digite a segunda nota:"))
    let nota3 = parseFloat(prompt("Digite a terceira nota:"))
    let media = 7
    let nota = (nota1 + nota2 + nota3 )/ 3

    if (nota < media) {
        console.log("Reprovado")
    }
    else {
        console.log("Aprovado")
    }

}
