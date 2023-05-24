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
    <link rel="stylesheet" href="perfil_contratante.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<title>Document</title>
</head>


<body>
    <?php include_once('cabecalho_autenticar.php'); ?>
    <?php include_once('perfil_contratantePesquisar.php'); ?>
    <div class="cartao">
        <div class="container-fluid">
            <div class="perfil">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div class="d-flex justify-content-center ">
                            <div class="cartao-conteudo">
                                <div class="img mt-4">
                                    <img src="<?= $imgContratante ?>" alt="">
                                </div>
                                <div class="conteudo-texto d-flex justify-content-evenly mt-5">
                                    <div class="contratacoes d-inline">
                                        <p class="small text-center">contratos: <br> <span style="font-weight: bold;"> <?= $ID ?></span>
                                        </p>
                                    </div>
                                    <div class="nome d-inline mx-5 w-25">
                                        <p class="text-center mt-2" style="font-weight: bold; font-size:25px;"><?= $nomeUsuario ?> <a href="perfil_ContratanteAlterar.php"><i class="fa-sharp fa-solid fa-pencil"></i></a></p>
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
                                <div class="descricao px-3 w-75 mt-1">
                                    <div class="card border-0 rounded color-gray corDis">
                                        <div class="card-body">
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
                    </div>
                </div>
            </div>
            <!-- perfil -->
            <!-- projetos -->
            <div class="container">
                <div class="row margin1">
                    <div class="col-sm-5 mt">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="cardn">
                                    <div class="header">
                                        <div class="image">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#000000" d="M20 7L9.00004 18L3.99994 13"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <span class="title">Criar Projeto</span>
                                            <p class="message">
                                                No universo freelancer, ideias ganham vida, talento é empoderado e projetos se tornam realidade.
                                                Onde a paixão encontra a liberdade, nasce a magia dos projetos freelance.</p>
                                        </div>
                                        <div class="actions">
                                        <button onclick="document.getElementById('id01').style.display='block'" id="modal" class="history">Criar um novo Projeto</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 mt">
                        <?php include_once('perfil_contratantePesquisarUltimoProjeto.php') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <!-- motel -->
                        <form action="" method="POST" onsubmit="return false" enctype="multipart/form-data">
                            <!-- The Modal -->
                            <div id="id01" class="w3-modal modal">
                                <div class="w3-modal-content w3-animate-top">
                                    <header class="w3-container" style="background-color: #1e102e; color: white">
                                        <span onclick="document.getElementById('id01').style.display='none'" id="modalsair" class="w3-button w3-display-topright">&times;</span>
                                        <h2>Criar novo Projeto</h2>
                                    </header>
                                    <div class="w3-container">
                                        <div class="container p-4">
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
                                                <div class="col-sm-4">
                                                    <label for="Nome">Valor</label>
                                                    <div class="input">
                                                        <input type="number" id="txtPreco" name="txtPreco" placeholder="Insira o Valor do projeto">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <label for="Nome">Descrição</label>
                                                    <div class="input">
                                                        <textarea name="txtDescricao" id="txtDescricao" class="formcontrol" cols="55" style="border: none; outline: none;"></textarea>
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
                                        <footer class="w3-container mt-3" style="background-color: #1e102e; color: white">
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
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="projetoscard">
            <div class="linha">
                <div class="col-12 d-flex justify-content-center my-3 mt-5">
                    <h1>Alguns projetos feitos pela sua empresa</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="container-sm">
        <div class="row text-center">
            <?php include_once('perfil_contratantePesquisarProjeto.php') ?>
        </div>
    </div>
    <?php include_once('rodape.php') ?>
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


    function entrarprojeto() {
        const element = document.querySelector('#Projeto');
        element.click();
    }
</script>

</html>