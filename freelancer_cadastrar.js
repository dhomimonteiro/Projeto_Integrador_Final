function cadastrarFreelancer() {
    //console.log('teste onclick');

    //VALIDAÇÃO
    if (!$('#txtNome').val()) {
        alert('Preencha o nome.');
        $('#txtNome').focus();
        return;
    }
    if (!$('#txtEmail').val()) {
        alert('Informe o email.');
        $('#txtEmail').focus();
        return;
    }
    if (!$('#txtLogin').val()) {
        alert('Preencha o login.');
        $('#txtLogin').focus();
        return;
    }
    if (!$('#txtSenha').val()) {
        alert('Informe a senha.');
        $('#txtSenha').focus();
        return;
    }
    if (!$('#txtConfirmarSenha').val()) {
        alert('Confirme a senha.');
        $('#txtConfirmarSenha').focus();
        return;
    }
    if ($('#txtConfirmarSenha').val() != $('#txtSenha').val()) {
        alert('As senhas não são iguais.');
        return;
    }
    if (!$('#txtCPF').val()) {
        alert('Informe o CPF.');
        $('#txtConfirmarSenha').focus();
        return;
    }
    if (!$('#txtRG').val()) {
        alert('Informe o RG.');
        return;
    }
    if (!$('#txtNascimento').val()) {
        alert('Informe a data de nascimento.');
        return;
    }
    if (!$('#txtCelular1').val()) {
        alert('Informe o celular.');
        return;
    }
    if (!$('#txtRua').val()) {
        alert('Informe sua rua.');
        return;
    }
    if (!$('#txtNumero').val()) {
        alert('Informe o número de sua casa.');
        return;
    }
    if (!$('#txtCEP').val()) {
        alert('Informe seu CEP.');
        return;
    }
    if (!$('#txtBairro').val()) {
        alert('Informe seu bairro.');
        return;
    }
    if (!$('#txtCidade').val()) {
        alert('Informe sua cidade.');
        return;
    }
    if (!$('#txtUF').val()) {
        alert('Informe seu estado.');
        return;
    }if (!$('#txtBanco').val()) {
        alert('Informe seu banco.');
        return;
    }
    if (!$('#txtAgencia').val()) {
        alert('Informe sua agência');
        return;
    }
    if (!$('#txtContaCorrente').val()) {
        alert('Informe sua conta corrente.');
        return;
    }
    
    let nome_freelancer = $('#txtNome').val();
    let img_freelancer = $('#base64Code').val();
    let cpf_freelancer = $('#txtCPF').val();
    let rg_freelancer = $('#txtRG').val();
    let celular1_freelancer = $('#txtCelular1').val();
    let celular2_freelancer = $('#txtCelular2').val();
    let telefone_freelancer = $('#txtTelefone').val();
    let logradouro_freelancer = $('#txtRua').val();
    let numero_freelancer = $('#txtNumero').val();
    let bairro_freelancer = $('#txtBairro').val();
    let cidade_freelancer = $('#txtCidade').val();
    let uf_freelancer = $('#txtUF').val();
    let cep_freelancer = $('#txtCEP').val();
    let dtNascimento_freelancer = $('#txtNascimento').val();
    let banco_freelancer = $('#txtBanco').val();
    let agencia_freelancer = $('#txtAgencia').val();
    let contaCorrente_freelancer = $('#txtContaCorrente').val();
    let login_freelancer = $('#txtLogin').val();
    let email_freelancer = $('#txtEmail').val();
    let senha_freelancer = $('#txtSenha').val();
    
    let action = 'freelancer_cadastrar.php'

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtNome: nome_freelancer,
            txtImg: img_freelancer,
            txtCPF: cpf_freelancer,
            txtRG: rg_freelancer,
            txtCelular1: celular1_freelancer, 
            txtCelular2: celular2_freelancer,
            txtTelefone: telefone_freelancer,
            txtRua: logradouro_freelancer,
            txtNumero: numero_freelancer,
            txtBairro: bairro_freelancer,
            txtCidade: cidade_freelancer,
            txtUF: uf_freelancer,
            txtCEP: cep_freelancer,
            txtNascimento: dtNascimento_freelancer,
            txtBanco: banco_freelancer,
            txtAgencia: agencia_freelancer,
            txtContaCorrente: contaCorrente_freelancer,
            txtLogin: login_freelancer,
            txtEmail: email_freelancer,
            txtSenha: senha_freelancer
        },
        beforeSend: function() {
            $('#resultado').html("ENVIANDO...");
        },
        success: function(data, status, xhr) {
            alert('Você foi cadastrado com sucesso!');
            window.location.replace('Projeto/TelaLoginteste/index.php')
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
            console.log('nao foi');
        }
    })
}