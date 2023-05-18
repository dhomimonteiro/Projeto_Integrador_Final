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
            '<a href="perfil_contratanteEntrarProjeto.php?Projeto='.$idprojeto.'"  style="text-decoration: none;">'.
            '<div class="col">
            <div class="card cards">'.
            '<input type="text" id="IDprojeto" value="'.$idprojeto.'" style="display: none;">'.
                '<img src="'.$img.'" class="cardimg" alt="...">
                <div class="card-body">
                    <h5 class="cardtitle2">'.$nome.'</h5>
                </div>
            </div>
        </div>'.
        '</a>'
            ;
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}
