function contratanteAlterar(){

    let id_contratante = $('#txtID').val();
    let nome_contratante = $('#txtNome').val();
    let img_contratante = $('#base64Code').val();
    let cnpj_contratante = $('#txtCNPJ').val();
    let login_contratante = $('#txtLogin').val();
    let senha_contratante = $('#txtSenha').val();
    let telefone1_contratante = $('#txtTelefone1').val();
    let telefone2_contratante = $('#txtTelefone2').val();
    let obs_contratante = $('#txtObs').val();
    let status_contratante = $('#txtStatus').val();
    let cep_contratante = $('#txtCEP').val();
    let uf_contratante = $('#txtUF').val();
    let cidade_contratante = $('#txtCidade').val();
    let bairro_contratante = $('#txtBairro').val();
    let logradouro_contratante = $('#txtLogradouro').val();
    let numero_contratante = $('#txtNumero').val();

    let action = 'contratante_alterar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_contratante,
            txtNome: nome_contratante,
            txtImg: img_contratante,
            txtCNPJ: cnpj_contratante,
            txtLogin: login_contratante,
            txtSenha: senha_contratante, 
            txtTelefone1: telefone1_contratante,
            txtTelefone2: telefone2_contratante,
            txtObs: obs_contratante,
            txtStatus: status_contratante,
            txtCEP: cep_contratante,
            txtUF: uf_contratante,
            txtCidade: cidade_contratante,
            txtBairro: bairro_contratante,
            txtLogradouro: logradouro_contratante,
            txtNumero: numero_contratante,

        },
        beforeSend: function() {
            $('#resultado').html("ENVIANDO...");
        },
        success: function(data, status, xhr) {
            alert(data);
            window.location.replace('/Projeto_Integrador_Final/perfil_contratante.php');
        },
        error: function (jqXhr, textStatus, errorMessage, data) {
            $('#resultado').html(errorMessage, data);
        }
    })
}