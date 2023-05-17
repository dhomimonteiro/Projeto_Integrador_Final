<?php

include_once('Projeto/TelaLoginteste/conexao.php');

    try {
        $sql = $conn->query("SELECT * from Portfolio_Freelancer where id_freelancer_portfolio= $idUsuario");

        if ($sql->rowCount() == 0){
            echo '
            <div class="row mt-5">
                <div class="col-sm-12 d-flex flex-column align-items-center">
                    <h4> Ops, esse freelancer não tem um portfólio! :( </h4>
                    <img src="img/no-found-portfolio.png" style="height:400px">
                </div>
            </div>
            ';
        }

        while($row = $sql->fetch()){
            $img = $row[3];
            echo '
                    <div class="col-sm-12 col-lg-4  d-flex flex-row justify-content-center">
                        <img src="'.$img.'" style="height: 150px; width:250px; background-color:black">
                    </div>
            ';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
