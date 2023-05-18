<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar portfólio</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #btoSalvar {
        background-color: var(--roxo-escuro);
        color: var(--cinza-claro);
    }
    #btoSalvar:hover {
        background-color: var(--amarelo-texto);
        color: var(--roxo-escuro);
        transform: scale(1.1);
        transition: .1s;
    }
</style>

</head>

<body>
    <?php include_once("cabecalho_autenticar.php") ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form action="" method="post" class="form-control mt-3" onsubmit="return false">
                    <input style="display:none" type="text" id="txtID" name="txtID" value="<?= $idUsuario ?>">
                    <div class="row mt-3">
                        <h1>Adicionar projeto</h1>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-12 mt-2 d-flex justify-content-center">
                            <img src="<?= $img ?>" alt="" style="height: 150px; width:250px; background-color: black; object-fit: cover;" id="preImg">
                        </div>
                        <div class="col-sm-12 mt-2 d-flex justify-content-center">
                            <input type="file" onchange="previewFile(this)" name="txtImg" id="txtImg">
                        </div>
                    </div>
                    <div class="row my-3 d-flex ">
                        <div class="col-sm-4">
                            <label for="txtNome">Nome do projeto</label>
                            <input class="form-control" type="text" name="txtNome" id="txtNome" placeholder="Obrigatório">
                        </div>
                        <div class="col-sm-8">
                            <label for="txtLink">Link do projeto</label>
                            <input class="form-control" type="text" name="txtLink" id="txtLink" placeholder="Não obrigatório">
                        </div>
                    </div>

                    <div class="row mt-4" style="display:none">
                        <div class="col-sm-12">
                            <textarea name="base64Code" class="form-control" id="base64Code" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button class="btn" id="btoSalvar" name="btoSalvar">Salvar</button>
                    </div>


                </form>
            </div>
        </div>

    </div>

    <?php include_once("rodape.php") ?>

    <script src="js/bootstrap.js"></script>
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
        $("#btoSalvar").click(function() {
            if (!$('#txtNome').val()) {
                alert("Preencha o nome do projeto");
                return;
            }

            let id_freelancer_portfolio = $("#txtID").val();
            let nome_projeto_portfolio = $('#txtNome').val();
            let img_projeto_portfolio = $('#base64Code').val();
            let link_projeto_portfolio = $('#txtLink').val();
            let action = "portfolio_cadastrar.php";

            $.ajax({
                url: action,
                type: "post",
                data: {
                    txtID: id_freelancer_portfolio,
                    txtNome: nome_projeto_portfolio,
                    txtLink: link_projeto_portfolio,
                    txtImg: img_projeto_portfolio

                },
                success: function(data, status, xhr) {
                    // console.log('foi');
                    alert(data);
                    $('#txtNome').val("");
                    $('#txtLink').val("");
                    $('#txtImg').removeAttr('src');

                },
                error: function(jqXhr, textStatus, errorMessage, data) {
                    alert("Ops, algo deu errado. Tente novamente em alguns minutos.");
                }
            })

        })
    </script>
</body>

</html>