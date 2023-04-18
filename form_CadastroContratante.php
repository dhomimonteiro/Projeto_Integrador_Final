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
    <div class="container">


        <div id="form">
            <form action="">
                <div class="row">
                    <h2 class="title">Cadastrar</h2>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <label for="Nome">Nome</label>
                        <div class="input">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="txtNome" class="txtNome" placeholder="Insira o nome da empresa">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="CNPJ">CNPJ</label>
                        <div class="input">
                        <i class="fa-solid fa-id-badge"></i>
                            <input type="text" id="txtCNPJ" class="txtCNPJ" placeholder="Insira o CNPJ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="Login">Login</label>
                    <div class="input">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="txtLogin" class="txtLogin" placeholder="Insira o Login">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Senha">Senha</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="txtSenha" class="txtSenha " placeholder="Insira a senha">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="ConfirmarSenha">Confirmar Senha</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="txtConfirmarSenha" class="txtConfirmarSenha" placeholder="Conforme sua senha">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <label for="Logradouro">Logradouro</label>
                        <div class="input">
                        <i class="fa-solid fa-street-view"></i>
                            <input type="text" id="txtLogradouro" class="txtLogradouro " placeholder="Insira o logradouro">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="Numero">Numero</label>
                        <div class="input">
                        <i class="fa-sharp fa-solid fa-location-crosshairs"></i>
                            <input type="text" id="txtNumero" class="txtNumero" placeholder="Insira o numero">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="Cidade">Cidade</label>
                        <div class="input">
                        <i class="fa-sharp fa-solid fa-building"></i>
                            <input type="text" id="txtCidade" class="txtCidade" placeholder="Insira a Cidade">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="Bairro">Bairro</label>
                        <div class="input">
                        <i class="fa-solid fa-location-dot"></i>
                            <input type="text" id="txtBairro" class="txtBairro" placeholder="Insira o bairro">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="CEP">CEP</label>
                        <div class="input">
                        <i class="fa-solid fa-hashtag"></i>
                            <input type="text" id="txtCEP" class="txtCEP" placeholder="Insira o CEP">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Telefone1">Telefone 1</label>
                        <div class="input ">
                        <i class="fa-solid fa-phone"></i>
                            <input type="text" id="txtTelefone1" class="txtTelefone1 " placeholder="Insira o Telefone 1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="telefone2">telefone 2</label>
                        <div class="input">
                        <i class="fa-solid fa-phone"></i>
                            <input type="text" id="txtTelefone2" class="txtTelefone2" placeholder="Insira o telefone 2">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div id="btn">
                            <button type="submit" id="btnCadastrar" class="btn form-control">Cadastrar</button>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div id="btnSair">
                            <button type="submit" class="btn form-control" formaction="Projeto/TelaLoginteste/index.php">Sair</button>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</body>

</html>