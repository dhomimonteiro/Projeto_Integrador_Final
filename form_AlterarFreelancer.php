<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
include_once('cabecalho_autenticar.php');

include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT * from Freelancer where id_freelancer = $idUsuario");

    while ($row = $sql->fetch()) {
        $nome = $row[1];
        $img = $row[2];
        $cpf = $row[3];
        $rg = $row[4];
        $celular1 = $row[5];
        $celular2 = $row[6];
        $telefone = $row[7];
        $logradouro = $row[8];
        $numero = $row[9];
        $bairro = $row[10];
        $cidade = $row[11];
        $uf = $row[12];
        $cep = $row[13];
        $dtNasc = $row[14];
        $banco = $row[15];
        $agencia = $row[16];
        $contaCorrente = $row[17];
        $login = $row[18];
        $email = $row[19];
        $senha = $row[20];

        echo "
        <div style='display: none'>
                    <p>nome_freelancer: <span id='nomeFreelancer'>$nome</span></p>
                    <p>img_freelancer: <span id='imgFreelancer'>$img</span></p>
                    <p>cpf_freelancer: <span id='loginUsuario'>$cpf</span></p>
                    <p>rg_freelancer: <span id='senhaUsuario'>$rg</span></p>
                    <p>celular1_freelancer: <span id='cadastroUsuario'>$celular1</span></p>
                    <p>celular2_freelancer: <span id='statusUsuario'>$celular2</span></p>
                    <p>telefone_freelancer: <span id='obsUsuario'>$telefone</span></p>
                    <p>logradouro_freelancer: <span id='obsUsuario'>$logradouro</span></p>
                    <p>numero_freelancer: <span id='obsUsuario'>$numero</span></p>
                    <p>bairro_freelancer: <span id='obsUsuario'>$bairro</span></p>
                    <p>cidade_freelancer: <span id='obsUsuario'>$cidade</span></p>
                    <p>uf_freelancer: <span id='obsUsuario'>$uf</span></p>
                    <p>cep_freelancer: <span id='obsUsuario'>$cep</span></p>
                    <p>dtNasc_freelancer: <span id='obsUsuario'>$dtNasc</span></p>
                    <p>banco_freelancer: <span id='obsUsuario'>$banco</span></p>
                    <p>agencia_freelancer: <span id='obsUsuario'>$agencia</span></p>
                    <p>contaCorrente_freelancer: <span id='obsUsuario'>$contaCorrente</span></p>
                    <p>login_freelancer: <span id='obsUsuario'>$login</span></p>
                    <p>email_freelancer: <span id='obsUsuario'>$email</span></p>
                    <p>senha_freelancer: <span id='obsUsuario'>$senha</span></p>
        </div>
                ";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

<body>
    <div class="container" style="max-width:800px;">
        <form action="" method="post" class="form-control px-4">
            <input type="text" id="txtID" value="<?= $idUsuario ?>" style="display:none">
            <div class="row mt-3">
                <h1>Alterar informações</h1>
            </div>
            <div class="row my-3">
                <div class="col-sm-12 mt-2 d-flex justify-content-center">
                    <img src="<?= $img ?>" alt="" style="height: 150px; width:150px; background-color: black; border-radius: 50%; object-fit: cover;" id="preImg">
                </div>
                <div class="col-sm-12 mt-2 d-flex justify-content-center">
                    <input type="file" onchange="previewFile(this)" name="txtImg" id="txtImg">
                </div>
            </div>
            <div class="row mt-4" style="display:none;">
                    <div class="col-sm-12">
                        <textarea name="base64Code" class="form-control" id="base64Code" rows="5"></textarea>
                    </div>
                </div>
            
            <div class="row mb-4">
                <div class="col-sm-12">
                    <h2><i class="fa-solid fa-laptop"></i>
                        Cadastro</h2>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtLogin">Login</label>
                    <input type="text" class="form-control txtLogin" id="txtLogin" name="txtLogin" value="<?=$login?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtEmail">E-mail</label>
                    <input type="email" class="form-control txtEmail" id="txtEmail" name="txtEmail" value="<?=$email?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtSenha">Senha</label>
                    <input type="text" class="form-control txtSenha" id="txtSenha" name="txtSenha" value="<?=$senha?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtSenha">Confirmar senha</label>
                    <input type="text" class="form-control txtConfSenha" id="txtConfSenha" name="txtConfSenha" value="<?=$senha?>">
                </div>
            </div>
            <hr>
            <div class="row mb-4 mt-3">
                <div class="col-sm-12 mt-3">
                    <h2><i class="fa-solid fa-user"></i>
                        Dados pessoais</h2>
                </div>
                <div class="col-sm-7 mt-2">
                    <label for="txtNome">Nome</label>
                    <input type="text" class="form-control txtNome" id="txtNome" name="txtNome" value="<?=$nome?>">
                </div>
                <div class="col-sm-12"></div>
                <div class="col-sm-4 mt-2">
                    <label for="txtCPF">CPF</label>
                    <input type="text" class="form-control txtCPF" id="txtCPF" name="txtCPF" value="<?=$cpf?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtRG">RG</label>
                    <input type="text" class="form-control txtRG" id="txtRG" name="txtRG" value="<?=$rg?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtDataNasc">Data de nascimento</label>
                    <input type="text" class="form-control txtDataNasc" id="txtDataNasc" name="txtDataNasc" value="<?=$dtNasc?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtCelular1">Celular 1</label>
                    <input type="text" class="form-control txtCelular1" id="txtCelular1" name="txtCelular1" value="<?=$celular1?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtCelular2">Celular 2</label>
                    <input type="text" class="form-control txtCelular2" id="txtCelular2" name="txtCelular2" value="<?=$celular2?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtTelefone">Telefone</label>
                    <input type="text" class="form-control txtTelefone" id="txtTelefone" name="txtTelefone" value="<?=$telefone?>">
                </div>
            </div>
            <hr>
            <div class="row mt-3 mb-4">
                <div class="col-sm-12 mt-2">
                    <h2><i class="fa-solid fa-money-check"></i>
                        Dados bancários</h2>
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtBanco">Banco</label>
                    <input type="text" class="form-control txtBanco" id="txtBanco" name="txtBanco" value="<?=$banco?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtAgencia">Agência</label>
                    <input type="text" class="form-control txtAgencia" id="txtAgencia" name="txtAgencia" value="<?=$agencia?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtContaCorrente">Conta corrente</label>
                    <input type="text" class="form-control txtContaCorrente" id="txtContaCorrente" name="txtContaCorrente" value="<?=$contaCorrente?>">
                </div>
            </div>
            <hr>
            <div class="row mt-3 mb-4">
                <div class="col-sm-12">
                    <h2><i class="fa-solid fa-location-dot"></i>
                        Localização</h2>
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="txtCEP">CEP</label>
                    <input type="text" class="form-control txtCEP" id="txtCEP" name="txtCEP" value="<?=$cep?>">
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="txtUF">UF</label>
                    <input type="text" class="form-control txtUF" id="txtUF" name="txtUF" value="<?=$uf?>">
                </div>
                <div class="col-sm-3 mt-2">
                    <label for="txtCidade">Cidade</label>
                    <input type="text" class="form-control txtCidade" id="txtCidade" name="txtCidade" value="<?=$cidade?>">
                </div>
                <div class="col-sm-3 mt-2">
                    <label for="txtBairro">Bairro</label>
                    <input type="text" class="form-control txtBairro" id="txtBairro" name="txtBairro" value="<?=$bairro?>">
                </div>
                <div class="col-sm-3 mt-2">
                    <label for="txtBairro">Rua</label>
                    <input type="text" class="form-control txtLogradouro" id="txtLogradouro" name="txtLogradouro" value="<?=$logradouro?>">
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="txtNumero">Número</label>
                    <input type="text" class="form-control txtNumero" id="txtNumero" name="txtNumero" value="<?=$numero?>">
                </div>
            </div>

            <div class="row mt-3 mb-4">
                <div class="col-sm-12 mt-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-lg btn-primary" onclick="freelancerAlterar()">Salvar</button>
                </div>
            </div>
        </form>
        <div id="resultado"></div>
    </div>

    <?php
    include_once('rodape.php');
    ?>
</body>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script src="freelancer_alterar.js"></script>
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