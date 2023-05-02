$('#btnCriarProjeto').click(function(){
    console.log('apertei no cadastrar');
    if ($('#txtNome').val() == '') {
        alert("Insira o nome");
        return;
    };
    if ($('#txtLinguagem').val() == '') {
        alert("Insira a linguagem");
        return;
    };
    if ($('#txtDescricao').val() == '') {
        alert("Insira a descrição");
        return;
    };

        let nome_porjeto = $('#txtNome').val();
        let Linguagem_porjeto = $('#txtLinguagem').val();
        let IdContratante = $('#txtIDcontratante').val();
        let descricao_porjeto = $('#txtDescricao').val();
        let Img_porjeto = $('#base64Code').val();
        let versao_projeto = $('#txtVersao').val();
        let status_projeto = $('#txtStatus').val();

        let action = 'form_ProjetoCadastro.php'
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtNome: nome_porjeto,
                txtLinguagem: Linguagem_porjeto,
                txtIDcontratante: IdContratante,
                txtDescricao: descricao_porjeto,
                txtImg: Img_porjeto,
                txtVersao: versao_projeto,
                txtStatus: status_projeto,
            },
            beforeSend: function () {
                $('#resultado').html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
                alert(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                alert(errorMessage);
                console.log('nao foi');
            }
        });
    })