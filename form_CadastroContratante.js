
function CadastrarContratante(){

    if($('#txtNome').val() == ''){
        alert ("Insira um nome");
        return;
    }
    if($('#txtCNPJ').val() == ''){
        alert("Insira o CNPJ");
        return;
    }
    if($('#txtLogin').val() == ''){
        alert("Insira o login");
        return;
    }
    if($('#txtSenha').val() == ''){
        alert("Insira o senha");
        return;
    }
    if($('#txtConfirmarSenha').val() == ''){
        alert(" confirmar senha");
        return;
    }
    if($('#txtSenha').val() != $('#txtConfirmarSenha').val()){
        alert('Senhas diferentes');
        return;
    }
    if($('#txtLogradouro').val() == ''){
        alert("Insira o logradouro");
        return;
    }
    if($('#txtNumero').val() == ''){
        alert("Insira o numero");
        return;
    }
    if($('#txtCidade').val() == ''){
        alert("Insira a Cidade");
        return;
    }
    if($('#txtBairro').val() == ''){
        alert("Insira o bairro");
        return;
    }
    if($('#txtUF').val() == ''){
        alert("Insira a UF");
        return;
    }
    if($('#txtCEP').val() == ''){
        alert("Insira o CEP");
        return;
    }
    if($('#txtTelefone1').val() == ''){
        alert("Insira o telefone 1");
        return;
    }
    if($('#txtTelefone2').val() == ''){
        alert("Insira o telefone 2");
        return;
    }
    
        console.log('apertei no cadastrar');

        let nome_contratante = $('#txtNome').val();
        let img_contratante = $('#base64Code').val();
        let CNPJ_contratante = $('#txtCNPJ').val();
        let login_contratante = $('#txtLogin').val();
        let senha_contratante = $('#txtSenha').val();
        let logradouro_contratante = $('#txtLogradouro').val();
        let numero_contratante = $('#txtNumero').val();
        let cidade_contratante = $('#txtCidade').val();
        let bairro_contratante = $('#txtBairro').val();
        let uf_contratante = $('#txtUF').val();
        let cep_contratante = $('#txtCEP').val();
        let telefone1_contratante = $('#txtTelefone1').val();
        let telefone2_contratante = $('#txtTelefone2').val();
        let status_contratante = 'ativo';
        let obs_contratante = "oi";
    
        
        let action = 'form_CadastrarContratante.php';
    
        $.ajax({
            url:    action,
            type:   'post',
            data:{
                txtNome: nome_contratante,
                txtImg: img_contratante,
                txtCNPJ: CNPJ_contratante,
                txtLogin: login_contratante,
                txtSenha: senha_contratante,
                txtLogradouro: logradouro_contratante,
                txtNumero: numero_contratante,
                txtCidade: cidade_contratante,
                txtBairro: bairro_contratante,
                txtUF: uf_contratante,
                txtCEP: cep_contratante,
                txtTelefone1: telefone1_contratante,
                txtTelefone2: telefone2_contratante,
                status_contratante,
                obs_contratante,
            }, 
            beforend : function(){
                $("#resultado").html("ENVIANDO...");
            },
            success: function(data, status, xhr){
                alert(data)
                $( "#resultado" )
                window.location.replace('/Projeto_Integrador_Final/Projeto/TelaLoginTeste/index.php');
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty().html('Error' + errorMessage);
            }
        })
    
    }

    $('#btnSair').click(function(){ 
        header('Location:/Projeto_Integrador_Final/Projeto/TelaLoginTeste/index.php');
    });
   