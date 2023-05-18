<?php

include_once('Projeto/TelaLoginteste/conexao.php');

if($_POST){
    $id_freelancer_portfolio = $_POST['txtID'];
    $nome_projeto_portfolio = $_POST['txtNome'];
    $img_projeto_portfolio = $_POST['txtImg'];
    $link_projeto_portfolio = $_POST['txtLink'];
    $status_projeto_portfolio = 'Ativo';
    $obs_projeto_portfolio = '';

    try {
        $sql = $conn->prepare(
            "insert into Portfolio_Freelancer
            (nome_projeto_portfolio, id_freelancer_portfolio, img_projeto_portfolio, link_projeto_portfolio, status_projeto_portfolio, obs_projeto_portfolio)
            values
            (:nome_projeto_portfolio, :id_freelancer_portfolio, :img_projeto_portfolio, :link_projeto_portfolio, :status_projeto_portfolio, :obs_projeto_portfolio);"
        );

        $sql->execute(array(
            ':nome_projeto_portfolio'=>$nome_projeto_portfolio,
            ':id_freelancer_portfolio'=>$id_freelancer_portfolio,
            ':img_projeto_portfolio'=>$img_projeto_portfolio,
            ':link_projeto_portfolio'=>$link_projeto_portfolio,
            ':status_projeto_portfolio'=>$status_projeto_portfolio,
            ':obs_projeto_portfolio'=>$obs_projeto_portfolio
        ));

        if ($sql->rowCount() > 0) {
            echo 'Projeto cadastrado com sucesso!';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
    