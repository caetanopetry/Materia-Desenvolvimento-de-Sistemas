//Cria e referencia os elementos da página
//h3(Onde será exibido a resposta

const frm = document.querySelector("form")
const resp = document.querySelector("h3")

frm.addEventListener("submit", (e) => {
    const nome = frm.inNome.value //Obtém o nome digitado no form
    resp.innerText = `Olá ${nome}, seja bem-vindo(a)!` //Exibe a resposta do programa
    e.preventDefault() //Evita o enfio do form
})