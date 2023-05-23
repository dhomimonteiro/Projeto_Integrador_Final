<?php
 include_once('Projeto/TelaLoginteste/conexao.php');

if($_POST){
    $status = $_POST["status"];
    $id = $_POST["id_projeto"];
    // echo $status . $id;
    try {
        $sql = $conn->prepare(
            'UPDATE projeto set
            status_projeto=:status_projeto where id_projeto =:id_projeto;
            '
        );

        $sql->execute(array(
            ':status_projeto'=>$status,
            ':id_projeto'=>$id
        ));
        
        
        if ($sql->rowCount()==1) {
            echo "<p>Dados alterados com sucesso</p>";
        }
    } catch (PDOException $ex) {
        $ex->getMessage();
    }
}