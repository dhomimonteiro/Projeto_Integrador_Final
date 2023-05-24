<?php
    include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT date_format(dtCriacao_projeto,'%d/%m/%Y'),nome_projeto,status_projeto,obs_projeto,id_linguagem_projeto ,id_projeto, img_projeto
    from Projeto where status_projeto = 'Ativado'");


    while($linha = $sql->fetch()){

        $nome = $linha[1];
        $obs = $linha[3];
        $data = $linha[0];
        $status = $linha[2];
        $id = $linha[4];
        $idprojeto = $linha[5];
        $img = $linha[6];

        echo
        '<div class="row">'.
            '<div class="col-sm-12">'.
                '<div class="card mt-5">'.
                    '<div class="card-body">'.
                        '<div class="row">'.
                            '<div class="col-sm-6">'.
                                ' <h5 class="card-title cardtitle">'.$nome.'</h5>'.
                                '<hr>'.
                            '</div>'.
                            '<div class="col-sm-4">'.
                                '<p class="cardData">Criação: '.$data.'</p>'.
                                '<hr>'.
                            '</div>'.
                            '<div class="col-sm-2">'.
                                '<p class="cardStatus"> Status: '.$status.'</p>'.
                                '<hr>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row">'.
                            '<div class="col-sm-4">'.
                                '<img src="'.$img.'" class="imgCard" alt="" srcset="">'.
                            '</div>'.
                            '<div class="col-sm-8 mt-5">'.
                                '<p class="card-text">'.$obs.'</p>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row ">'.
                            '<div class="col-sm-5"></div>'.
                            '<div class="col-sm-3">';
                            try{
                                $sqli = $conn->query("select projeto.id_linguagem_projeto, Linguagem.id_linguagem , Linguagem.nome_linguagem
                                from Linguagem
                                inner join projeto
                                on Linguagem.id_linguagem = projeto.id_linguagem_projeto
                                where projeto.id_projeto = $idprojeto");  
                                
                                while($linhai = $sqli->fetch()){
                                    $NomeLinguagem = $linhai[2];
                                    echo '<p class="card-text">'.$NomeLinguagem.'</p>';
                                }
                                }

                            catch (PDOException $ex) {
                                echo $ex->getMessage();
                            }     
                            echo'</div>'.
                            '<div class="col-sm-4">'.
                                '<a href="MandarProposta.php?Projeto='.$idprojeto.'" class="btn btn-primary">Mandar Proposta</a>'.
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
