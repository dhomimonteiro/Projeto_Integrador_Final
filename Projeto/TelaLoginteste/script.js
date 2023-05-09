
const caixaForm = document.querySelector(".caixaForm");
const btnEntrar = document.querySelector(".btnEntrar");
const btnCadastrar = document.querySelector(".btnCadastrar");
const body = document.querySelector("body");

btnCadastrar.onclick = function() {
    caixaForm.classList.add('active');
    body.classList.add('active');
}

btnEntrar.onclick = function() {
    caixaForm.classList.remove('active');
    body.classList.remove('active');
}




