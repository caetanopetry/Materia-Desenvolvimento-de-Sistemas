const frm = document.querySelector('form')
const resp = document.querySelector('#inResp')

frm.addEventListener("submit", (e) => {
    e.preventDefault()

    const nome = frm.inNome.value
    const nota1 = Number(document.querySelector("#inNota1").value)
    const nota2 = Number(document.querySelector("#inNota2").value)
    const freq = Number(document.querySelector("#inFreq").value)

    const media = (nota1 + nota2) / 2

    let erro = ""
    let Error = false
    let classificacao = ""

    if (media > 10 || media < 0 || freq > 100 || freq < 0) {
        erro = "Valores fora do permitido!"
        Error = true
    }
    else if (media >= 7 && freq >= 75) {
        classificacao = "Aprovado"
    }
    else if (media > 4 && media < 7 && freq >= 75) {
        classificacao = "Em exame"
    }
    else {
        classificacao = "Reprovado"
    }

    if (Error) {
        resp.innerText = erro
    } else {
        resp.innerText = `Aluno: ${nome}\n Média: ${media.toFixed(2)} \n Frequência: ${freq}%\n Classificação: ${classificacao}`
    }
})