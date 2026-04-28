const frm = document.querySelector("form")
const tipo = document.querySelector("#inTipo")
const resp = document.querySelector("#inResultado")

frm.addEventListener("submit", (e) => {
    const inTemp = Number(frm.inTemp.value)
    const conversao = tipo.value
    let resultado

    if (conversao == "cToF") {

        resultado = (inTemp * 9/5) + 32
    }
    else if (conversao == "fToC") {

        resultado = (inTemp - 32) * 5/9
    }

    resp.innerText = `O resultado é ${resultado.toFixed(2)}`
    e.preventDefault()
})