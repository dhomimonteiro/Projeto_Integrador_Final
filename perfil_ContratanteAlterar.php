<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
include_once('cabecalho_autenticar.php');

include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT * from Contratante where id_contratante = $idUsuario");

    while ($row = $sql->fetch()) {
        $nome = $row[1];
        $img = $row[2];
        $cnpj = $row[3];
        $telefone1 = $row[4];
        $telefone2 = $row[5];
        $logradouro = $row[6];
        $numero = $row[7];
        $bairro = $row[8];
        $cidade = $row[9];
        $uf = $row[10];
        $cep = $row[11];
        $login = $row[12];
        $senha = $row[13];
        $status = $row[14];
        $obs = $row[15];

        echo "
        <div style='display: none'>
                    <p>nome_Contratante: <span id='nomeContratante'>$nome</span></p>
                    <p>img_Contratante: <span id='imgContratante'>$img</span></p>
                    <p>cnpj_Contratante: <span id='cnpjUsuario'>$cnpj</span></p>
                    <p>telefone1_Contratante: <span id='telefone1Usuario'>$telefone1</span></p>
                    <p>telefone2_Contratante: <span id='telefone2Usuario'>$telefone2</span></p>
                    <p>logradouro_Contratante: <span id='logradouroUsuario'>$logradouro</span></p>
                    <p>numero_Contratante: <span id='numeroUsuario'>$numero</span></p>
                    <p>bairro_Contratante: <span id='bairroUsuario'>$bairro</span></p>
                    <p>cidade_Contratante: <span id='cidadeUsuario'>$cidade</span></p>
                    <p>uf_Contratante: <span id='ufUsuario'>$uf</span></p>
                    <p>cep_Contratante: <span id='cepUsuario'>$cep</span></p>
                    <p>login_Contratante: <span id='loginUsuario'>$login</span></p>
                    <p>senha_Contratante: <span id='senhaUsuario'>$senha</span></p>
                    <p>status_Contratante: <span id='statusUsuario'>$status</span></p>
                    <p>obs_Contratante: <span id='obsUsuario'>$obs</span></p>
        </div>";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

<body>
    <div class="container" style="max-width:800px;">
        <form action="" method="post" class="form-control" onsubmit="return false">
            <input type="text" style="display:none" id="txtID" name="txtID" value="<?=$idUsuario?>">
            <div class="row mt-3">
                <h1>Alterar informações</h1>
            </div>
            <div class="row my-3">
                <div class="col-sm-12 mt-2 d-flex justify-content-center">
                    <img src="<?=$img?>" alt="" style="height: 150px; width:150px; background-color: black; border-radius: 50%; object-fit: cover;" id="preImg">
                </div>
                <div class="col-sm-12 mt-2 d-flex justify-content-center">
                    <input type="file" onchange="previewFile(this)" name="txtImg" id="txtImg">
                </div>
            </div>
            <div class="row mt-4" style="display:none">
                    <div class="col-sm-12">
                        <textarea name="base64Code" class="form-control" id="base64Code" rows="5"></textarea>
                    </div>
                </div>
            
            <hr>
            <div class="row mb-4 mt-3">
                <div class="col-sm-12 mt-3">
                    <h2><i class="fa-solid fa-user"></i>
                        Dados </h2>
                </div>
                <div class="col-sm-7 mt-2">
                    <label for="txtNome">Nome</label>
                    <input type="text" class="form-control txtNome" id="txtNome" name="txtNome" value="<?=$nome?>">
                </div>
                <div class="col-sm-12"></div>
                <div class="col-sm-4 mt-2">
                    <label for="txtCPF">cnpj</label>
                    <input type="text" class="form-control txtCPF" id="txtCNPJ" name="txtCNPJ" value="<?=$cnpj?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtRG">Login</label>
                    <input type="text" class="form-control txtRG" id="txtLogin" name="txtLogin" value="<?=$login?>">
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtDataNasc">Senha</label>
                    <input type="text" class="form-control txtDataNasc" id="txtSenha" name="txtSenha" value="<?=$senha?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtCelular1">Telefone 1</label>
                    <input type="text" class="form-control txtCelular1" id="txtTelefone1" name="txtTelefone1" value="<?=$telefone1?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtCelular2">Telefone 2</label>
                    <input type="text" class="form-control txtCelular2" id="txtTelefone2" name="txtTelefone2" value="<?=$telefone2?>">
                </div>
                <div class="col-sm-12 mt-2">                      
                </div>
                <div class="col-sm-8 mt-2">
                    <label for="txtBanco">Descirção</label>
                    <textarea name="txtObs" id="txtObs" class="form-control txtAgencia" cols="30" rows="2"><?=$obs?></textarea> 
                </div>
                <div class="col-sm-4 mt-2">
                    <label for="txtAgencia">Status</label>
                    <input type="text" class="form-control txtAgencia" id="txtStatus" name="txtStatus" value="<?=$status?>">
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
                <div class="col-sm-5 mt-2">
                    <label for="txtBairro">Bairro</label>
                    <input type="text" class="form-control txtBairro" id="txtBairro" name="txtBairro" value="<?=$bairro?>">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="txtBairro">Rua</label>
                    <input type="text" class="form-control txtLogradouro" id="txtLogradouro" name="txtLogradouro" value="<?=$logradouro?>">
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="txtNumero">Número</label>
                    <input type="text" class="form-control txtNumero" id="txtNumero" name="txtNumero" value="<?=$numero?>">
                </div>
            </div>

            <div class="row mt-3 mb-4">
                <div class="col-sm-12 mt-3 ">
                    <button class="btn btn-primary" name="btoSalvar" id="btoSalvar" onclick="contratanteAlterar()">Salvar</button>
                </div>
            </div>
        </form>
        <div id="resultado" style="display:none"></div>
    </div>

    <?php
    include_once('rodape.php');
    ?>
</body>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script src="contratante_alterar.js"></script>
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