<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            height: 100vh;
            background-color: #f2f2f2;
        }
        .img {
            height: 200px;
            width: 200px;
            border-radius: 50%;
            padding: 3px;
            background-color: var(--roxo-escuro);
        }
        .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .img-empresa {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            padding: 3px;
            background-color: #7d2ae8;
        }
        .img-empresa img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .cartao {
            position: relative;
            width: 100%;
            background-color: #fff;
        }
        .cartao::before {
            content: "";
            position: absolute;
            height: 170px;
            width: 100%;
            background-color: var(--roxo-escuro);
        }
        .cartao-conteudo {
            position: relative;
            z-index: 10;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .conteudo-texto {
            width: 100%;
        }
        .avaliacao i {
            cursor: pointer;
        }
        .status p {
            background-color: #7d2ae8;
            color: white;
            border-radius: 20px;
        }
        .fa-pen-to-square {
            font-size: 1.2em;
            cursor: pointer;
        }
        .fa-pen-to-square:hover {
            color: #7d2ae8;
        }
        .fa-plus{
            height: 20px;
            width: 20px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            cursor: pointer;
            color: var(--roxo-escuro);
        }
        .fa-plus:hover{
            background-color: #ccc;
        }
        .nome a {
            color: var(--roxo-escuro);
        }
    </style>

</head>


<body>
<?php //include('perfil_autenticar.php');?>
    <?php 
    include_once('cabecalho_autenticar.php');
    include_once('Projeto/TelaLoginteste/conexao.php');
    
    try {
        $sql = $conn->query("SELECT * from Freelancer where id_freelancer = $idUsuario");

        while ($row = $sql->fetch()) {
            $nome = $row[1];
            $img = $row[2];
            echo '
    <div class="cartao">
    <div class="container-fluid">
        <div class="row ">
        
            <div class="col-sm-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center ">
                    <div class="cartao-conteudo">
                        <div class="img mt-4">
                            <img src="'.$img.'">
                        </div>
                        <div class="conteudo-texto d-flex justify-content-evenly
                    ">
                            <div class="contratacoes d-inline">
                                <p class="small text-center">Vezes contratado: <br> <span style="font-weight: bold;"> 45</span>
                                </p>


                            </div>
                            <div class="nome d-inline mx-5 w-25 d-flex justify-content-center">
                                <p class="text-center" style="font-weight: bold; font-size:30px; display:inline-block" id="txtNome" name="txtNome">'.$row[1].'</p>
                                <a href="form_AlterarFreelancer.php"><i class="fas fa-regular fa-pen-to-square" style="z-index:10"></i></a>
                            </div>
                            <div class="avaliacao d-inline">
                                <p class="text-center small">
                                    Avaliação <br>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                            </div>
                        </div>
                        <div class="descricao px-3 w-75 mt-3">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, ad saepe a sed quod porro in velit molestiae similique sit necessitatibus id, ab, nam fugit suscipit aspernatur iusto dicta perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus non vel dolores, officia tempora debitis deserunt. Consectetur fugiat eos, corrupti voluptatem debitis commodi blanditiis vel voluptate officia, reiciendis aut soluta.
                            </p>
                        </div>
                        
                        <div>';
                        
                            try {
                                $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
                                freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
                                INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row[0];");
                            } catch (PDOException $ex) {
                                echo $ex->getMessage();
                            }
                            while ($linha = $sql2->fetch()){
                                echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="d-inline mx-2 px-2">'.$linha[3].'</p>';
                            }
                    echo '<a href="form_AlterarFreelancer.php#dados-linguagem"><i class="fa-solid fa-plus"></i></a>
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="seu-projeto">
                    <h3>Seu projeto</h3>
                    <div class="card">
                        <div class="card-title">
                            <h4 class="ms-4 mt-4">Nome do projeto</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <h5 class="nome-empresa">Nome-empresa</h5>
                                    <p class="descricao-seu-projeto">
                                        *Descrição do projeto* Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id impedit accusantium perspiciatis facere aut assumenda commodi asperiores repellendus, magnam blanditiis pariatur, et quasi earum atque animi omnis laboriosam nam aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit porro saepe molestias impedit assumenda quae natus alias. Voluptatum, cupiditate quaerat. Consequatur vero mollitia in, officia quisquam debitis sequi corrupti asperiores.
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <div class="img-empresa">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1 col-md-2 status">
                                    <p class="text-center">STATUS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-4">
            </div>
        </div>
        
        <div class="row pb-4">
        <div class="col-sm-1 col-md-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-7 mt-3">
                <div class="card">
                    <div class="portfolio">
                        <div class="row">
                            <h2 class="pt-3 ps-3">Portfólio</h2>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 d-lg-none"></div>
            <div class="col-sm-1 col-md-1 d-lg-none"></div>
            <div class="col-sm-10 col-md-10 col-lg-3 mt-3">
                <div class="card">
                    <div class="portfolio">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <h2 class="pt-3 ps-3">Feedback</h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center py-3">
                            <div class="col-sm-11">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p style="font-size:25px; height:50px; line-height: 50px;">Nome</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <img style="background-color: #000; width:50px; height:50px; border-radius: 50%">
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="avaliacao d-inline">
                                                <p class="small">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus repellat amet cumque? Provident voluptas quae dicta neque similique? Odio quisquam alias error! Nesciunt eum sint debitis id possimus voluptatibus placeat!</p>
                                        </div>                                     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>      
            ';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    ?>
    <?php include_once('rodape.php');?>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script>
//     function PesquisarFreelancer() {
//         let id_freelancer = $idUsuario;
//         let action = 'perfil_freelancer_pesquisar.php';
        
//         $.ajax({
//             url: action,
//             type: 'post',
//             data: {
//                 id_freelancer
//             },
//             beforeSend: function() {
//                 alert('carregando página');
//             },
//             success: function(data, status, xhr){
//                 $('#txtNome').text($('#nomeFreelancer').text());
//                 $('#imgPesquisa').text($('#imgFreelancer').text());

//             },
//             error: function(jqXhr, textStatus, errorMessage) {
//                 alert('deu certo n');
//             }
//         })
// }
</script>
</body>

