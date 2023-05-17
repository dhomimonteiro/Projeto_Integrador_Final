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
    <?php include_once('Projeto/TelaLoginteste/conexao.php') ?>
    <div class="container">
        <div id="form">
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
        <form action="" method="POST" onsubmit="return false" enctype="multipart/form-data">
                <div class="row">
                    <h2 class="title">Cadastrar</h2>
                </div>
                <div id="resultado"></div>
                <div class="row">
                    <div class="col-sm-8">
                        <label for="Nome">Nome</label>
                        <div class="input">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="txtNome" name="txtNome" placeholder="Insira o nome da empresa">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="CNPJ">CNPJ</label>
                        <div class="input">
                            <i class="fa-solid fa-id-badge"></i>
                            <input type="text" id="txtCNPJ" name="txtCNPJ" placeholder="Insira o CNPJ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Login">Login</label>
                        <div class="input">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" id="txtLogin" name="txtLogin" placeholder="Insira o Login">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="txtImg">Imagem</label><br>
                        <input name="txtImg" id="txtImg" type="file" class="form-control" onchange="previewFile(this)" />
                        <img id="preImg" src="" style="display:none" height="200" alt="Image preview...">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Senha">Senha</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="txtSenha" name="txtSenha" placeholder="Insira a senha">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="ConfirmarSenha">Confirmar Senha</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="txtConfirmarSenha" name="txtConfirmarSenha" placeholder="Conforme sua senha">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Logradouro">Logradouro</label>
                        <div class="input">
                            <i class="fa-solid fa-street-view"></i>
                            <input type="text" id="txtLogradouro" name="txtLogradouro" placeholder="Insira o logradouro">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="Numero">Numero</label>
                        <div class="input">
                            <i class="fa-sharp fa-solid fa-location-crosshairs"></i>
                            <input type="text" id="txtNumero" name="txtNumero" placeholder="Insira o numero">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="Numero">UF</label>
                        <div class="input">
                            <input type="text" id="txtUF" name="txtUF" placeholder="UF">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="Cidade">Cidade</label>
                        <div class="input">
                            <i class="fa-sharp fa-solid fa-building"></i>
                            <input type="text" id="txtCidade" name="txtCidade" placeholder="Insira a Cidade">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="Bairro">Bairro</label>
                        <div class="input">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" id="txtBairro" name="txtBairro" placeholder="Insira o bairro">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="CEP">CEP</label>
                        <div class="input">
                            <i class="fa-solid fa-hashtag"></i>
                            <input type="text" id="txtCEP" name="txtCEP" placeholder="Insira o CEP">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Telefone1">Telefone 1</label>
                        <div class="input ">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" id="txtTelefone1" name="txtTelefone1" placeholder="Insira o Telefone 1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="telefone2">telefone 2</label>
                        <div class="input">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" name="txtTelefone2" id="txtTelefone2" name="txtTelefone2" placeholder="Insira o telefone 2">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div id="btn">
                            <!-- <button id="btnCadastrar" class="btn form-control" formaction="form_CadastrarContratante.php">Cadastrar</button> -->
                            <button id="btnCadastrar" class="btn form-control" onclick="CadastrarContratante()">Cadastrar</button>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div id="btnSair">
                            <button class="btn form-control"><a href="Projeto/TelaLoginteste/index.php" style="text-decoration: none; color: white;" id="btnSair">Sair</a></button>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <textarea name="base64Code" class="form-control" style="display:none" id="base64Code" rows="5"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>


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
    <script src="form_CadastroContratante.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</body>

</html>