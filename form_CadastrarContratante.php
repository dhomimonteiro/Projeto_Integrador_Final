<?php 
include_once('Projeto/TelaLoginteste/conexao.php');

// print_r($_POST);
// return;

if($_POST){

        $nome_contratante = $_POST['txtNome'];
        $img_contratante = $_POST['txtImg'];
        $CNPJ_contratante = $_POST['txtCNPJ'];
        $login_contratante = $_POST['txtLogin'];
        $senha_contratante = $_POST['txtSenha'];
        $logradouro_contratante = $_POST['txtLogradouro'];
        $numero_contratante = $_POST['txtNumero'];
        $cidade_contratante = $_POST['txtCidade'];
        $bairro_contratante = $_POST['txtBairro'];
        $uf_contratante = $_POST['txtUF'];
        $cep_contratante = $_POST['txtCEP'];
        $telefone1_contratante = $_POST['txtTelefone1'];
        $telefone2_contratante = $_POST['txtTelefone2'];
        $status_contratante = 'ativo';
        $obs_contratante = '';

    try{
            $sql = $conn->prepare(
            "insert into Contratante
                (nome_contratante, img_contratante, cnpj_contratante, telefone1_contratante, telefone2_contratante, logradouro_contratante, numero_contratante,
                bairro_contratante, cidade_contratante, uf_contratante, cep_contratante, login_contratante, senha_contratante, status_contratante,
                obs_contratante)
                values
                (:nome_contratante, :img_contratante, :cnpj_contratante, :telefone1_contratante, :telefone2_contratante, :logradouro_contratante, :numero_contratante,
                :bairro_contratante, :cidade_contratante, :uf_contratante, :cep_contratante, :login_contratante, :senha_contratante, :status_contratante,
                :obs_contratante)");

                $sql->execute(array(
                    ':nome_contratante'=>$nome_contratante,
                    ':img_contratante'=>$img_contratante,
                    ':cnpj_contratante'=>$CNPJ_contratante,
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

                if($sql->rowCount() > 0)
                {
                    echo "<p>Dados cadastrados com sucesso</p>";
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