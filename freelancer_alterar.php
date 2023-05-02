<?php
    include_once('Projeto/TelaLoginteste/conexao.php');

    if ($_POST) {
        $nome_freelancer = $_POST['txtNome'];
        $img_freelancer = $_POST['txtImg'];
        $cpf_freelancer = $_POST['txtCPF'];
        $rg_freelancer = $_POST['txtRG'];
        $celular1_freelancer = $_POST['txtCelular1'];
        $celular2_freelancer = $_POST['txtCelular2'];
        $telefone_freelancer = $_POST['txtTelefone'];
        $logradouro_freelancer = $_POST['txtLogradouro'];
        $numero_freelancer = $_POST['txtNumero'];
        $bairro_freelancer = $_POST['txtBairro'];
        $cidade_freelancer = $_POST['txtCidade'];
        $uf_freelancer = $_POST['txtUF'];
        $cep_freelancer = $_POST['txtCEP'];
        $dataNasc_freelancer = $_POST['txtDataNasc'];
        // $dtNascimento_freelancer = $_POST['txtDataNasc'];
        $banco_freelancer = $_POST['txtBanco'];
        $agencia_freelancer = $_POST['txtAgencia'];
        $contaCorrente_freelancer = $_POST['txtContaCorrente'];
        $login_freelancer = $_POST['txtLogin'];
        $email_freelancer = $_POST['txtEmail'];
        $senha_freelancer = $_POST['txtSenha'];
        $status_freelancer = 'Ativo';
        $obs_freelancer = '';

        print_r($_POST);

        try {
            $sql = $conn->prepare(
                'UPDATE freelancer set
                nome_freelancer=:nome_freelancer,
                img_freelancer=:img_freelancer,
                cpf_freelancer=:cpf_freelancer,
                rg_freelancer=:rg_freelancer,
                celular1_freelancer=:celular1_freelancer,
                celular2_freelancer=:celular2_freelancer,
                telefone_freelancer=:telefone_freelancer,
                logradouro_freelancer=:logradouro_freelancer,
                numero_freelancer=:numero_freelancer,
                bairro_freelancer=:bairro_freelancer,
                cidade_freelancer=:cidade_freelancer,
                uf_freelancer=:uf_freelancer,
                cep_freelancer=:cep_freelancer,
                dtNascimento_freelancer=:dtNascimento_freelancer,
                banco_freelancer=:banco_freelancer,
                agencia_freelancer=:agencia_freelancer,
                contaCorrente_freelancer=:,
                login_freelancer=:login_freelancer,
                email_freelancer=:email_freelancer,
                senha_freelancer=:senha_freelancer,
                status_freelancer=:status_freelancer,
                obs_freelancer=:obs_freelancer 
                '
            );
            $sql->execute(array(
                'nome_freelancer'=>$nome_freelancer,
                'img_freelancer'=>$img_freelancer,
                'cpf_freelancer'=>$cpf_freelancer,
                'rg_freelancer'=>$rg_freelancer,
                'celular1_freelancer'=>$celular1_freelancer,
                'celular2_freelancer'=>$celular2_freelancer,
                'telefone_freelancer'=>$telefone_freelancer,
                'logradouro_freelancer'=>$logradouro_freelancer,
                'numero_freelancer'=>$numero_freelancer,
                'bairro_freelancer'=>$bairro_freelancer,
                'cidade_freelancer'=>$cidade_freelancer,
                'uf_freelancer'=>$uf_freelancer,
                'cep_freelancer'=>$cep_freelancer,
                'dtNascimento_freelancer'=>$dataNasc_freelancer,
                'banco_freelancer'=>$banco_freelancer,
                'agencia_freelancer'=>$agencia_freelancer,
                'contaCorrente_freelancer'=>$contaCorrente_freelancer,
                'login_freelancer'=>$login_freelancer,
                'email_freelancer'=>$email_freelancer,
                'senha_freelancer'=>$senha_freelancer,
                'status_freelancer'=>$status_freelancer,
                'obs_freelancer'=>$obs_freelancer
            ));

            if ($sql->rowCount()==1) {
                echo "<p>Dados alterados com sucesso</p>";
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }
?>