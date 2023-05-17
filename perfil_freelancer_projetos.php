<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus projetos</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .nome-do-projeto {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <?php include_once('cabecalho_autenticar.php'); ?>
    <?php

    include_once('Projeto/TelaLoginteste/conexao.php');


    try {
        $sql = $conn->query("SELECT projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
        contratante.img_contratante, linguagem.nome_linguagem from projeto
        INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
        INNER JOIN Freelancer on projeto.id_freelancer_projeto = freelancer.id_freelancer
        INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where projeto.id_freelancer_projeto = $idUsuario;");

        while ($row = $sql->fetch()) {
            $nome_projeto = $row[0];
            $descricao_projeto = $row[1];
            $status_projeto = $row[2];
            $nome_contratante = $row[4];
            $img_contratante = $row[5];
            $linguagem_projeto = $row[6];
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    ?>

    <div class="container-fluid">
        <div class="row row-titulo">
            <div class="col-sm-12">
                <h1 class="titulo">Meus projetos</h1>
            </div>
        </div>
        <div class="row px-3">
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repudiandae hic magni itaque ut quas doloribus iste dolorem quam atque quaerat officiis a similique quod praesentium in, rem laborum obcaecati.</p>
                <p class="nome-do-projeto">Nome do projeto</p>
            </div>
        </div>
    </div>

    <?php include_once('rodape.php'); ?>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
</body>

</html>