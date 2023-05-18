<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            height: 100vh;
            background-color: #f2f2f2;
        }

        .img {
            height: 200px;
            width: 200px;
            border-radius: 50%;
            padding: 3px;
            background-color: var(--roxo-escuro);
        }

        .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        .img-empresa {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            padding: 3px;
            background-color: #7d2ae8;
        }

        .img-empresa img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        .cartao {
            position: relative;
            width: 100%;
            background-color: #fff;
        }

        .cartao::before {
            content: "";
            position: absolute;
            height: 170px;
            width: 100%;
            background-color: var(--roxo-escuro);
        }

        .cartao-conteudo {
            position: relative;
            z-index: 10;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .conteudo-texto {
            width: 100%;
        }


        .status p {
            background-color: #7d2ae8;
            color: white;
            border-radius: 20px;
        }

        .fa-pen-to-square {
            font-size: 1.2em;
            cursor: pointer;
        }

        .fa-pen-to-square:hover {
            color: #7d2ae8;
        }

        .fa-plus {
            height: 20px;
            width: 20px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            cursor: pointer;
            color: var(--roxo-escuro);
        }

        .fa-plus:hover {
            background-color: #ccc;
        }

        .nome a {
            color: var(--roxo-escuro);
        }
    </style>

</head>


<body>
    <?php //include('perfil_autenticar.php');
    ?>
    <?php
    include_once('cabecalho_autenticar.php');
    include_once('Projeto/TelaLoginteste/conexao.php');

    if ($_POST) {
        // print_r($_POST);
        $id = $_POST["txtID"];

        try {
            $sql = $conn->query("SELECT * from Freelancer where id_freelancer = $id");

            while ($row = $sql->fetch()) {
                $id = $row[0];
                $nome = $row[1];
                $img = $row[2];
                $bio = $row[19];
                echo '
        <div class="cartao">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 d-flex justify-content-center">
                    <div class="d-flex justify-content-center ">
                        <div class="cartao-conteudo">
                        <input style="display: none" value="' . $id . '" id="txtID">
                       
                            <div class="img mt-4">
                                <img src="' . $img . '">
                            </div>
                            <div class="conteudo-texto d-flex justify-content-evenly
                        ">
                                <div class="contratacoes d-inline">
                                    <p class="small text-center">Vezes contratado: <br> <span style="font-weight: bold;"> 45</span>
                                    </p>
    
    
                                </div>
                                <div class="nome d-inline mx-5 w-25 d-flex justify-content-center">
                                
                                    <p class="text-center txtNome" style="font-weight: bold; font-size:30px; display:inline-block" id="txtNome" name="txtNome">' . $nome . '</p> 
                                    
                                </div>
                                <div class="avaliacao d-inline">
                                    <p class="text-center small">
                                        Avaliação <br>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="descricao px-3 w-75 mt-3">
                                <p>' . $bio . '
                                </p>
                            </div>
                            
                            <div>
                            
                            ';

                try {
                    $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
                                    freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
                                    INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row[0];");
                } catch (PDOException $ex) {
                    echo $ex->getMessage();
                }
                while ($linha = $sql2->fetch()) {
                    echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="d-inline mx-2 px-2">' . $linha[3] . '</p>';
                }
                echo '
                       
                        </div>
                    </div>
                    
                </div>
                
            </div>
           
            <div class="row d-flex justify-content-center my-2 mt-3">
                <div class="col-sm-10">
                    <hr>
                </div>
            </div>
            
            <div class="row pb-4">
            <div class="col-sm-1 col-md-1"></div>
                <div class="col-sm-10 col-md-10 col-lg-7 mt-3">
                    <div class="card" style="border:none">
                        <div class="portfolio pb-3">
                            <div class="row d-flex flex-row justify-content-center mb-3">
                                <h2 class="ps-4">Portfólio</h2>
                            </div>
                            <div class="row gy-5">';
                            include_once('portfolio_pesquisarvVisitante.php');
                            echo '
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-md-1 d-lg-none"></div>
                <div class="col-sm-1 col-md-1 d-lg-none"></div>
                <div class="col-sm-10 col-md-10 col-lg-3 mt-3">';

                include_once('freelancer_feedback.php');

                echo '</div>            
            </div>
        </div>
    </div>      
                ';
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    ?>
    <?php include_once('rodape.php'); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="freelancer_feedback.js"></script>
    <script>
        $(document).ready(function() {
            load_rating_data();

            
        })
    </script>
</body>