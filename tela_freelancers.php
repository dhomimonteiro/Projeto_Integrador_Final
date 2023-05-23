<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancers</title>

    <link rel="stylesheet" href="css/fontes.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <!--LINK DO FONT AWESOME PARA ÍCONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .img {
            width: 100%;
            height: 300px;
            max-width: 600px;
            
        }

        .img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom-left-radius: 60px;
            border-bottom-right-radius: 60px;
        }

        .titulo-menu {
            background-color: #1e102e;
            color: #e6e6e6;
            padding: 2px;
            height: 35px;
            /*           width: 400px; */
            line-height: 35px;
        }

        .titulo-menu:first-child {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .panel {
            /*          width: 350px; */
            padding: 0 18px;
            background-color: #fff;
            display: none;
            overflow: hidden;
        }



        .filtro-menu button {
            outline: none;
            border: none;
            background-color: var(--roxo-escuro);
        }

        .tituloFreelancer {
            font-family: 'Poppins';
            font-weight: 600;
        }

        .destaque {
            color: #7d2ae8;
        }
    </style>
</head>

<body>
    <?php
    include_once('cabecalho_autenticar.php');

    ?>

    <div class="container">
        <div class="row d-flex flex-column-reverse align-items-sm-center flex-lg-row">
            <div class="col-sm-12 col-md-10 col-lg-6 topo-freelancers mt-4">
                <h1 class="tituloFreelancer text-sm-center text-md-start">Contrate um desenvolvedor de acordo com o que <span class="destaque"> você precisa!</span></h1>

                <p class="pt-2">A GetDev possui profissionais experientes em todas as áreas de desenvolvimento e com as mais variadas linguagens de programação. Encontre aqui quem você precisa!</p>
            </div>

            <div class="col-md-2 col-lg-4 img">
                <img src="img/img-tela-freelancer.png" alt="">
            </div>
        </div>
        <hr>
        <div class="row mt-2">
            <div class="col-sm-12 col-md-4 col-lg-4 mt-3">
                <div class="filtro-menu sticky-top">

                    <h5>Pesquise por nome</h5>
                    <div class=" menu-filtros px align-self-center text-center">
                        <input type="text" name="pesquisaNome" id="pesquisaNome" class="form-control mb-2">
                    </div>


                    <button class="accordion titulo-menu w-100">
                        <h5>Área</h5>
                    </button>
                    <div class="panel menu-filtros px align-self-center text-center">
                        <p class="small d-inline-block">
                            <input type="checkbox" name="area" class="area" value="Front-end">
                            Front-end
                        </p>
                        <p class="small d-inline-block">
                            <input type="checkbox" name="area" class="area" value="Back-end">
                            Back-end
                        </p>
                        <p class="small d-inline-block">
                            <input type="checkbox" name="area" class="area" value="Fullstack">
                            Fullstack
                        </p>

                    </div>

                    <div class="menu-filtros px-2 align-self-center text-center">

                    </div>
                    <button class="accordion titulo-menu w-100">
                        <h5>Linguagem</h5>
                    </button>
                    <div class="menu-filtros panel px-3 pt-2">
                        <div class="d-flex justify-content-start" style="flex-wrap: wrap;">
                            <?php
                            include_once('Projeto/TelaLoginteste/conexao.php');

                            try {
                                $sql = $conn->query('select * from Linguagem order by nome_linguagem');
                            } catch (PDOException $ex) {
                                echo $ex->getMessage();
                            }

                            while ($row = $sql->fetch()) {
                                echo '                             
                                   <p class="d-inline-block small" style="width: 91px">
                                    <input  type="checkbox" name="' . $row[1] . '" id="' . $row[1] . '" value="' . $row[0] . '" class="filtro">
                                    <label for="">' . $row[1] . '</label>
                                    </p>
                            ';
                            }
                            ?>

                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col sm-6 freelancers" style="min-height: 500px">

                <?php include('tela_freelancers_pesquisar.php'); ?>
            </div>

        </div>

    </div>
    </div>
    <?php include_once('rodape.php'); ?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        };

        var value = [];
        if ($('.filtro').click(function() {
                if ($(this).is(':checked')) {
                    value.push($(this).val());
                    /*  alert(value); */
                }
                if ($(this).is(':checked') == false) {
                    value.pop($(this).val());
                    /*  alert(value); */

                }

                $.ajax({
                    url: "tela_freelancer_fetch.php",
                    type: "POST",
                    data: "request=" + value,
                    beforeSend: function() {
                        $(".freelancers").html("Procurando");
                    },
                    success: function(data) {
                        $(".freelancers").html(data);
                    },
                    error: function(jqXhr, textStatus, errorMessage) {
                        $(".freelancers").html("Ops, algo de errado aconteceu. Recarregue a página para voltar ao normal!");
                    }
                })
            }));

        var area = "";
        if ($('.area').click(function() {
                var $box = $(this);
                if ($box.is(":checked")) {
                    var group = "input:checkbox[name='" + $box.attr("name") + "']";
                    $(group).prop("checked", false);
                    $box.prop("checked", true);
                    var area = $(this).val();
                } else {
                    $box.prop("checked", false);
                    var area = "";
                }

                $.ajax({
                    url: "tela_freelancer_fetch.php",
                    type: "POST",
                    data: "area= " + area,
                    beforeSend: function() {
                        $(".freelancers").html("Procurando");
                    },
                    success: function(data) {
                        $(".freelancers").html(data);
                    },
                    error: function(jqXhr, textStatus, errorMessage) {
                        $(".freelancers").html("Ops, algo de errado aconteceu. Recarregue a página para voltar ao normal!");
                    }
                })
            }));

        var texto = "";
        $('#pesquisaNome').on('input', function() {
            texto = $('#pesquisaNome').val();

            $.ajax({
                url: "tela_freelancer_fetch.php",
                type: "POST",
                data: "texto= " + texto,
                beforeSend: function() {
                    $(".freelancers").html("Procurando");
                },
                success: function(data) {
                    $(".freelancers").html(data);
                },
                error: function(jqXhr, textStatus, errorMessage) {
                    $(".freelancers").html("Ops, algo de errado aconteceu. Recarregue a página para voltar ao normal!");
                }
            })
        });
    </script>

</body>

</html>