<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    
try {

    $sql = $conn->query("SELECT MAX(id_projeto) FROM projeto where id_contratante_projeto = $idUsuario");

    if ($sql->rowCount() == 0) {
      echo 'Você não criou projetos com a GetDev';
    }


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
                '<div class="containerr">
  <div class="login-form">
    <div class="header">
    <label class="title">Seu ultimo projeto:</label>
    <p class="description">'.$nome  .'</p>
    </div>
    <div class="input_container">
    <p>'.$obs.'</p>
    </div>
    <a href="perfil_contratanteEntrarProjeto.php?Projeto='.$idprojeto.'" class="sign-in_btn" type="submit" title="Sign In">
    <span>Entrar no Projeto</span>
    </a>
  </div>
  <input type="text" style="display: none;" value="'.$idprojeto.'">
  <div class="testimonial">
    
    <div class="user-profile-picture">
    <img src="'.$imgPro.'" alt="" class="imgPro">
    </div>
  <div class="user">
    <span class="username">Status: '.$status.'</span>
  </div>
  </div>
</div>'

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
?>

<style>
   .j{
    text-align: justify;
   }
</style>

