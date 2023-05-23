<style>
    .imagemPortfolio:hover {
        cursor: pointer;
        transform: scale(1.1);
        transition: 0.2s;
    }
</style>

<?php

include_once('Projeto/TelaLoginteste/conexao.php');

    try {
        $sql = $conn->query("SELECT * from Portfolio_Freelancer where id_freelancer_portfolio= $idUsuario order by id_projeto_porfolio desc");

        if ($sql->rowCount() == 0){
            echo '
            <div class="row mt-5">
                <div class="col-sm-12 d-flex flex-column align-items-center">
                    <h4> Ops, esse freelancer não tem um portfólio! </h4>
                    <img src="img/no-found-portfolio.png" style="height:400px">
                </div>
            </div>
            ';
        }

        while($row = $sql->fetch()){
            $nome = $row[1];
            $img = $row[3];
            $link = $row[4];
            echo '
                    <div class="col-sm-12 col-lg-4 d-flex flex-row justify-content-center " id="imagem-portfolio">
                        <div class="imagens d-flex flex-column">
                            <img src="'.$img.'" class="w-100 h-100 imagemPortfolio" style="cursor: pointer" id="myImg" alt="'.$nome.'">
                            <p style="font-weight: 500;">'.$nome.'</p>
                            <p class="link-projeto" id="link-projeto" style="display: none; ">'.$link.'</p>
                        </div>
                    </div>
            ';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
