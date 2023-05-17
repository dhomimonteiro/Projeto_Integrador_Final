<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_CadastroContratante.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php include_once('autenticar.php'); ?>
    <?php
    include_once('Projeto/TelaLoginteste/conexao.php');

    $idprojeto = $_GET['Projeto'];

    try {
        $sql = $conn->query("select * from Projeto where id_projeto = $idprojeto");

        while ($linha = $sql->fetch()) {
            $idContratante = $linha[2];
            $idlinguagem = $linha[3];
            $nome = $linha[4];
            $img = $linha[5];
            $data = $linha[6];
            $obs = $linha[9];
            $Valor = $linha[10];

            echo $idprojeto;
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

    ?>

    <style>
        body {
            background-image: url(img/919027_OC3WJF0.jpg);
            background-repeat: no-repeat;
            background-size: 100% 500px;
            background-color: #fff;
        }

        .mtop {
            
        }

        .cards {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .img {
            height: 200px;
            width: 200px;
            border-radius: 50%;
            padding: 3px;
            background-color: #7d2ae8;
        }

        .cardi {
            border-color: #7d2ae8;

        }
    </style>
    <div class="container">
        <div class="row">

            <div class="mtop"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card cards mt-5">
                    <div class="continer">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="container p-2">
                                    <div class="card cardi p-3">
                                        <div class="row">
                                            <div class="col-sm-4 mt-4">
                                                <img src="<?= $img ?>" alt="" class="img">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h3><?= $nome ?></h3>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-6 mt-3">
                                                        <p>Criação: <?= $data ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="card p-2" style="min-height: 150px; max-height: 150px;">
                                                            <?= $obs ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h4>Pagamento: R$200/H </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="post" onsubmit="return false">
                                    <div class="conteiner p-3">
                                        <div class="row mt-3">
                                            <div class="col-sm-12">
                                                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                                    <div class="row p-3">
                                                        <div class="col-sm-7">
                                                            <label for="" class="p-2">Escreva sua Proposta:</label>
                                                            <textarea name="txtDescricao" id="txtDescricao" rows="4" class="form-control">

                                                        </textarea>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h4>Metodo de pagamento: À vista</h4>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col-sm-12 mt-3">
                                                                    <button class="btn btn-success form-control" id="MandarProposta">Mandar Proposta</button>
                                                                    <input type="text" id="txtIDContratante" name="txtIDContratante" value="<?=$idContratante?>" style="display: none;">
                                                                    <input type="text" id="txtIDFreelancer" name="txtIDFreelancer" value="<?=$idUsuario?>" style="display: none;">
                                                                    <input type="text" id="txtIDProjeto" name="txtIDProjeto" value="<?=$idprojeto?>" style="display: none;">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col-sm-7">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <a href="TelaContratante.php" class="btn btn-danger form-control">Sair</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-4">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>

        </div>
    </div>

    <script src="perfil_contratante.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
$('#MandarProposta').click(function(){

        let IDContratante = $('#txtIDContratante').val();
        let IDFreelancer = $('#txtIDFreelancer').val();
        let IDProjeto= $('#txtIDProjeto').val();
        let descricao = $('#txtDescricao').val();

        let action = 'MandarProposta_ENVIAR.php'
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtIDContratante: IDContratante,
                txtIDFreelancer: IDFreelancer,
                txtIDProjeto: IDProjeto,
                txtDescricao: descricao,
            },
            beforeSend: function () {
                $('#resultado').html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
                alert(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                alert(errorMessage);
                console.log('nao foi');
            }
        });
    })
    </script>
</body>

</html>