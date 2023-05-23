<?php
    include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT * from Linguagem order by nome_linguagem");


    while($linha = $sql->fetch()){

        $ID = $linha[0];
        $Nome = $linha[1];
        
        echo 
        // $ID . $Nome;
        '<option value="'.$ID.'">'.$Nome.'</option>';
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
