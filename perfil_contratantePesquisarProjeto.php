
<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    

try {
    $sql = $conn->query("select date_format(dtCriacao_projeto,'%d/%m/%Y'),nome_projeto,status_projeto,obs_projeto,id_linguagem_projeto ,id_projeto, img_projeto
            from Projeto where id_contratante_projeto = $idUsuario limit 8");


    while($linha = $sql->fetch()){

        $nome = $linha[1];
        $obs = $linha[3];
        $data = $linha[0];
        $status = $linha[2];
        $id = $linha[4];
        $idprojeto = $linha[5];
        $img = $linha[6];

        echo    
           
        '<div class="col-md-3 g-5">'.
        '<a href="perfil_contratanteEntrarProjeto.php?Projeto='.$idprojeto.'"  style="text-decoration: none;"> '. 
        '<div class="cardn">
              <img src="'.$img.'" style="width:100%; max-height: 200px;">
              <h2>'.$nome.'</h2>
              <p>'.$status.'</p>
              <p></p>'.
              '<input type="text" style="display: none ;" value="'.$idprojeto.'">'.
            '</div>'.
            '</a>'.
            '</div>'
            
            ;
    }
    

}
 catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>