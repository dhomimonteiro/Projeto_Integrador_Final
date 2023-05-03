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

    .margin2 {
        margin-top: 100px !important;
    }

    .modal {
        z-index: 100;
    }
    .Cards{
        max-width: 400px;
        max-height: 500px;
    }
</style>
<title>Document</title>
</head>


<body>
    <?php include_once('cabecalho_autenticar.php'); ?>
    <?php include_once('perfil_contratantePesquisar.php'); ?>
    <div class="cartao">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <div class="d-flex justify-content-center ">
                        <div class="cartao-conteudo">
                            <div class="img mt-4">
                                <img src="<?= $img ?>" alt="">
                            </div>
                            <div class="conteudo-texto d-flex justify-content-evenly">
                                <div class="contratacoes d-inline">
                                    <p class="small text-center">contratos: <br> <span style="font-weight: bold;"> <?= $ID ?></span>
                                    </p>
                                </div>
                                <div class="nome d-inline mx-5 w-25">
                                    <p class="text-center mt-2" style="font-weight: bold; font-size:25px;"><?= $nomeUsuario ?>  <a href="perfil_ContratanteAlterar.php"><i class="fa-sharp fa-solid fa-pencil"></i></a></p>
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
                                <p>
                                    <?php 
                                    if ($obs != "")
                                        echo $obs;
                                    else
                                    echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae doloremque vel itaque sed? Dicta quibusdam quisquam placeat? Quidem optio veniam eius. Eius eaque natus facere similique accusamus officiis dignissimos iure?'
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5 ml-4 margin2">
                    <div class="col-sm-4">
                        <?php include_once('perfil_contratantePesquisarUltimoProjeto.php') ?>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-12">
                            <div class="card" id="zezedecamargo">
                                <div class="portfolio">
                                    <div class="row mt-2 ">
                                        <div class="col-sm-11">
                                            <h1 class="pb-2" style="text-align: center; border-bottom: black 1px solid;">Projetos</h1>
                                        </div>
                                        <div class="col-sm-1">
                                            <!-- motel -->
                                            <button onclick="document.getElementById('id01').style.display='block'" id="modal" class="w3-button w3-circle w3-purple mt-3">+</button>
                                            <form action="" method="POST" onsubmit="return false" enctype="multipart/form-data">
                                                <!-- The Modal -->
                                                <div id="id01" class="w3-modal modal">
                                                    <div class="w3-modal-content w3-animate-top">
                                                        <header class="w3-container w3-purple">
                                                            <span onclick="document.getElementById('id01').style.display='none'" id="modalsair" class="w3-button w3-display-topright">&times;</span>
                                                            <h2>Criar novo Projeto</h2>
                                                        </header>

                                                        <div class="w3-container">

                                                            <div class="container">
                                                                <div class="row mt-3">
                                                                    <div class="col-sm-8">
                                                                        <label for="Nome">Nome do Projeto</label>
                                                                        <div class="input">
                                                                            <i class="fa-solid fa-user"></i>
                                                                            <input type="text" id="txtNome" name="txtNome" placeholder="Insira o nome do projeto">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="Nome">Linguagem</label>
                                                                        <div class="input">
                                                                            <select name="txtLinguagem" id="txtLinguagem" class="select" style="border: none; outline: none;">
                                                                                <option value="">--Selecione uma linguagem--</option>
                                                                                <?php
                                                                                include_once('TelaPesquisarProjeto.php');
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-sm-12">
                                                                        <label for="Nome">Descrição</label>
                                                                        <div class="input">
                                                                            <textarea name="txtDescricao" id="txtDescricao" class="formcontrol" cols="87" style="border: none; outline: none;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="txtImg">Imagem</label>
                                                                        <input name="txtImg" id="txtImg" type="file" class="form-control" onchange="previewFile(this)" style="border: none; outline: none;" />

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <img id="preImg" src="" style="display:none" height="10" alt="Image preview...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea name="base64Code" class="form-control" style="display:none" id="base64Code" rows="5"></textarea>
                                                                    <input type="text" name="txtVersao" id="txtVersao" style="display:none" value="V.1">
                                                                    <input type="text" name="txtStatus" id="txtStatus" style="display:none" value="Ativado">
                                                                    <input type="text" name="txtIDcontratante" id="txtIDcontratante" style="display:none" value="<?= $idUsuario ?>">
                                                                </div>
                                                            </div>
                                                            <footer class="w3-container w3-purple mt-3">
                                                                <div class="row p-3">
                                                                    <div class="col-sm-10"></div>
                                                                    <div class="col-sm-2">
                                                                        <button id="btnCriarProjeto" class="w3-button w3-yellow form-control" onclick="criarProjeto()">Criar</button>
                                                                    </div>
                                                                </div>
                                                            </footer>
                                                        </div>
                                                    </div>
                                                    <!-- motel -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row p-4">
                                        <?php include_once('perfil_contratantePesquisarProjeto.php')?>
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

<script src="perfil_contratante.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script src="script.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>
    function previewFile(element) {

        var preview = document.getElementById('preImg');
        var file = document.getElementById('txtImg').files[0];

        var reader = new FileReader();

        reader.onloadend = function() {
            var caminho = reader.result;
            var caminhoLimpo = reader.result;

            preview.src = caminho;
            $("#base64Code").val(caminho);

        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>

</html>