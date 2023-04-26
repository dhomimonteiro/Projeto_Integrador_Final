<?php
    include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("Select * from Linguagem");


    while($linha = $sql->fetch()){

        $ID = $linha[0];
        $Nome = $linha[1];
        

        echo
        '<option value="'.$ID.'">'.$Nome.'</option>';
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
