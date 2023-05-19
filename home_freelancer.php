<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .search-bar {
            width: 500px;
            height: 30px;
        }

        .pesquisa {
            border: none;
            background-color: #eee;
            border-radius: 30px;
            width: 100%;
        }

        .btoPesquisar {
            border: none;
            outline: none;
            background-color: transparent;
        }

        .btoPesquisar:hover {
            transform: scale(1.1);
            transition: .1s;
            background-color: #f8f8f8;
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <?php include_once('cabecalho_autenticar.php'); ?>
    <main class="main">
        <div class="container">
            <div class="row mt-4">
                <div class="col-sm-12 d-flex justify-content-center">
                    <form action="" class="search-bar d-flex justify-content-center">
                        <input type="text" placeholder="Pesquise projetos" name="pesquisa" class="pesquisa px-2">
                        <button type="submit" class="btoPesquisar"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <h1 style="font-size:30px;">Projetos recomendados</h1>
                    <p>Projetos recomendados com base nas suas linguagens!</p>
                </div>
                <div class="projetos-recomendados">
                    <?php include_once('home_freelancer_projetosRec.php');?>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('rodape.php'); ?>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
</body>

</html>