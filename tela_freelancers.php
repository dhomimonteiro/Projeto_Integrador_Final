<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <!--LINK DO FONT AWESOME PARA ÍCONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once('cabecalhoLogado.php');?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 topo-freelancers">
                <h1 class="tituloFreelancer">Contrate um desenvolvedor de acordo com o que você precisa!</h1>
                <hr>
                <p>A GetDev possui profissionais experientes em todas as áreas de desenvolvimento e com as mais variadas linguagens de programação. Encontre aqui quem você precisa!</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p class="text-end">aqui vai uma imagem mt foda</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 sticky-top">
                <div class="filtro-menu">
                    <div class="titulo-menu">
                        <h2>Área</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('rodape.php');?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
</body>
</html>