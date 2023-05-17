<?php

include_once('Projeto/TelaLoginteste/conexao.php');

if($_POST){
    $id_freelancer_portfolio = $_POST['txtID'];
    $nome_projeto_portfolio = $_POST['txtNome'];
    $img_projeto_portfolio = $_POST['txtImg'];
    $link_projeto_portfolio = $_POST['txtLink'];
    $status_projeto_porfolio = 'Ativo';
    $obs_projeto_porfolio = '';

    try {
        $sql = $conn->prepare(
            "insert into Portfolio_Freelancer
            (nome_projeto_portfolio, id_freelancer_portfolio, img_projeto_portfolio, status_projeto_porfolio, obs_projeto_porfolio)
            values
            (:nome_projeto_portfolio, :id_freelancer_portfolio, :img_projeto_portfolio, :status_projeto_porfolio, :obs_projeto_porfolio);"
        );

        $sql->execute(array(
            ':nome_projeto_portfolio'=>$nome_projeto_portfolio,
            ':id_freelancer_portfolio'=>$id_freelancer_portfolio,
            ':img_projeto_portfolio'=>$img_projeto_portfolio,
            ':status_projeto_porfolio'=>$status_projeto_porfolio,
            ':obs_projeto_porfolio'=>$obs_projeto_porfolio
        ));

        if ($sql->rowCount() > 0) {
            echo 'Projeto cadastrado com sucesso!';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
    