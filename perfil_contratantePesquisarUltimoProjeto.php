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
                $cont = 0;
                $cont = $cont + 1;
                $nome = $linha[1];
                $obs = $linha[3];
                $data = $linha[0];
                $status = $linha[2];
                $id = $linha[4];
                $idprojeto = $linha[5];
                $img = $linha[6];
        
                echo
               '<div class="card ultimo">'.
                '<div class="seu-projeto">'.
                    '<h1 class="textultimo" style="text-align: center; ">Ultimo projeto</h1>'.
                    '<hr>'.
                    
                    '<div class="card-body">'.
                        '<div class="row">'.
                            '<div class="col-sm-4">'.
                                '<div class="img-empresa form-control">'.
                                    '<img src="'.$img.'" alt="">'.
                                '</div>'.
                            '</div>'.
                            '<div class="col-sm-8 mt-2">'.
                                '<h2 style="margin-left:30px; margin-top:20px;">'.$nome.'</h2>'.
                            '</div>'.
                        '</div>'.
                       '<div class="row mt-4">'.
                            '<div class="card">'.
                                '<div class="col-sm-12">'.
                                    '<p class="descricao-seu-projeto">'.
                                        $obs.
                                    '</p>'.
                                '</div>'.
                            '</div>'.        
                        '</div>'.
                        '<div class="row mt-3">'.
                            '<div class="col-sm-6 form-control status">'.
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
