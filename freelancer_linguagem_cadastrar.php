<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    
    if ($_POST) {
        //  print_r($_POST);
        $id_freelancer = $_POST['txtID'];
        $id_linguagem = $_POST['txtLinguagem'];
        $status_linguagem = 'Ativo';
        $obs_linguagem = '';

    
        try {
            $sql = $conn->prepare(
                "insert into FreelancerLinguagem
                (id_freelancer_freelancerLinguagem, id_linguagem_freelancerLinguagem, status_freelancerLinguagem, obs_freelancerLinguagem)
                values
                (:id_freelancer_freelancerLinguagem, :id_linguagem_freelancerLinguagem, :status_freelancerLinguagem, :obs_freelancerLinguagem);"
            );

            $sql->execute(array(
                ':id_freelancer_freelancerLinguagem'=>$id_freelancer,
                ':id_linguagem_freelancerLinguagem'=>$id_linguagem,
                ':status_freelancerLinguagem'=>$status_linguagem,
                ':obs_freelancerLinguagem'=>$obs_linguagem
            ));

            if ($sql->rowCount() > 0) {
                echo 'Linguagens cadastradas com sucesso';
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
// ?>