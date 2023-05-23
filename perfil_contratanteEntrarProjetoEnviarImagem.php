<?php

include_once('Projeto/TelaLoginteste/conexao.php');

if($_POST){
    $img = $_POST['txtImg'];
    $id = $_POST['id_projeto'];
    // echo $id;

    try {
        $sql = $conn->prepare(
            'UPDATE projeto set
            img_projeto=:img_projeto where id_projeto =:id_projeto;
            '
        );

        $sql->execute(array(
            ':img_projeto'=>$img,
            ':id_projeto'=>$id
        ));
        
        
        if ($sql->rowCount()==1) {
            echo "Dados alterados com sucesso";
        }else{
            echo 'a';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}