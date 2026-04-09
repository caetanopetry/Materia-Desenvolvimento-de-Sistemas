const frm = document.querySelector("form")
const lista = document.querySelector("#listaTarefas")
const btnSelecionar = document.querySelector("#btnSelecionar")
const btnRemover = document.querySelector("#btnRemover")

let modoSelecionar = false // variável para controlar o modo de seleção, inicialmente é falso para impedir o usuário de selecionar uma tarefa sem clicar no botão selecionar
btnSelecionar.addEventListener("click", () => {
    
    // verificação para ver se o modo selecionar está desligado
    if (modoSelecionar == false) {
        modoSelecionar = true// liga o modo selecionar
        btnSelecionar.innerText = "Selecionando..." // altera o texto do botão para indicar ao usuário que ele está no modo de seleção
    } 
    else {
        modoSelecionar = false // deixa o modo selecionar desligado
        btnSelecionar.innerText = "Selecionar" // texto original de volta
    }

})

frm.addEventListener("submit", (e) => {
    e.preventDefault()

    const tarefa = document.querySelector("#inTarefa").value.trim() // função trim é pra remover espaços no inicio ou no fim da resposta do usuário ou de uma string

    // verifica se a tarefa está vazia, se estiver, exibe um alerta ao usuário
    if (tarefa == ""){
        alert("Tarefa vazia não né!")
        return
    }

    // cria um novo item(tarefa) na lista de tarefas
    const li = document.createElement("li")
    li.textContent = tarefa // coloca o texto da tarefa dentro do li


    li.addEventListener("click", () => {
        //verificação para ver se o modo selecionar está ativado
        if (modoSelecionar == true) {
            
            const selecionado = document.querySelector(".selecionado") //.selecionado já foi criado no html e no css
            
            // verifica se já existe um item selecionado e remove a seleção anterior
            if (selecionado != null) {
                sjelecionado.classList.remove("selecionado")
            }
        
            li.classList.add("selecionado") // aqui é pra adicionar a classe selecionado no li que foi clicado
        }

    })

    //adiciona o li na lista (mostra a tarefa na tela)
    lista.appendChild(li)


})

btnRemover.addEventListener("click", () => {
    const selecionado = document.querySelector(".selecionado") 

    if (selecionado != null) {
        lista.removeChild(selecionado) // aqui é pra remover o li selecionado da lista
    }
    else{
        alert("Não há tarefa selecionada para remover!")

    }
})