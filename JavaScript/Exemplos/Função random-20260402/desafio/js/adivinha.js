const numeroSecreto = Math.floor(Math.random() * 100) + 1
let tentativas = 0

function jogar() {
    const palpite = Number(document.getElementById("palpite").value)
    const msg = document.getElementById("msg")
    tentativas++

    if (palpite > numeroSecreto)
        msg.textContent = "Tente menor!"
    else if (palpite < numeroSecreto)
        msg.textContent = "Tente maior!"
    else
        msg.textContent = "Acertou em " + tentativas + " tentativas!"
}