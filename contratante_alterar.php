<?php
    include_once('Projeto/TelaLoginteste/conexao.php');
    

    if ($_POST) {
        
        $id_contratante = $_POST['txtID'];
        $nome_contratante = $_POST['txtNome'];
        $img_contratante = $_POST['txtImg'];
        $cnpj_contratante = $_POST['txtCNPJ'];
        $login_contratante = $_POST['txtLogin'];
        $senha_contratante = $_POST['txtSenha'];
        $telefone1_contratante = $_POST['txtTelefone1'];
        $telefone2_contratante = $_POST['txtTelefone2'];
        $obs_contratante = $_POST['txtObs'];
        $status_contratante = $_POST['txtStatus'];
        $cep_contratante = $_POST['txtCEP'];
        $uf_contratante = $_POST['txtUF'];
        $cidade_contratante = $_POST['txtCidade'];
        $bairro_contratante = $_POST['txtBairro'];
        $logradouro_contratante = $_POST['txtLogradouro'];
        $numero_contratante = $_POST['txtNumero'];
        

        // print_r($_POST);

        try {
            $sql = $conn->prepare(
                'UPDATE Contratante set
                nome_contratante=:nome_contratante,
                img_contratante=:img_contratante,
                cnpj_contratante=:cnpj_contratante,
                telefone1_contratante=:telefone1_contratante,
                telefone2_contratante=:telefone2_contratante,
                logradouro_contratante=:logradouro_contratante,
                numero_contratante=:numero_contratante,
                bairro_contratante=:bairro_contratante,
                cidade_contratante=:cidade_contratante,
                uf_contratante=:uf_contratante,
                cep_contratante=:cep_contratante,
                login_contratante=:login_contratante,
                senha_contratante=:senha_contratante,
                status_contratante=:status_contratante,
                obs_contratante=:obs_contratante where id_contratante =:id_contratante
                '
            );

            $sql->execute(array(
                ':id_contratante'=>$id_contratante,
                ':nome_contratante'=>$nome_contratante,
                ':img_contratante'=>$img_contratante,
                ':cnpj_contratante'=>$cnpj_contratante,
                ':telefone1_contratante'=>$telefone1_contratante,
                ':telefone2_contratante'=>$telefone2_contratante,
                ':logradouro_contratante'=>$logradouro_contratante,
                ':numero_contratante'=>$numero_contratante,
                ':bairro_contratante'=>$bairro_contratante,
                ':cidade_contratante'=>$cidade_contratante,
                ':uf_contratante'=>$uf_contratante,
                ':cep_contratante'=>$cep_contratante,
                ':login_contratante'=>$login_contratante,
                ':senha_contratante'=>$senha_contratante,
                ':status_contratante'=>$status_contratante,
                ':obs_contratante'=>$obs_contratante
            ));
            
            
            if ($sql->rowCount()==1) {
                echo "<p>Dados alterados com sucesso</p>";
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }else {
        echo "<p>Deu certo não</p>";
     }
?>