<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
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
        background-color: #7d2ae8;
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
        width: 300px;
        padding: 3px;
        background-color: #7d2ae8;
    }


    .img-empresa img {
        height: 100%;
        width: 100%;
        object-fit: cover;
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
        z-index: 100;
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
</style>
<title>Document</title>
</head>


<body>
    <?php include_once('cabecalho.php'); ?>
    <div class="cartao">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 d-flex justify-content-center">
                    <div class="d-flex justify-content-center ">
                        <div class="cartao-conteudo">
                            <div class="img mt-4">
                                <img src="img/jimmy-fermin-bqe0J0b26RQ-unsplash.jpg" alt="">
                            </div>
                            <div class="conteudo-texto d-flex justify-content-evenly
                        ">
                                <div class="contratacoes d-inline">
                                    <p class="small text-center">contratos: <br> <span style="font-weight: bold;"> 100</span>
                                    </p>
                                </div>
                                <div class="nome d-inline mx-5 w-25">
                                    <p class="text-center" style="font-weight: bold; font-size:25px;">XING-LING CORPORAÇÕES</p>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

            <div class="row">
                    <button>Novo projeto</button>
                </div>
            </div>
                <div class="row mt-5 ml-4">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="seu-projeto">
                                <h1 style="text-align: center; ">Ultimo projeto</h1>
                                <hr>
                                <div class="card-title">
                                    <h2 class="ms-4 mt-4">Nome do projeto</h2>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="img-empresa">
                                                <img src="img/jimmy-fermin-bqe0J0b26RQ-unsplash.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="descricao-seu-projeto">
                                                *Descrição do projeto* Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id impedit accusantium perspiciatis facere aut assumenda commodi asperiores repellendus, magnam blanditiis pariatur, et quasi earum atque animi omnis laboriosam nam aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit porro saepe molestias impedit assumenda quae natus alias. Voluptatum, cupiditate quaerat. Consequatur vero mollitia in, officia quisquam debitis sequi corrupti asperiores.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 status">
                                            <p class="text-center">STATUS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="portfolio">
                                    <div class="row mt-2 ">
                                        <div class="col-md-12">
                                        <h1 class="pb-2" style="text-align: center; border-bottom: black 1px solid;">Projetos</h1>
                                        </div> 
                                    </div>
                                    <div class="row">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    oi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>