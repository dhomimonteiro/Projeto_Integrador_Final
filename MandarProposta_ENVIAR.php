<?php 
include_once('Projeto/TelaLoginteste/conexao.php');

// print_r($_POST);
// return;

if($_POST){

       $IDContratante = $_POST['txtIDContratante'];
       $IDFreelancer = $_POST['txtIDFreelancer'];
       $IDProjeto = $_POST['txtIDProjeto'];
       $Descrição = $_POST['txtDescricao'];

        
    try{
            $sql = $conn->prepare(
            "insert into MandarProposta
                (id_contratante_mandarproposta,id_freelancer_mandarproposta,id_projeto_mandarproposta,descricao_mandarproposta)
                values
                (:id_contratante_mandarproposta,:id_freelancer_mandarproposta,:id_projeto_mandarproposta,:descricao_mandarproposta)");

                $sql->execute(array(
                    ':id_contratante_mandarproposta'=>$IDContratante,
                    ':id_freelancer_mandarproposta'=>$IDFreelancer,
                    ':id_projeto_mandarproposta'=>$IDProjeto,
                    ':descricao_mandarproposta'=>$Descrição,
                ));

                if($sql->rowCount() > 0)
                {
                    echo "<p>Proposta enviada</p>";
                    echo "<p id='idGerado'>".$conn->lastInsertId()."</p>";
                }

        }

        catch (PDOException $ex) {
        echo $ex->getMessage();
        }

  }
else
{
     echo'nada';
}





?>