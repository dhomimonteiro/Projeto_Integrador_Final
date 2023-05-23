<?php

    include_once('Projeto/TelaLoginteste/conexao.php');


    try {
        $sql = $conn->query("SELECT projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
        projeto.img_projeto, linguagem.nome_linguagem from projeto
        INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
        INNER JOIN Freelancer on projeto.id_freelancer_projeto = freelancer.id_freelancer
        INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where projeto.id_freelancer_projeto = $idUsuario;");

        if ($sql->rowCount() == 0){
            echo 'Você não possui projetos na GetDev.';
        };

        while ($row = $sql->fetch()) {
            $nome_projeto = $row[0];
            $descricao_projeto = $row[1];
            $status_projeto = $row[2];
            $nome_contratante = $row[4];
            $img_projeto = $row[5];
            $linguagem_projeto = $row[6];

            echo "
            <div class='col-sm-3'>
                <img src='$img_projeto' alt='' style='background-color: #000; object-fit: cover' class='w-100 h-100 me-2'>
                <p class='nome-do-projeto'>$nome_projeto</p>
            </div>
            ";

        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    ?>