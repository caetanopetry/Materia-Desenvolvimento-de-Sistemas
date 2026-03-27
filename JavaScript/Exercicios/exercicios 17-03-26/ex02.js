const prompt = require('prompt-sync')();

console.log("Sistema de login PETRY")

let usuario = (prompt("Digite o usuário: "))
let senha = (prompt("Digite a senha: "))
let idade = (parseInt(prompt("Digite a idade: ")))

if (usuario == "admin" && senha == "1234") {
    console.log("Acesso permitido como adm")
}
else if (idade >= 18 || usuario == "visitante"){
    console.log("Acesso permitido como usuário maior de idade")
}
else {
    console.log("Acesso negado!")
}
