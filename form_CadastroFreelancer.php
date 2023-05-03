<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Freelancer</title>
    <link rel="stylesheet" href="form_CadastroFreelancer.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/dfcce2b32e.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div id="form">
            <form action="" class="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">Cadastre-se como Freelancer</h2>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="txtImg">Imagem</label><br>
                            <div class="input">
                                <i class="fa-solid fa-image"></i>
                                <input name="txtImg" id="txtImg" type="file" onchange="previewFile(this)" />
                                <img id="preImg" src="" height="200" alt="Image preview...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="Nome">Nome</label>
                            <div class="input">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" id="txtNome" name="txtNome" placeholder="Insira seu nome completo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtEmail">E-mail</label>
                            <div class="input">
                                <i class="fa-solid fa-id-badge"></i>
                                <input type="email" id="txtEmail" name="txtEmail" placeholder="Insira seu e-mail">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="txtLogin">Login <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-at"></i>
                                <input type="text" id="txtLogin" name="txtLogin" placeholder="Insira seu login">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtSenha">Senha <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" id="txtSenha" name="txtSenha" placeholder="Insira sua senha">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <label for="txtNome">Confirmação de senha <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" id="txtConfirmarSenha" name="txtConfirmarSenha" placeholder="Confirme a senha">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="txtNome">CPF <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-id-badge"></i>
                                <input type="text" id="txtCPF" name="txtCPF" placeholder="Insira seu CPF">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">RG <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-id-badge"></i>
                                <input type="text" id="txtRG" name="txtRG" placeholder="Insira seu RG">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Data de nascimento<span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-regular fa-calendar"></i>
                                <input type="text" id="txtNascimento" name="txtNascimento" placeholder="Insira sua data de nascimento" class="txtNascimento">
                            </div>
                        </div>
                    </div>

                    <!--CONTATO-->
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="txtNome">Celular 1 <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" id="txtCelular1" name="txtCelular1" placeholder="Insira seu celular" maxlength="14">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Celular 2</label>
                            <div class="input">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" id="txtCelular2" name="txtCelular2" placeholder="Insira seu celular" class="txtCelular2">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Telefone</label>
                            <div class="input">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" id="txtTelefone" name="txtTelefone" placeholder="Insira seu telefone" class="txtTelefone">
                            </div>

                        </div>
                    </div>

                    <!-- LOCALIZAÇÃO -->
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="txtCEP">CEP <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-hashtag"></i>
                                <input type="text" id="txtCEP" name="txtCEP" placeholder="Insira o CEP." class="txtCEP">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="txtNome">Número <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-sharp fa-solid fa-location-crosshairs"></i>
                                <input type="text" id="txtNumero" name="txtNumero" style="width:60%" placeholder="Número">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label for="txtRua">Rua <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-street-view"></i>
                                <input type="text" id="txtRua" name="txtRua" placeholder="Insira sua rua." class="">
                            </div>

                        </div>


                        <div class="col-sm-4">
                            <label for="txtNome">Bairro <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" id="txtBairro" name="txtBairro" placeholder="Insira o bairro.">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Cidade <span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-sharp fa-solid fa-building"></i>
                                <input type="text" id="txtCidade" name="txtCidade" placeholder="Insira a cidade.">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">UF<span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" id="txtUF" name="txtUF" placeholder="Seu estado">
                            </div>
                        </div>
                    </div>

                    <!--INFORMAÇÃO BANCÁRIA-->
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="txtNome">Banco<span class="importante">*</span></label>
                            <div class="input">
                                <i class="fa-solid fa-building-columns"></i>
                                <input type="text" id="txtBanco" name="txtBanco" style="width:60%">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Agência Bancária <span class="importante">*</span></label>
                            <div class="input">
                            <i class="fa-solid fa-piggy-bank"></i>
                            <input type="text" id="txtAgencia" name="txtAgencia"  maxlength="5" style="width:60%">
                            </div>
                          
                        </div>
                        <div class="col-sm-4">
                            <label for="txtNome">Conta corrente <span class="importante">*</span></label>
                            <div class="input">
                            <i class="fa-solid fa-money-check-dollar"></i>
                            <input type="text" id="txtContaCorrente" name="txtContaCorrente" style="width:70%">
                            </div>
                            
                        </div>
                    </div>

                    <!-- BOTÕES -->
                    <div class="row mt-2 d-flex flex-row align-items-center">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <div class="btn">
                            <button class="btn form-control" id="btnCadastrar" name="btoCadastrar" onclick="cadastrarFreelancer()">Cadastrar</a>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                        <div id="btnSair">
                            <button class="btn form-control" id="btnSair">Sair</button>
                        </div>
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class="row mt-4" style="display:none">
                        <div class="col-sm-12">
                            <textarea name="base64Code" class="form-control" id="base64Code" rows="5"></textarea>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>




