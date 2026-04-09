const frm = document.querySelector("form")
const resp3 = document.querySelector("#inResultado")

frm.addEventListener("submit", (e) => {
    const num1 = Number(frm.inNum1.value)
    const num2 = Number(frm.inNum2.value)
    const operacao = frm.inOperacao.value

    if (operacao == "soma") {
        resultado = (num1 + num2)
    }
    else if (operacao == "sub") {
        resultado = (num1 - num2)
    }
    else if (operacao == "multi") {
        resultado = (num1 * num2)
    }
    else if (operacao == "div") { 
        if (num2 == 0) {
            resp3.innerText = "Não é possível dividir por zero!"
            return
        }
        else{
            resultado = (num1 / num2)

        }
    }
    resp3.innerText = `O resultado é ${resultado}`
    e.preventDefault()
})