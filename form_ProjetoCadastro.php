<?php
include_once('Projeto/TelaLoginteste/conexao.php');

if ($_POST) {

    $nome_projeto = $_POST['txtNome'];
    $Linguagem_projeto = $_POST['txtLinguagem'];
    $descricao_projeto = $_POST['txtDescricao'];
    $Img_projeto = $_POST['txtImg'];
    $versao = $_POST['txtVersao'];
    $status = $_POST['txtStatus'];
    $id = $_POST['txtIDcontratante'];
    // print_r($_POST);
    // return;
    try {
        $sql = $conn->prepare("insert into projeto
        (id_contratante_projeto,id_linguagem_projeto, nome_projeto, img_projeto, versao_projeto, status_projeto, obs_projeto)
        values
        (:id_contratante_projeto,:id_linguagem_projeto,:nome_projeto,:img_projeto,:versao_projeto,:status_projeto,:obs_projeto)");

        $sql->execute(array(
            ':id_contratante_projeto' => $id,
            ':id_linguagem_projeto' => $Linguagem_projeto,
            ':nome_projeto' => $nome_projeto,
            ':img_projeto' => $Img_projeto,
            ':versao_projeto' => $versao,
            ':status_projeto' => $status,
            ':obs_projeto' => $descricao_projeto,
        ));

        if ($sql->rowCount() > 0) {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p id='idGerado'>" . $conn->lastInsertId() . "</p>";
        };
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
