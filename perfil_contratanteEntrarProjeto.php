<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form_CadastroContratante.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/dfcce2b32e.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
    <style>
        .imgProjeto {
            max-width: 200px;
            max-height: 200px;
            min-width: 200px;
            min-width: 200px;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        .cards {
            border-radius: 5px;
            box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
            padding: 30px;
            margin: 20px;
            width: auto;
            transition: all 0.3s ease-out;
        }
    </style>
    <?php include_once('Projeto/TelaLoginteste/conexao.php') ?>
    <div class="div" style="display: none;">
        <?php include_once('perfil_contratantePesquisarProjeto.php') ?>
    </div>
    <div class="container">
        <div id="form">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="text-align: center; border: 1px #800080 solid; padding: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        Projeto: Fabula
                    </h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                    <img src="img/image.jpeg" alt="" class="imgProjeto">
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card cards">
                                <p>O projeto consiste na criação de um site de comércio eletrônico responsivo,
                                    utilizando as linguagens HTML e CSS. O objetivo é desenvolver uma plataforma
                                    intuitiva e atraente que permita aos usuários navegar e comprar produtos de forma fácil e eficiente.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <a href="perfil_contratante.php" class="btn btn-danger form-control">Voltar</a>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>



    <script src="form_CadastroContratante.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</body>

</html>