const opcoes = ["pedra","papel","tesoura"]

let pontosJogador = 0
let pontosPc = 0

const imagens = {
    pedra: "img/pedra.png",
    papel: "img/papel.png",
    tesoura:"img/tesoura.png"
}

function jogar(escolhaJogador){

    // escolha aleatória do computador
    const pos = Math.floor(Math.random() * 3)
    const escolhaPc = opcoes[pos]

    // mostrar imagens escolhidas

    document.getElementById("imgJogador").src = imagens[escolhaJogador]
    console.log('escolha pc ' + escolhaPc)
    document.getElementById("imgPc").src = imagens[escolhaPc] 
   
   
    let mensagem = ""

    if(escolhaJogador === escolhaPc){
        mensagem = "Empate 😗"
    }
    else if(
        (escolhaJogador === "pedra" && escolhaPc === "tesoura") ||
        (escolhaJogador === "tesoura" && escolhaPc === "papel") ||
        (escolhaJogador === "papel" && escolhaPc === "pedra")
    ){
        mensagem = "Você venceu 👨"
       
    }
    else{
        mensagem = "Computador venceu 🤖"
       
    }


  
    document.getElementById("mensagem").innerText = mensagem
}