<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form_CadastroContratante.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/dfcce2b32e.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
    <style>
        .imgProjeto {
            max-width: 200px;
            max-height: 200px;
            min-width: 200px;
            min-width: 200px;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        .cards {
            border-radius: 5px;
            box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
            padding: 30px;
            margin: 20px;
            width: auto;
            transition: all 0.3s ease-out;
        }
    </style>
    <?php include_once('Projeto/TelaLoginteste/conexao.php') ;
        $IDProjeto = $_GET["Projeto"];
        // echo $IDProjeto;
        try {
            $sql = $conn->query("select * from Projeto where id_projeto = $IDProjeto");
        
            while($linha = $sql->fetch()){
                $idProjeto = $linha[0];
                $nomeProjeto = $linha[4];
                $obs = $linha[9];
                $status = $linha[8];
                $id = $linha[1];
                $img = $linha[5];
                      
                echo 
                '<input type="text" style="display: none" id="txtIdProjeto" class="txtIdProjeto" value="'.$idProjeto.'"></input>'.
                '<div class="container">'.
                    '<div id="form">'.
                        '<div class="row">'.
                            '<div class="col-sm-12">'.
                                '<h1 style="text-align: center; border: 1px #800080 solid; padding: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">'.
                                    'Projeto: '.$nomeProjeto.
                                '</h1>'.
                            '</div >'.
                        '</div>'.
                        '<div class="row my-3">
                        <div class="col-sm-12 mt-2 d-flex justify-content-center">
                            <img src="'.$img.'" alt="" style="height: 150px; width:250px; background-color: black; object-fit: cover;" id="preImg">
                        </div>
                        <div class="col-sm-12 mt-2 d-flex justify-content-center">
                            <input type="file" onchange="previewFile(this)" name="txtImg" id="txtImg">
                            <button type="button" class="ms-4 btn-sm btn btn-primary" id="btoSalvar">Salvar foto</button>
                        </div>
                    </div>'.
                        '<div class="row">'.
                            '<div class="col-sm-12">'.
                                '<div class="row">'.
                                    '<div class="col-sm-12">'.
                                        '<div class="card cards">'.
                                            '<p>'.$obs.'</p>'.
                                        '</div>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row">'.
                            '<div class="col-sm-2"></div>'.
                            '<div class="col-sm-4">'.
                                '<button href="perfil_contratante.php" class="btn btn-primary form-control" onclick="finalizarProjeto()">Finalizar projeto</button>'.
                            '</div>'.
                            '<div class="col-sm-3">'.
                                '<a href="perfil_contratante.php" class="btn btn-danger form-control">Voltar</a>'.
                            '</div>'.
                            
                            '<div class="col-sm-3"></div>'.
                            ' <div class="row mt-4" style="display: none">
                            <div class="col-sm-12">
                                <textarea name="base64Code" class="form-control" id="base64Code" rows="5"></textarea>
                            </div>
                        </div>'.
                        '</div>'.
                    '</div>'.
                '</div>';
            }
            
        
        }
         catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        

    ?>


    <script src="form_CadastroContratante.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
        function finalizarProjeto(){
            let id_projeto = $('#txtIdProjeto').val();
   
            let status = "Finalizado";
            let action = "perfil_contratanteEntrarProjetoFinalizar.php";
            $.ajax({
                url: action,
                type: 'post',
                data: {
                status,
                id_projeto
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
            })
        }

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
        $("#btoSalvar").click(function(){
            let id_projeto = $('#txtIdProjeto').val();
            let img_projeto = $('#base64Code').val();
            let action = 'perfil_contratanteEntrarProjetoEnviarImagem.php';

            $.ajax({
                url: action,
                type: 'post',
                data: {
                    id_projeto,
                    txtImg: img_projeto
                },
                beforeSend: function() {
                    $('#resultado').html("ENVIANDO...");
                },
                success: function(data, status, xhr) {
                    alert(data);
                    // $('.modal').show();
                    // $('.btn-close').click(function(){
                    //     $('.modal').hide();
                        
                    // })
                },
                error: function (jqXhr, textStatus, errorMessage, data) {
                    $('#resultado').html(errorMessage, data);
                }
                    })
                })
            
    </script>
</body>

</html>