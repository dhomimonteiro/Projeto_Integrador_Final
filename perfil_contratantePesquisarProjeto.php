<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    

try {
    $sql = $conn->query("select date_format(dtCriacao_projeto,'%d/%m/%Y'),nome_projeto,status_projeto,obs_projeto,id_linguagem_projeto ,id_projeto, img_projeto
            from Projeto where id_contratante_projeto = $idUsuario");

            $projeto = 'casa';

    while($linha = $sql->fetch()){

        $nome = $linha[1];
        $obs = $linha[3];
        $data = $linha[0];
        $status = $linha[2];
        $id = $linha[4];
        $idprojeto = $linha[5];
        $img = $linha[6];

        echo
            '<div class="col-sm-6 mb-4">'.
                '<div class="card Cards">'.
                   '<div class="row">'.
                        '<div class="col-sm-12">'.
                            '<h3>'.$nome.'</h3>'.
                            '<hr>'.
                        '</div>'.
                    '</div>'.
                   ' <div class="row">'.
                        '<div class="col-sm-12">'.
                            '<p>'.$obs.'</p>'.
                        '</div>'.
                   '</div>'.
                    '<hr>'.
                    '<div class="row mb-4">'.
                        '<div class="col-sm-2"></div>'.
                        '<div class="col-sm-8">'.
                                '<a href="perfil_contratanteEntrarProjeto.php" class="btn  btn-success form-control">Entrar no projeto</a>'.
                        '</div>'.
                        '<div class="col-sm2"></div>'.
                    '</div>'.
                '</div>'.
            '</div>';
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
