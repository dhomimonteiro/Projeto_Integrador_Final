<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetDev</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <!--LINK DO FONT AWESOME PARA ÍCONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    
    <!--FORA DE CONTAINER PQ TAVA COM MARGEM-->
    <?php include_once('cabecalho_autenticar.php'); ?>
    <!--FORA DE CONTAINER PQ TAVA COM MARGEM-->
    <?php include_once('imagem_home.php'); ?>

    <?php include_once('quem_somos_home.php');?>

    <div class="container-fluid">
    <div class="row sessaoProjetos">
            <?php include_once('projetos_home.php');?>
        </div>
        <div class="row sessaoParceiros">
            <?php include_once('parceiros_home.php');?>
        </div>
        <div class="row sessaoLinguagens">
            <?php include_once('linguagens_home.php');?>
        </div>
        <!--VOLTOU COM A MARGEM-->
        <?php include_once('rodape.php'); ?>
    </div>
    

    
    



    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="Projeto/TelaLoginteste/script.js"></script>

    
</body>

</html>