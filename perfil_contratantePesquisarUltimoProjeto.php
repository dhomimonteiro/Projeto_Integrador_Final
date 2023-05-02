<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    

try {

    $sql = $conn->query("SELECT MAX(id_projeto) FROM projeto where id_contratante_projeto = $idUsuario");

    while($linha = $sql->fetch()){
        $UltimoProjeto = $linha[0];

        try {
            $sql = $conn->query("select date_format(dtCriacao_projeto,'%d/%m/%Y'),nome_projeto,status_projeto,obs_projeto,id_linguagem_projeto ,id_projeto, img_projeto
            from Projeto where id_projeto = $UltimoProjeto");

           if($linha = $sql->fetch()){

                $nome = $linha[1];
                $obs = $linha[3];
                $data = $linha[0];
                $status = $linha[2];
                $id = $linha[4];
                $idprojeto = $linha[5];
                $img = $linha[6];
        
                echo
               '<div class="card">'.
                '<div class="seu-projeto">'.
                    '<h1 style="text-align: center; ">Ultimo projeto</h1>'.
                    '<hr>'.
                    '<div class="card-title">'.
                        '<h2 class="ms-4 mt-4">'.$nome.'</h2>'.
                    '</div>'.
                    '<div class="card-body">'.
                        '<div class="row">'.
                            '<div class="col-md-12">'.
                                '<div class="img-empresa">'.
                                    '<img src="'.$img.'" alt="">'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                       '<div class="row">'.
                            '<div class="col-md-12">'.
                                '<p class="descricao-s.eu-projeto">'.
                                    $obs.
                                '</p>'.
                            '</div>'.
                        '</div>'.
                        '<div class="row">'.
                            '<div class="col-sm-4 status">'.
                                '<p class="text-center">'.$status.'</p>'.
                            '</div>
                        </div>
                    </div>
                </div>
            </div>';
            }
            return;
        

        } 
        catch (PDOException $ex) {
                echo $ex->getMessage();
        }
    }

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
