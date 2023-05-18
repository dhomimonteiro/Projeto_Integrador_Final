<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("select * from Contratante  where id_contratante = $idUsuario");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($linha = $sql->fetch()) {
    $ID = $linha[0];
    $Nome = $linha[1];
    $imgContratante = $linha[2];
    $status = $linha[14];
    $obs = $linha[15];


}

?>