const prompt = require('prompt-sync')();

console.log("Sistema de login PETRY")
let tentativas = 1

while (tentativas <= 3) {
    
    let usuario = (prompt("Digite o usuário: "))
    let senha = (prompt("Digite a senha: "))

    if (usuario == "usuario" && senha == "12345") {
        console.log(" Login realizado com sucesso")
        logado = true
        break
    }
    else {
        console.log(" Dados incorretos!")
        tentativas+=1
        }
}
if (logado == false){
    console.log("Tentativas excedidas!")
}

