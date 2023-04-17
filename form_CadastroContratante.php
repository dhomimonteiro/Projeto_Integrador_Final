<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ache seu Contratente lindo de bonito</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <!--LINK DO FONT AWESOME PARA ÍCONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include_once('cabecalhoDeslogado.php') ?>

    <div class="container p-4">
        <div class="row mt-5 mb-3 text-center">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h1>Cadastre-se na GetDev como um Colaborador</h1>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <form action="">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <div class="card p-4">
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <input type="text" class="form-control borda" name="txtNome" id="txtNome" placeholder="Nome da Empresa">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtCNPJ" id="txtCNPJ" placeholder="CNPJ da Empresa">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtTelefone1" id="txtTelefone1" placeholder="Telefone 1 da Empresa">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtTelefone2" id="txtTelefone2" placeholder="Telefone 2 da Empresa">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <input type="text" class="form-control borda" name="txtLogradouro" id="txtLogradouro" placeholder="insira o Logradouro">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control borda" name="txtBairro" id="txtBairro" placeholder="insira o Bairro">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control borda" name="txtNumero" id="txtNumero" placeholder="insira o Numero">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-5">
                                <input type="text" class="form-control borda" name="txtCidade" id="txtCidade" placeholder="insira Cidade">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control borda cep-mask" name="txtCEP" id="txtCEP" placeholder="insira o CEP">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control borda" name="txtUF" id="txtUF" placeholder="UF">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtLogin" id="txtLogin" placeholder="Insira um Login">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtSenha" id="txtSenha" placeholder="Insira uma Senha">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control borda" name="txtConfirmaSenha" id="txtConfirmarSenha" placeholder="Confirme sua Senha">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-success form-control">Cadastrar</button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-danger form-control" formaction="home.php">Sair</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
    <?php include_once('/xampp/htdocs/Projeto_Integrador_Final/rodape.php') ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
</body>
</html>