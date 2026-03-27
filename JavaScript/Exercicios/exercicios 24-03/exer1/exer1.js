//Cria referência ao form e ao elemento
// h3(Onde será exibido a resposta do programa)


const frm = document.querySelector('form')
const resp = document.querySelector('#h3')


frm.addEventListener("submit", (e) => {
    const peso = Number(document.querySelector("#inPeso").value)
    const altura = Number(document.querySelector("#inAltura").value)
    const imc = peso / (altura * altura)

    let classificacao = ""

    if (imc < 18.5) {
        classificacao = "Abaixo do peso"
    } else if (imc < 25) {
        classificacao = "Peso normal"
    } else if (imc < 30) {
        classificacao = "Sobrepeso"
    } else if (imc < 35) {
        classificacao = "Obesidade grau 1"
    } else if (imc < 40) {
        classificacao = "Obesidade grau 2"
    } else {
        classificacao = "Obesidade grau 3"
    }

    resp.innerText = `IMC: ${imc.toFixed(2)}\nClassificação: ${classificacao}`

    e.preventDefault()
})
