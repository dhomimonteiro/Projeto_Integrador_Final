function freelancerAlterar(){
    let id_freelancer = $('#txtID').val();
    let nome_freelancer = $('#txtNome').val();
    let img_freelancer = $('#base64Code').val();
    let cpf_freelancer = $('#txtCPF').val();
    let rg_freelancer = $('#txtRG').val();
    let celular1_freelancer = $('#txtCelular1').val();
    let celular2_freelancer = $('#txtCelular2').val();
    let telefone_freelancer = $('#txtTelefone').val();
    let logradouro_freelancer = $('#txtLogradouro').val();
    let numero_freelancer = $('#txtNumero').val();
    let bairro_freelancer = $('#txtBairro').val();
    let cidade_freelancer = $('#txtCidade').val();
    let uf_freelancer = $('#txtUF').val();
    let cep_freelancer = $('#txtCEP').val();
    let dtNascimento_freelancer = $('#txtDataNasc').val();
    let banco_freelancer = $('#txtBanco').val();
    let agencia_freelancer = $('#txtAgencia').val();
    let contaCorrente_freelancer = $('#txtContaCorrente').val();
    let login_freelancer = $('#txtLogin').val();
    let email_freelancer = $('#txtEmail').val();
    let senha_freelancer = $('#txtSenha').val();

    let action = 'freelancer_alterar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_freelancer,
            txtNome: nome_freelancer,
            txtImg: img_freelancer,
            txtCPF: cpf_freelancer,
            txtRG: rg_freelancer,
            txtCelular1: celular1_freelancer, 
            txtCelular2: celular2_freelancer,
            txtTelefone: telefone_freelancer,
            txtLogradouro: logradouro_freelancer,
            txtNumero: numero_freelancer,
            txtBairro: bairro_freelancer,
            txtCidade: cidade_freelancer,
            txtUF: uf_freelancer,
            txtCEP: cep_freelancer,
            txtDataNasc: dtNascimento_freelancer,
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
            $('#resultado').html(data);
        },
        error: function (jqXhr, textStatus, errorMessage, data) {
            $('#resultado').html(errorMessage, data);
        }
    })
}