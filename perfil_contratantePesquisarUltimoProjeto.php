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
                $imgPro = $linha[6];
        
                echo
                '<a href="perfil_contratanteEntrarProjeto.php?Projeto='.$idprojeto.'"  style="text-decoration: none;">'.
                        '<div class="card cardr mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="'.$imgPro.'" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title cardtitle mb-5">'.$nome.'</h5>
                                    <p class="card-text cardtext">'.$obs.'</p>
                                    <p class="card-text cardtext"><small class="text-muted">'.$status.'</small></p>
                                </div>
                                </div>
                            </div>
                            </div>'.
                '</a>'
                    ;
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
