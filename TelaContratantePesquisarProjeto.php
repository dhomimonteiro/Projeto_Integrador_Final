<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("select date_format(dtCriacao_projeto,'%d/%m/%Y'),nome_projeto,status_projeto,obs_projeto
    from Projeto");


    while($linha = $sql->fetch()){

        $nome = $linha[1];
        $obs = $linha[3];
        $data = $linha[0];
        $status = $linha[2];
        

        echo
        '<div class="row">'.
            '<div class="col-sm-12">'.
                '<div class="card mt-5">'.
                    '<div class="card-body">'.
                        '<div class="row">'.
                            '<div class="col-sm-8">'.
                                ' <h5 class="card-title">'.$nome.'</h5>'.
                                '<hr>'.
                            '</div>'.
                            '<div class="col-sm-4">'.
                                '<p>Criação: '.$data.'</p>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row">'.
                            '<div class="col-sm-4">'.
                                '<img src="img/image.jpeg" class="imgCard" alt="" srcset="">'.
                            '</div>'.
                            '<div class="col-sm-8">'.
                                '<p class="card-text">'.$obs.'</p>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row ">'.
                            '<div class="col-sm-8"></div>'.
                            '<div class="col-sm-4">'.
                                '<a href="" class="btn btn-primary">Mandar Proposta</a>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</div>'.
        '</div>';
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
