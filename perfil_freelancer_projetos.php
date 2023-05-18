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
    

    <div class="container-fluid">
        <div class="row row-titulo mt-3">
            <div class="col-sm-12">
                <h1 class="titulo">Meus projetos</h1>
            </div>
        </div>
        <div class="row px-3">
            
            <?php include_once('perfil_freelancer_projetos_pesquisar.php')?>
            
        </div>
    </div>

    <?php include_once('rodape.php'); ?>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
</body>

</html>