<script src="js/jquery-3.6.4.js"></script>
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
<script src="freelancer_cadastrar.js"></script>

<script type="text/javascript">
    function mask(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmask()", 1)
    }

    function execmask() {
        v_obj.value = v_fun(v_obj.value)
    }

    function masktel(v) {
        //IMPEDE QUE O USUÁRIO COLOQUE PONTUAÇÃO
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
        v = v.replace(/(\d)(\d{4})$/, "$1-$2");
        return v;

    }

    function maskcpf(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/(\d{3})(\d)/, "$1.$2");
        v = v.replace(/(\d{3})(\d)/, "$1.$2");
        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        return v;
    }

    function maskNasc(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/(\d{2})(\d)/, "$1-$2");
        v = v.replace(/(\d{2})(\d)/, "$1-$2");
        return v;
    }

    function maskrg(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/(\d{2})(\d)/, "$1.$2");
        v = v.replace(/(\d{3})(\d)/, "$1.$2");
        v = v.replace(/(\d{2})(\d{1})$/, "$1-$2");
        return v;
    }

    function maskcep(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/(\d{5})(\d)/, "$1-$2");
        return v;
    }

    function maskcnpj(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/, "$1.$2");
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
        v = v.replace(/(\d{4})(\d)/, "$1-$2");
        return v;

    }

    function idcss(el) {
        return document.getElementById(el);
    }

    window.onload = function() {

        //TEL FIXO -------
        idcss('txtTelefone').setAttribute('maxlength', 14);
        idcss('txtTelefone').onkeypress = function() {
            mask(this, masktel);
        }

        //-------------

        //CELULAR -------
        idcss('txtCelular1').setAttribute('maxlength', 15);
        idcss('txtCelular1').onkeypress = function() {
            mask(this, masktel);
        }

        idcss('txtCelular2').setAttribute('maxlength', 15);
        idcss('txtCelular2').onkeypress = function() {
            mask(this, masktel);
        }
        //-------------

        //CPF ---------

        idcss('txtCPF').setAttribute('maxlength', 14);
        idcss('txtCPF').onkeypress = function() {
            mask(this, maskcpf);
        }

        //-------------

        //RG ---------
        idcss('txtRG').setAttribute('maxlength', 12);
        idcss('txtRG').onkeypress = function() {
            mask(this, maskrg);
        }

        //-------------

        //CEP ---------
        idcss('txtCEP').setAttribute('maxlength', 9);
        idcss('txtCEP').onkeypress = function() {
            mask(this, maskcep);
        }
        //-------------

        //NASCIMENTO ---------
        idcss('txtNascimento').setAttribute('maxlength', 10);
        idcss('txtNascimento').onkeypress = function() {
            mask(this, maskNasc);
        }
        //-------------

    }

    $(document).ready(function() {
        $('#txtCEP').blur(function() {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep != "") {
                var validacep = /^[0-9]{8}$/;

                if (validacep.test(cep)) {
                    $('#txtRua').val('...');
                    $("#txtBairro").val('...');
                    $("#txtCidade").val('...');
                    $("#txtUF").val('...');
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#txtRua").val(dados.logradouro);
                            $("#txtBairro").val(dados.bairro);
                            $("#txtCidade").val(dados.localidade);
                            $("#txtUF").val(dados.uf);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                }
            }
        })
    })
</script>