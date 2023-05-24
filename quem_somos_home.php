<div class="sessaoQueFazemos" style="background: #fff;">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-6">
                <img src="img/Coding workshop-bro.png" alt="img mt foda" style="width: 400px; height: 400px;">
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4 titulo-principal" style="color:  #1e102e; font-size: 55px; margin-top: 50px;">O que fazemos?</h1>
                <p style="font-size: 20px;"><span class="" id="text">Nós fornecemos acesso aos melhores talentos de freelancers para solucionar projetos e atender às necessidades específicas de negócios. Com uma ampla rede de profissionais especializados, oferecemos soluções personalizadas em diversas áreas. Entre em contato para descobrir como podemos ajudar a impulsionar seu negócio</span></p>
            </div>
        </div>
    </div>
</div>

<style>
.titulo-principal{
    max-width: 480px;
    text-align: center;
    margin: 60px auto;
}
.titulo-principal:after{
 content: '|';
 margin-left: 5px;
 opacity: 1;
 animation: pisca .7s infinite;
}
/* Animação aplicada ao content referente a classe *.titulo-principal* resultando num efeito de cursor piscando. */

@keyframes pisca{
    0%, 100%{
        opacity: 1;
    }
    50%{
        opacity: 0;
    }
}
</style>

<script>
//     let i = 0;
//     let message = "";

// typing();

// function typing(){
//     if (i < message.length){
//         document.getElementById('text').innerHTML += message.charAt(i);
//         i++;
//         setTimeout(typing, 10);
//     }
// }

function typeWrite(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ' ';
    textoArray.forEach(function(letra, i){   
      
    setTimeout(function(){
        elemento.innerHTML += letra;
    }, 15 * i)

  });
}
const titulo = document.querySelector('#text');
typeWrite(titulo);
</script>
