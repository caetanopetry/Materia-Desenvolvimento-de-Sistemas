  function cadastrar() {
        const nomes = [];
        const ul = document.getElementById("lista");
        ul.innerHTML = "";

        for (let i = 0; i < 3; i++) {
            nomes.push(prompt("Digite um nome:"));
        }

        for (let nome of nomes) {
            ul.innerHTML += `<li>${nome}</li>`;
        }
    }2