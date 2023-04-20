<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ache seu Contratente lindo de bonito</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="TelaContratante.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--LINK DO FONT AWESOME PARA ÍCONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include_once('cabecalho.php') ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6 topo-freelancers">
                <h1 class="Titulo-Contratante">Procure uma emrpesa que se encaixe com você</h1>
                <hr>
                <p>A GetDev possiu parceria com varias empresas "vai ter uma texto bem foda aqui to sem ideia"</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="fundo_img">
                    <div class="img_contratante"></div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-4">
                fazer o filtro
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="card-title">Pagina em HTML e CSS</h5>
                                        <hr>
                                    </div>
                                    <div class="col-sm-4">
                                         <p>Criação: 25/09/1908</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="img/image.jpeg" class="imgCard" alt="" srcset="">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="card-text">O projeto de desenvolvimento de sistemas é um esforço
                                            coordenado para criar software customizado para atender às necessidades
                                            específicas de uma organização ou empresa. O processo de desenvolvimento
                                            de sistemas pode ser dividido em várias fases, cada uma delas com suas
                                            próprias tarefas e objetivos específicos.</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                            <a href="" class="btn btn-primary">Mandar Proposta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include_once('TelaContratantePesquisarProjeto.php')?>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php include_once('rodape.php') ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="Projeto/TelaLoginteste/script.js"></script>
</body>

</html>